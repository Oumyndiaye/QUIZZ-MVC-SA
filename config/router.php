<?php
if(isset($_REQUEST['controllers'])){
    switch($_REQUEST['controllers']){
        case "securite" :
            require_once(PATH_SRC."controllers/securite.controllers.php");
        break;
        case "user" :
            require_once(PATH_SRC."controllers/user.controllers.php");
        break;
        case "admin" :
            require_once(PATH_SRC."controllers/admin.controllers.php");
        break;
        default :
            require_once(PATH_SRC."controllers/error.controllers.php"); 
    }
}
else{
    require_once(PATH_SRC."controllers/securite.controllers.php");
}
?>
