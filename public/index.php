<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}


//inclusion des constantes
require_once dirname(dirname(__FILE__))."/config/constantes.php";
require_once dirname(dirname(__FILE__))."/config/validator.php";

//Chargement de l'ORM
require_once dirname(dirname(__FILE__))."/config/orm.php";
//Demarrage de la sesion
//

require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");

//Chargement du router
require_once dirname(dirname(__FILE__))."/config/router.php";

require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
    
?>
