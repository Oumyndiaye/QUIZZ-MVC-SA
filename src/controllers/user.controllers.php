<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
if($_SERVER['REQUEST_METHOD'] =="GET"){
    if(isset($_REQUEST['action'])){
        if(!is_connect()){
            header("location:".WEBROOT);
           exit();  
        }  
        else{
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuilUser.html.php"); 
        }
    }
}  

        
 




