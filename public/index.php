<?php
//inclusion des constantes
require_once dirname(dirname(__FILE__))."/config/constantes.php";
//Chargement du router
require_once dirname(dirname(__FILE__))."/config/router.php";
//Chargement de l'ORM
require_once dirname(dirname(__FILE__))."/config/orm.php";
//Demarrage de la sesion
if(session_status()==PHP_SESSION_NONE){
session_start();
}
//
?>
