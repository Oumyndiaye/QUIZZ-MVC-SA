
    <div id="tt">
    <p style="font-size:2em; margin-top:4%; text-align:center"><b>LISTE JOUEUR PAR SCORE</b></p>
        <div class="tble">
        
            <div id="tr">
                <p>Nom</p>
                <p>Prenom</p>
                <p>Score</p>
            </div>
        <table  id="table"> 
            <?php foreach($data as $value):?>
            <tr>
                <td><?=$value['nom']?></td>
                <td><?=$value['prenom']?></td>
                <td><?=$value['score']?></td> 
            </tr>
            <?php endforeach?>
        </table>
        
        </div>
            <div id="boutton"> 
                <input type="submit" id="precedent" class="btn" value="precedent">     
                <input type="submit" id="suivant" class="btn"value="suivant" >
            </div>
            
            <script type="text/javascript" src="js/script_lj.js"></script>
    </div>