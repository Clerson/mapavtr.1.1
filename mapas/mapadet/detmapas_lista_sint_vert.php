<?php

               $sql_vtr_detmapa = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr";
               $result_vtr_detmapa = mysqli_query($conn, $sql_vtr_detmapa);
               $row_vtr_detmapa = mysqli_fetch_assoc($result_vtr_detmapa);
               

             
               
               
if(mysqli_num_rows($result_vtr_detmapa) > 0 ) { ;?>

  




<?php

do { 

  $idvtr = $row_vtr_detmapa['idvtr']; 
$sql_vtr_detm = "SELECT * FROM vtr, detmapa WHERE idmapa = $idmapa AND vtrid = $idvtr";
              $result_vtr_detm = mysqli_query($conn, $sql_vtr_detm);
              $row_vtr_detm = mysqli_fetch_assoc($result_vtr_detm);



 ;?>  




      <div class="container1 shadow">
            <a href="?page=mapadet&acao=view&view=analit&idmapa=<?php echo $idmapa;?>&vtrid=<?php echo $row_vtr_detm['vtrid'];?>">

            <img class="image" src="veiculos/vtrimg/<?php echo $row_vtr_detm["vtrimg"]; ?>">

            <div class="middle">
              <div class="vtrtitle" ><?php echo $row_vtr_detm["vtrtipo"]; ?></div>
            </div>

          </a>

        <a href="?page=mapadet&acao=insert&idmapa=<?php echo $_SESSION['idmapa'];?>&filter=vtrid&idvtr=<?php echo $row_vtr_detm['vtrid'];?>" class="btn btn-primary">
          <i class='fas fa-plus'></i>
        </a>
  </div>

<?php } while ($row_vtr_detmapa = mysqli_fetch_assoc($result_vtr_detmapa))  ;?>

<?php } else echo "<p>Adicione uma viatura</p>" ;?>
