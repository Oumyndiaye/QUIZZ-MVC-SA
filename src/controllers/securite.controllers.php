<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
if($_SERVER['REQUEST_METHOD']=="POST" ){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == "connexion"){
            $login = $_REQUEST['login'];
            $password = $_REQUEST['password']; 
            connexion($login,$password);
            if(is_admin()){
                $role='ROLE_ADMIN';
                $datae=array(
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'login' => $_POST['login'],
                    'password' =>$_POST['password'],
                    'confirm_password' => $_POST['confirm_password'],  
                    'role' =>$role,
                );
             }
             else{
                $role='ROLE_JOUEUR';
                $datae=array(
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'login' => $_POST['login'],
                    'password' =>$_POST['password'],
                    'confirm_password' => $_POST['confirm_password'],  
                    'role' =>$role,
                    'score' =>  0,
                    'photo' => $_FILES['monfichier']['name']
                );
             } 
                    array_to_json('users',$datae);  
        } 
        elseif($_REQUEST['action']=="register"){
            $login = $_REQUEST['login'];
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $password = $_REQUEST['password']; 
            $confirm_password = $_REQUEST['confirm_password']; 
            $monfichier = $_FILES["monfichier"]["name"];
            $tmp = $_FILES["monfichier"]["tmp_name"];
            $lien=ROOT.'public'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.$monfichier; 
            connet($nom,$prenom,$login,$password,$confirm_password);     
            move_uploaded_file($tmp,$lien);
            header("location:".WEBROOT."?controllers=securite&action=connexion");
            if(is_admin()){
                $role='ROLE_ADMIN';
                $datae=array(
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'login' => $_POST['login'],
                    'password' =>$_POST['password'],
                    'confirm_password' => $_POST['confirm_password'],  
                    'role' =>$role,
                    'photo' => $_FILES['monfichier']['name']
                );
             }
             else{
                $role='ROLE_JOUEUR';
                $datae=array(
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'login' => $_POST['login'],
                    'password' =>$_POST['password'],
                    'confirm_password' => $_POST['confirm_password'],  
                    'role' =>$role,
                    'score' =>  0,
                    'photo' => $_FILES['monfichier']['name']
                );
             } 
                    array_to_json('users',$datae);  

        }         
    }
    else {
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    } 
}
/* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] =="connexion"){
         require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        }if($_REQUEST['action']=="register"){
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."register.html.php");
        } 
        if($_REQUEST['action']=="deconnexion"){
             logout();   
        } 
    }
    else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
    }
}
function logout(){
    session_destroy();
    session_unset();
    header("location:".WEBROOT);
    exit();
}  
//US1
function connexion(string $login,string $password):void {
    $errors=[];
    champ_obligatoire("login",$login,$errors);
    if(!isset($errors['login'])){
    valid_email("login",$login,$errors);
    }
    champ_obligatoire("password",$password,$errors);
    if(!isset($errors['password'])){
    valid_password("password",$password,$errors);
    }
    if(count($errors)==0){
    $userConnect=find_user_login_password($login,$password);
    if(count($userConnect)!=0){
    $_SESSION[USER_KEY]=$userConnect;
    header("location:".WEBROOT."?controllers=admin&action=page_acceuil_admin");
    exit();
    }else{
    $errors['connexion']="Login ou Mot de passe incorrect";
    $_SESSION['errors']=$errors;
    header("location:".WEBROOT);
    exit();
    }
    }else{
    $_SESSION['errors']=$errors;
    header("location:".WEBROOT);
    exit();
    }
}
 function connet(string $nom,string $prenom,string $login,string $password,string $confirm_password):void {
    $errors=[];
    champ_obligatoire("nom",$nom,$errors,"nom obligatoire");
    champ_obligatoire("prenom",$prenom,$errors,"prenom obligatoire");
    champ_obligatoire("login",$login,$errors,"login obligatoire");
    champ_obligatoire("password",$password,$errors,"password obligatoire");
    champ_obligatoire("confirm_password",$confirm_password,$errors,"confirmation obligatoire");

    if(count($errors)==0){
    valid_email("login",$login,$errors,"email incorrect");
    }
    if(count($errors)==0){
    valid_password("password",$password,$errors,"password incorrecte");
    }
    if(count($errors)==0){
    valid_password("confirm_password",$confirm_password,$errors,"validation incorrecte");
    }
    else{
    $_SESSION['errors']=$errors;
    header("location:".WEBROOT."?controllers=securite&action=register");
    exit();
    }
} 



