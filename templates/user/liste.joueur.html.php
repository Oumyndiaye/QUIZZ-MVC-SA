
 <p style="font-size:2em; text-align:center"><b>LISTE JOUEUR PAR SCORE</b></p>
<div class="table" style="margin: 2em 5em;height:50vh;font-size:2em;display:flex;justify-content:space-between">

  <table border="3px solid">
      <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Score</th>
      </tr>
      <?php foreach($data as $value):?>
      <tr>
          <td><?=$value['nom']?></td>
          <td><?=$value['prenom']?></td>
          <td><?=$value['score']?></td> 
      </tr>
      <?php endforeach?>
  </table>
</div>

