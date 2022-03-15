<?php
 if (isset($_SESSION['errors'])) {
     $errors = $_SESSION['errors'];
     unset($_SESSION['errors']);
 }
?>
<div id="div_form">
            <h1 id="h1">Parametrez votre Question</h1>
        <form action="<?php WEBROOT?>" method="POST" id="form2" name="formSeuil">    
                <input type="hidden" name="controllers" value="admin">
                <input type="hidden" name="action" value="creerQuestion">   
             
            <div id="ques" class="ques">
                <label for="Question">Questions:</label>
                <textarea id="question" name="question" value="question" cols="20" rows="5"></textarea>
                <?php if(isset($errors['question'])):?>
                            <span style="color:red;
                            font-size:20px"><?=$errors['question']?></span>
                            <?php endif ?>         
            </div>
            <span id="error"></span> 
              
            <div class="ques" id="point">
                <label for="nbre">Nbre de Points:</label>       
                <div id="num">
                    <input type="text" id="" name=""   value="-" onclick="decrement()" >
                    <input type="text" id="nb_p" name="nbre_point" value="1" onchange="check();" >
                    <input type="text" id="" name="" value="+"   onclick="increment()">
                </div>
               
             </div>
             <span id="er" ></span>
             <?php if(isset($errors['nbre_point'])):?>
                            <span style="color:red;
                            font-size:20px"><?=$errors['nbre_point']?></span>
                            <?php endif ?>
            <div class="ques">
            <label for="type">Type de réponse :</label>
            <select name="type" id="selec">
                <option  value="">Donner votre type de reponse</option>
                <option  id="radio" value="simple">Choix Unique</option>
                <option  value="multiple">Choix Multiple</option>
                <option  value="text">Text</option>
            </select>
            <img src="img/ic-ajout.png" id="ajout">
            
            </div>
            <span id='err'></span>
            <?php if(isset($errors['type'])):?>
                <span style="color:red;
                font-size:20px"><?=$errors['type']?></span>
            <?php endif ?>
            <div id="ajout_reponses">          
            </div>
            <input type="submit" id="enregistrer" name="submit" value="Enregistrer" >       
    </form>
</div>
<script type="text/javascript" src="js/script_cq.js"></script>

