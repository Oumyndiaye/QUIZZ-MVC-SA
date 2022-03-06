<form action="<?php WEBROOT ?>" method="POST">
<h2>questions:</h2>
    <input type="hidden" name="controllers" value="admin">
    <input type="hidden" name="action" value="creerQuestion">
        <label for="">Saisissez votre question</label>
        <input type="text" name="question" id="question">
        <label for="">ReponseFalse1</label>
        <input type="text" name="ReponseFalse1" id="ReponseFalse1">
        <label for="">ReponseFalse2</label>
        <input type="text" name="ReponseFalse2" id="ReponseFalse2">
        <label for="">ReponseFalse3</label>
        <input type="text" name="ReponseFalse3" id="ReponseFalse3">
        <label for="">ReponseFalse4</label>
        <input type="text" name="ReponseFalse4" id="ReponseFalse4">
        <label for="">ReponseTrue</label>
        <input type="text" name="ReponseTrue" id="ReponseTrue">
        <input type="submit" name="submit" id="Soumettre">

</form>