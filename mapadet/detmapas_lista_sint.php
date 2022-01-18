<?php 

require "detmapas_model.php";
         
               
               
if(mysqli_num_rows($result_detmapa) > 0 ) { ;?>

  


<div class="row">
  
<?php

do { 
$idvtr = $row_detmapa['idvtr']; 
$sql_vtr_detm = "SELECT * FROM vtr, detmapa WHERE idmapa = $idmapa AND vtrid = $idvtr";
              $result_vtr_detm = mysqli_query($conn, $sql_vtr_detm);
              $row_vtr_detm = mysqli_fetch_assoc($result_vtr_detm);

  ;?>  

<div class="col-2">    


      <div class="container1 shadow" >

            <a href="?page=mapadet&acao=view&view=analit&idmapa=<?php echo $idmapa;?>&idvtr=<?php echo $row_vtr_detm['vtrid'];?>">

            <img class="image" src="veiculos/vtrimg/<?php echo $row_vtr_detm["vtrimg"]; ?>">

            <div class="middle">
              <div class="vtrtitle" ><?php echo $row_vtr_detm["vtrtipo"]; ?></div>
            </div>

          </a>

        <a href="?page=mapadet&acao=insert&idmapa=<?php echo $idmapa;?>&idvtr=<?php echo $row_vtr_detm['vtrid'];?>" class="btn btn-primary">
          <i class='fas fa-plus'></i>
        </a>
  </div>
</div>
<?php } while ($row_detmapa = mysqli_fetch_assoc($result_detmapa))  ;?>
</div>

<?php } ;?>
