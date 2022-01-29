<?php   
include 'model.php';

      do { 

    
    ?>

    <div class='container1 col-sm-2 m-0 shadow-sm rounded-3'>
      <a href='#' data-bs-toggle="modal" data-bs-target="#updatepessoa<?=$row_pessoas['codmil']?>">
        <img class="image"  src="pessoas_img/<?php echo $row_pessoas["img"];?>" alt="Card image" width="200" height="200">
        <div class="middle">
          <div class="vtrtitle"><?php echo $row_pessoas["grad"]."<b> ".$row_pessoas["nomeguerra"]." <br/>".$row_pessoas["rg"];?></b></div>
        </div>
      </a>  
    </div>



<?php 

include '_form_update.php';

include '_form_delete.php';

} while($row_pessoas = mysqli_fetch_assoc($result_pessoas))  ;?>
