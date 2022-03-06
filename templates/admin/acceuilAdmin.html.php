<?php require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
<div class="grande">
    <div class="title">
        <h1>CREER ET PARAMETREZ VOS QUIZZ</h1>
        <a href="<?=WEBROOT."?controllers=securite&action=deconnexion"?>">Deconnexion</a>
    </div>
    <div class="milieu">
        <div class="gauche">
            <div class="avatar">
                <div class="cercle">

                </div>
            </div>
            <div class="list">
                <div class="question">
                    <p><a href="<?=WEBROOT."?controllers=admin&action=listerQuestion"?>">Liste Questions</a></p>
                    <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-liste.png"?>"/>

                </div>
                <div class="admin">
                    <p><a href="<?=WEBROOT."?controllers=admin&action=formAdmin"?>">Créer Admin</a></p>
                    <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>"/>

                </div>
                <div class="joueur">
                    <p><a href="<?=WEBROOT."?controllers=admin&action=listeJoueur"?>">Liste joueurs</a></p>
                    <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-liste.png"?>"/>

                </div>
                <div class="quest">
                <p><a href="<?=WEBROOT."?controllers=admin&action=creerQuestion"?>">Créer Questions</a></p>
                <img src="<?=WEBROOT."img".DIRECTORY_SEPARATOR."ic-ajout.png"?>"/>
                </div>
            </div>
        </div>   
       <div class="droite">
          <?php
          
           echo $content_views;
/*             require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."form.inc.html.php");
 */
          
           ?>
           <input type=submit value=suivant>
       </div> 
    </div>

</div>

