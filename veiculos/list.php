
<?php 


if (mysqli_num_rows($result_vtr) > 0) {
 
do { 

    $vtrid = $row_vtr["vtrid"];
    $vtrpref = $row_vtr["vtrpref"];
    $vtrtipo = $row_vtr["vtrtipo"];
    $vtrmarcamod = $row_vtr["vtrmarcamod"];
    $vtrano = $row_vtr["vtrano"];
    $vtrstatus = $row_vtr["vtrstatus"];
    $vtrimg = $row_vtr["vtrimg"];

  ?>

<?php if($vtrstatus == 'INATIVA') {
  echo "<div class='col-sm-2 shadow rounded-3 bg-secondary'>";
}
else echo "<div class='col-sm-2 shadow rounded-3'>" ;?>

      <div class="container1" >
      <a href="" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#abrir<?php echo $vtrid; ?>">
        <img class="image" src="vtrimg/<?php echo $vtrimg; ?>" alt="Card image">
        <div class="middle">
          <div class="vtrtitle"><?php echo $vtrtipo; ?><br></div>
        </div>
      </a>
    
    </div>
    
  </div>



 <?php

include '_form_update.php';

include '_form_delete.php'; 

} while ($row_vtr = mysqli_fetch_assoc($result_vtr))   ;}


?>



