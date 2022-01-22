


<?php if ($result->num_rows > 0) {

echo "<div class='row'>";

  do { 
      $ala = $row["ala"];
      $idchefe = $row["idchefe"];
      $idofdia = $row["idofdia"];
      $idtelefonista = $row["idtelefonista1"];
      $idtelefonista2 = $row["idtelefonista2"];
    ?>
<a href="?page=mapadet&idmapa=<?php echo $row['idmapa'];?>" class="col-sm m-1 shadow btn btn-light"><i class='fas fa-bookmark'></i> <?php echo $ala;?> <br /><?php echo date('d/m/y', (strtotime($row["data"])));?></a>
<!-- <div class="card col-sm-2 m-2 shadow-sm rounded-3">
  <div class="card-header"><h6><i class='fas fa-bookmark'></i> </h6></div>
  <div class="card-body"><h6><i class='far fa-calendar-alt'></i> </h6></div>
  <div class="card-footer">
    <a href="?page=mapas&p=form&idmapa=<?php echo $row["idmapa"] ;?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a> 
    <a href="?page=mapadet&idmapa=<?php echo $row['idmapa'];?>" class="btn btn-primary"><i class="fas fa-folder-open"></i></a>
  </div>
</div> -->

      
  <?php } while($row = $result->fetch_assoc()) ;

  echo "</div>";

} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>

