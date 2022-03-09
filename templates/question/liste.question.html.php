
<p style="font-size:2em; text-align:center"><b>LISTE Questions</b></p>
<div class="table" style="margin: 2em 5em;height:50vh;font-size:2em;display:flex;justify-content:space-between">

  <table>
      <tr>
          <th>Questions</th>
          <th></th>
          
      </tr>
      <?php foreach($data as $value):?>
      <tr>
          <td><?=$value['question']?></td>
          
      </tr>
      <?php endforeach?>
  </table>
</div>

