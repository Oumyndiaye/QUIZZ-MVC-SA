<?php
if(isset($_SESSION['errors'])){
$errors=$_SESSION['errors'];
unset($_SESSION['errors']);
}
?>
       <div class="container">
            <div class="jeu">
                <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>"/>
                <h1>Le plaisir de jouer</h1>
            </div>
            <form action="<?=WEBROOT?>" method="post">
                <div class="title"> 
                    <h1>Login Form</h1>
                    <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR.""?>"/>
                </div>
                <div class="login_pass">
                    <div class="login">
                        <input type="text" name="login" id="login" placeholder="Login">
                        <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-login.png"?>"/>
                    </div>
                        <input type="hidden" name="controllers" value="securite">
                        <input type="hidden" name="action" value="connexion">
                    <div class="password">
                        <input type="text" name="password" id="password" placeholder="Password">
                        <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-password.png"?>"/>                        
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="Connexion">
                    <p><a href="">S'inscrire pour jouer ?</a></p>
                </div>
            </form>
        </div>
         
 
    






