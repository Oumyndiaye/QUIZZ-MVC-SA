
<ul>
  <li><a href="<?=WEBROOT."?controllers=user&action=acceuil"?>">Acceuil</a></li>
  <?php if(is_admin()):?>
    <li><a href="<?=WEBROOT."?controllers=user&action=liste.joueur"?>">Liste des joueurs</a></li>
    <li><a href="<?=WEBROOT."?controllers=user&action=creerAdmin.html.php"?>">Créer Admin</a></li>
    <?php endif ?>
  <li><a href="<?=WEBROOT."?controllers=securite&action=deconnexion"?>">Deconnexion</a></li>
  
</ul> 
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>

