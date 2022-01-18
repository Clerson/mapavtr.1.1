  
<?php 

if(mysqli_num_rows($result_detmapa) > 0 )

 do { 
$idvtr = $row_detmapa['idvtr']; 
$sql_vtr_m = "SELECT * FROM vtr WHERE vtrid = $idvtr AND vtrstatus='ativa' ORDER BY vtrtipo ASC";
$result_vtr_m = mysqli_query($conn, $sql_vtr_m);
$row_vtr_m = mysqli_fetch_assoc($result_vtr_m);
;?>  

<div class="col-sm-2 m-1 shadow rounded-3">    


<div class="container1" >

      <a href="?page=mapadet&idmapa=<?php echo $idmapa;?>&idvtr=<?php echo $row_vtr_m['vtrid'];?>">

      <img class="image" src="veiculos/vtrimg/<?php echo $row_vtr_m['vtrimg']; ?>">

      <div class="middle">
        <div class="vtrtitle" ><?php echo $row_vtr_m['vtrtipo']; ?></div>
      </div>

      </a>
  </div>
</div>

 
<?php } while ($row_detmapa = mysqli_fetch_assoc($result_detmapa)) ;?>

