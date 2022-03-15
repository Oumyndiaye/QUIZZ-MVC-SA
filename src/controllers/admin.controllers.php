
<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
if($_SERVER['REQUEST_METHOD']=="POST" ){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="creerQuestion"){
            extract($_POST);
/*           valid_question($question,$nbre_point,$type);
 */            $question ;
            $nbre_point;
            foreach ($_POST  as $key=>$reponse) {
                if(str_contains($key,'reponse')){
                    $tab_reponse[]=$reponse;
                }elseif(str_contains($key,'correcte_rep')) {
                    $tab_correcte[]=$reponse;
                } 
            }
            if($type=='text'){
                $tab_correcte=$tab_reponse;
            }
            $data=array(
                "question" =>$question,
                "nbre_point"=>$nbre_point,
                "type_reponse"=>$type,
                "reponses"=>$tab_reponse,
                "reponse_correcte"=>$tab_correcte,

            );
                     array_to_json('Questions',$data);
                     header("location:".WEBROOT."?controllers=admin&action=creerQuestion");


        }
    }
}
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(!is_connect()){
        header("location:".WEBROOT);
    }
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="page_acceuil_admin"){
            if( is_admin()){
                lister_joueur();  
             }  
            elseif(is_joueur() ){
                jeu();
            }  
        }
         elseif($_REQUEST['action']=="formAdmin"){
            
            ob_start();
                require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."form.inc.html.php");
                $content_views = ob_get_clean();
                require_once(PATH_VIEWS."admin".DIRECTORY_SEPARATOR."acceuilAdmin.html.php");
        } 
        elseif($_REQUEST['action']=="listeJoueur"){
            if( is_admin()){
                lister_joueur();  
             }  
        }
        elseif($_REQUEST['action']=="creerQuestion"){
            ob_start();
            require_once(PATH_VIEWS."question".DIRECTORY_SEPARATOR."creerQuestion.html.php");   
             $content_views=ob_get_clean();
            require_once(PATH_VIEWS."admin".DIRECTORY_SEPARATOR."acceuilAdmin.html.php");
        }elseif($_REQUEST['action']=="listerQuestion"){
            lister_questions();
        }
        else{
            require_once(PATH_VIEWS."admin".DIRECTORY_SEPARATOR."acceuilAdmin.html.php");   
        } 
    }
}
function lister_joueur(){
    $data =  find_users(ROLE_JOUEUR);
    ob_start(); 
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
    $content_views = ob_get_clean();
    require_once(PATH_VIEWS."admin".DIRECTORY_SEPARATOR."acceuilAdmin.html.php");   
}
function jeu(){
   require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."jeu.html.php"); 
}
function creerAdmin(){
    ob_start(); 
    require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."form.inc.html.php"); 
    $form= ob_get_clean();
    require_once(PATH_VIEWS."admin".DIRECTORY_SEPARATOR."acceuilAdmin.html.php");    
}
function lister_questions(){
     $data=find_data("Questions");
     ob_start();
     require_once(PATH_VIEWS."question".DIRECTORY_SEPARATOR."liste.question.html.php");  
     $content_views=ob_get_clean();
     require_once(PATH_VIEWS."admin".DIRECTORY_SEPARATOR."acceuilAdmin.html.php");
 }
function valid_question(string $question,string $nbre_point,string $type){
    $errors=[];
    champ_obligatoire("question",$question,$errors,"ce champ est obligatoire");
    champ_obligatoire("nbre_point",$nbre_point,$errors,"ce champ est obligatoire");
    champ_obligatoire("type",$type,$errors,"ce champ est obligatoire");
    if (count($errors) == 0) {
         header("location:" . WEBROOT);
            exit(); 
    }else{
        $_SESSION["errors"]=$errors;
        header("location:" . WEBROOT . "?controllers=admin&action=creerQuestion");
        exit();
    }
    
   
   
}
