<?php
require_once "veiculos_model.php";
             
               
if(mysqli_num_rows($result_vtr) > 0 ) { ;?>

  


<div class="row">
  
<?php

do { 

  $vtrid = $row_vtr['vtrid']; 




 ;?>  

<div class="col-2">    


      <div class="container1 shadow" >

            <a href="?page=insert&acao=filter&filter=vtrid&vtrid=<?php echo $row_vtr['vtrid'];?>">

            <img class="image" src="veiculos/vtrimg/<?php echo $row_vtr["vtrimg"]; ?>">

            <div class="middle">
              <div class="vtrtitle" ><?php echo $row_vtr["vtrtipo"]; ?></div>
            </div>

          </a>

        <a href="?page=mapadet&acao=insert&idmapa=<?php echo $idmapa;?>&filter=idvtr&idvtr=<?php echo $row_vtr['vtrid'];?>" class="btn btn-primary">
          <i class='fas fa-plus'></i>
        </a>
  </div>
</div>
<?php } while ($row_vtr = mysqli_fetch_assoc($result_vtr))  ;?>
</div>

<?php } else echo "<p>Adicione uma viatura</p>" ;?>
