  <table class="table table-striped">
    <thead>
      <tr>
        <th># Ala</th>
        <th>Oficial de Dia</th>
        <th>Chefe</th>
        <th>Telefonista 1</th>
        <th>Telefonista 2</th>
        <th>Data</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>

<?php if ($result_lim->num_rows > 0) {

  do { ?>

      <tr>
        <td># <?=$row['idmapa']." <br/><i class='fas fa-bookmark'></i> ".$row['ala'];?></td>
        <td>
          <?php // OFICIAL DE DIA
            $sql_idofdia = "SELECT * FROM pessoas WHERE codmil =".$row['idofdia'];
            $result_idofdia = mysqli_query($conn, $sql_idofdia);

            if (mysqli_num_rows($result_idofdia) > 0) {

              while($row_idofdia = mysqli_fetch_assoc($result_idofdia)) { ?>

                <?=$row_idofdia["grad"]."<br /><b>".$row_idofdia["nomeguerra"];?>

            <?php } } ;?>

        </td>
        <td>
        <?php
            $sql_chefesos = "SELECT * FROM pessoas WHERE codmil =".$row['idchefe'];
            $result_chefesos = mysqli_query($conn, $sql_chefesos);

            if (mysqli_num_rows($result_chefesos) > 0) {

              while($row_chefesos = mysqli_fetch_assoc($result_chefesos)) { ?>

                <?=$row_chefesos["grad"]."<br /><b>".$row_chefesos["nomeguerra"];?>

            <?php } } ;?>

        </td>
        <td>
          <?php
            $sql_telef = "SELECT * FROM pessoas WHERE codmil =".$row['idtelefonista1'];
            $result_telef = mysqli_query($conn, $sql_telef);

            if (mysqli_num_rows($result_telef) > 0) {

              while($row_telef = mysqli_fetch_assoc($result_telef)) { ?>

                <?=$row_telef["grad"]."<br /><b>".$row_telef["nomeguerra"];?>

              <?php } 
            } 
              
          ;?>

        </td>

        <td>
          <?php
            $sql_telef2 = "SELECT * FROM pessoas WHERE codmil = ".$row['idtelefonista2'];
            $result_telef2 = mysqli_query($conn, $sql_telef2);

            if (mysqli_num_rows($result_telef2) > 0) {

              while($row_telef2 = mysqli_fetch_assoc($result_telef2)) { ?>

                <?=$row_telef2["grad"]."<br /><b>".$row_telef2["nomeguerra"];?>

              <?php } 
            } 
              
          ;?>
        </td>

        <td><?=date('d/m/y', (strtotime($row["data"])));?></td>
        <td><a href="_form_update.php?idmapa=<?=$row['idmapa'] ;?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a> 
          <a href="/mapadet/?idmapa=<?=$row['idmapa'];?>" class="btn btn-primary"><i class="fas fa-folder-open"></i></a></td>
      </tr>


  <?php } while($row = mysqli_fetch_assoc($result_lim)) ;

} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>
   
   </tbody>

<ul class="pagination pagination-sm">

  <?php if ($p > 1) { ?>
  <li class="page-item"><a class="page-link" href="?p=<?=$p-1?>">Anterior</a></li>
  <?php } ?>


  <?php for ($i=1;$i<=$num_paginas;$i++) {
    $estilo = "" ;
    if ($p == $i) $estilo = "active" ?>  
  <li class="page-item <?=$estilo;?>"><a class="page-link" href="?p=<?=$i?>"><?=$i?></a></li>
  <?php } ?>

  <?php if ($p < $num_paginas) { ?>
  <li class="page-item"><a class="page-link" href="index.php?p=<?=$p+1?>">Próximo</a></li>
  <?php } ?>

</ul>

</table>