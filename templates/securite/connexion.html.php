<?php
if(isset($_SESSION['errors'])){
    $errors=$_SESSION['errors'];
    session_destroy();
    unset($_SESSION['errors']);
}
?>
       <div class="container">
            <form action="<?=WEBROOT?>" method="post" >
                <input type="hidden" name="controllers" value="securite">
                <input type="hidden" name="action" value="connexion">
                <div class="title"> 
                    <h1>Login Form</h1>
                     <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR.""?>"/>
                </div>
                <div class="login_pass">
                    <div class="login">
                        <input type="text" name="login" id="login" placeholder="Login " style="font-size: 1.5em;">
                        <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-login.png"?>"/>
                        
                    </div>
                    <?php if(isset($errors['login'])):?>
                        <span style="color:red;margin-left:-200px;
                        font-size:50px"><?=$errors['login']?></span>
                        <?php endif ?>
                        
                        
                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password" style="font-size: 1.5em;">
                        <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-password.png"?>"/>                       
                    </div>
                            <?php if(isset($errors['password'])):?>
                            <span style="color:red;margin-left:-200px;
                            font-size:50px"><?=$errors['password']?></span>
                            <?php endif ?>  
                </div>
                            <?php if(isset($errors['connexion'])):?>
                            <span style="color:red;
                            font-size:50px"><?=$errors['connexion']?></span>
                            <?php endif ?>
                <div class="submit" style="font-size: 1em">
                    <input type="submit" id="" value="Connexion" style="font-size: 1em">
                   <p><a href="<?=WEBROOT?>?controllers=securite&action=register" style="text-decoration: none;color:gray;font-size: 3em">S'inscrire pour jouer ?</a></p>
                </div>
            </form>
        </div>
         
 
    






