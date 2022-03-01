<?php
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/* Chemin sur data qui contient le fichier Json db.json*/
define("PATH_DB",ROOT."data/db.json");
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("PATH_POST","http://localhost:8001");
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
?>
