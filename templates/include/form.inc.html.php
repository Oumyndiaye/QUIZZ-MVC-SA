<div class="grand_div">
    <div class="moyen_div">     
        <div class="control">
            <form method="POST"  action="" id="form_ins" onSubmit='return valider()'>
                <h3>S'INSCRIRE</h3>
                <p>Pour tester votre niveau de culture generale</p>
                <input type="hidden" name="controllers" value="securite">
                <input type="hidden" name="action" value="register">
                
                    <div class="form_control">
                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="prenom">
                        <small></small>
                    </div>
                    <div class="form_control">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom">
                        <small></small>
                    </div>
                    <div class="form_control">
                        <label for="login">Login</label>
                        <input type="text" id="login" name="login">
                        <small></small>
                    </div>
                    <div class="form_control">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password">
                        <small></small>
                    </div>
                    <div class="form_control">
                        <label for="confirm_password">Confirmer password</label>
                        <input type="text" id="confirm_password" name="confirm_password">
                        <small></small>
                    </div>
                    <div id="av">
                        <h3>Avatar</h3>
                        <input type="file" value="Choisir un fichier">
                </div>
                <button id="creer" type="submit" name="submit">Creer un compte</button>

            </form>

        </div>
    </div>
    <div class="cercle_div">
        <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."WhatsApp Image 2022-03-03 at 12.59.22.jpeg"?>">
        <h2>Avatar du joueur</h2>
    </div>
</div>






<!-- .containar>form.form.#form>h2{JOIND ODC}+(div.form-control>label+input+small{error})*4+button{submit}^^script:src -->



