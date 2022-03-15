<?php
define("USER_KEY","user_connect");
define("ROLE_JOUEUR","ROLE_JOUEUR");
define("ROLE_ADMIN","ROLE_ADMIN");
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
define("PATH_DB",ROOT."data/db.json");
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
define("KEY_ERRORS","errors");

?>