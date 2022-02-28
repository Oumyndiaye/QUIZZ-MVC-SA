<?php
/**
* Traitement des Requetes POST
*/
if($_SERVER['REQUEST_METHOD']=="POST"){
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
?>
