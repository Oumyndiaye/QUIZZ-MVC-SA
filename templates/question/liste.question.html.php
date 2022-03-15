
<p style="font-size:2em; text-align:center"><b>LISTE Questions</b></p>
<label>Nbre questions par jeu</label>
<div class="table" style="margin: 2em 5em;height:50vh;font-size:2em;display:flex;justify-content:space-between">
          
          <ol>
            <?php foreach($data as $value):?>
                <li> <label><?=$value['question']?></label></li>
                <?php if($value["type_reponse"] =="simple"){?>
            
                <?php foreach($value["reponses"] as $key){?>
                <div id="div"> 
                    <input type="radio" id="rad" value="<?=$key?>" name="rad">
                    <label for="rad"><?=$key?></label>
                </div>
                <?php }?>
                <?php }elseif($value["type_reponse"]=="multiple"){?>
                        <?php foreach($value["reponses"] as $key){?>
                    <div>
                        <input id="check" name="" value="<?=$key?>" type="checkbox">
                        <label for="check"><?=$key?></label>
                    </div>
                <?php } ?>
                <?php }elseif($value["type_reponse"]=="text"){?>
                    <input name="" type="texte">
                <?php }?>
            <?php endforeach?>
          </ol>
</div>


