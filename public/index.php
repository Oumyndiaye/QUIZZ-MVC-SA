<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
require_once dirname(dirname(__FILE__))."/config/constantes.php";
require_once dirname(dirname(__FILE__))."/config/role.php";
require_once dirname(dirname(__FILE__))."/config/validator.php";
require_once dirname(dirname(__FILE__))."/config/upload.php";

require_once dirname(dirname(__FILE__))."/config/orm.php";
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
require_once dirname(dirname(__FILE__))."/config/router.php";
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");   

