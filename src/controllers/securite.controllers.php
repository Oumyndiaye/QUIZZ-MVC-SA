<?php
/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=="POST" ){
    if(isset($_REQUEST['action'])){
        require_once(ROOT."connexion.html.php");
    }
}
/* Traitement des Requetes GET
*/
 if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
        require_once(ROOT."connexion.html.php");
    }
} 

/*Recuperation de données methode POST*/
if($_SERVER['REQUEST_METHOD'] == " POST " ){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] === " connexion " ){
            $login = $_REQUEST['login'];
            $password = $_REQUEST['password'];

        }
    }
}
/*Recuperation de données methode GET*/
if($_SERVER['REQUEST_METHOD'] == " GET " ){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] ==="connexion"){
            $login = $_REQUEST['login'];
            $password = $_REQUEST['password'];
            connexion($login,$password);

        }
    }
}
//US1
function connexion(string $login,string $password):void {
    $errors=[];
    champ_obligatoire("login",$login,$errors);
    if(!isset($errors['login'])){
    valid_email("login",$login,$errors);
    }
    champ_obligatoire("password",$password,$errors);
    if(!isset($errors['login'])){
    valid_password("password",$password,$errors);
    }
    if(count($errors)==0){
    $userConnect=find_user_login_password($login,$password);
    if(count($userConnect)!=0){
    $_SESSION[USER_KEY]=$userConnect;
    header("location:".WEBROOT."?controller=user&action=accueil");
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
?>
