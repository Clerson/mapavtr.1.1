


<?php if ($result->num_rows > 0) {

echo "<div class='row gx-2 gy-2'>";

  do { 
      $ala = $row["ala"];
      $idchefe = $row["idchefe"];
      $idofdia = $row["idofdia"];
      $idtelefonista = $row["idtelefonista1"];
      $idtelefonista2 = $row["idtelefonista2"];
    ?>

<div class="card col-sm-2 m-2 shadow-sm rounded-3">
  <div class="card-header"><h6><i class='fas fa-bookmark'></i> <?php echo $ala;?></h6></div>
  <div class="card-body"><h6><i class='far fa-calendar-alt'></i> <?php echo date('d/m/y', (strtotime($row["data"])));?></h6></div>
  <div class="card-footer">
    <a href="?page=mapas&p=form&idmapa=<?php echo $row["idmapa"] ;?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a> 
    <a href="?page=mapadet&idmapa=<?php echo $row['idmapa'];?>" class="btn btn-primary"><i class="fas fa-folder-open"></i></a></div>
</div>

      
  <?php } while($row = $result->fetch_assoc()) ;

  echo "</div>";

} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>

