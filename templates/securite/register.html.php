<?php
 if (isset($_SESSION['errors'])) {
     $errors = $_SESSION['errors'];
     unset($_SESSION['errors']);
 }
?>
<div class="grand_div">
    <div class="moyen_div">     
        <div class="control">
            <form method="POST"  action="" id="form_ins" enctype="multipart/form-data">
                <h3>S'INSCRIRE</h3>
                <p>Pour tester votre niveau de culture generale</p>
<!--                 <input type="hidden" name="MAX_FILE_SIZE" value="200000"/> -->
                <input type="hidden" name="controllers" value="securite">
                <input type="hidden" name="action" value="register">
                    <div class="form_control">
                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="prenom">
                        <small></small>
                    </div>
                    <?php if(isset($errors['nom'])):?>
                            <span style="color:red;
                            font-size:20px"><?=$errors['nom']?></span>
                            <?php endif ?>  
                    <div class="form_control">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom">
                        <small></small>
                    </div>
                    <?php if(isset($errors['prenom'])):?>
                            <span style="color:red;
                            font-size:20px"><?=$errors['prenom']?></span>
                            <?php endif ?>  
                    <div class="form_control">
                        <label for="login">Login</label>
                        <input type="text" id="login" name="login">
                        <small></small>
                    </div>
                    <?php if(isset($errors['login'])):?>
                        <span style="color:red;
                        font-size:20px"><?=$errors['login']?></span>
                        <?php endif ?>
                    <div class="form_control">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password">
                        <small></small>
                    </div>
                    <?php if(isset($errors['password'])):?>
                            <span style="color:red;
                            font-size:20px"><?=$errors['password']?></span>
                            <?php endif ?>  
                    <div class="form_control">
                        <label for="confirm_password">Confirmer password</label>
                        <input type="text" id="confirm_password" name="confirm_password">
                        <small></small>
                    </div>
                    <?php if(isset($errors['confirm_password'])):?>
                            <span style="color:red;
                            font-size:20px"><?=$errors['confirm_password']?></span>
                            <?php endif ?>  
                    <div id="av">
                    <label for="imgInp"><h4>Avatar du joueur</h4></label>  
                    </div>
                <button id="creer" type="submit" name="submit">Creer un compte</button>               
            </div>
        </div>
        <div class="cercle_div">
            <label for="imgInp"> <img id="img_default"  src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."chaton.jpg"?>"></label>      
            <?php if(isset($errors['monfichier'])):?>
                <span style="color:red;
                font-size:20px"><?=$errors['monfichier']?></span>
            <?php endif ?>
            <input type="file" value="Choisir un fichier" id="imgInp" name="monfichier">
            <label for="imgInp"><h2>Avatar du joueur</h2></label>  
        </div>
    </div>   
</form>
<script type="text/javascript" src="<?=WEBROOT."js/script.js"?>"></script>