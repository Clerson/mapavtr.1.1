<?php

require_once "mapas_model.php"
 

?>
<div class="p-2 bg-warning d-flex m-0">

   <div class="col">
       <a href="?page=mapadet&acao=view&view=sint&idmapa=<?php echo $row['idmapa'];?>" class="btn btn-success">
            <i class='far fa-bookmark'></i> <?php echo $row["ala"];?>
      </a>
   </div>

      <div class="col">
      <div class="row">Data:</div>
      <b> <?php echo date('d/m/Y', strtotime($row['data']));?></b>
   </div>

   <div class="col">
      
      <div class="row">Oficial de Dia:</div>

         <?php
            $idofdia = $row["idofdia"];
            $sql_idofdia = "SELECT * FROM pessoas WHERE codmil = $idofdia";
            $result_idofdia = mysqli_query($conn, $sql_idofdia);
            $row_idofdia = mysqli_fetch_assoc($result_idofdia);
           echo "
              ".$row_idofdia["grad"]." <b> ".$row_idofdia["nomeguerra"]."</b>
           "
          ;?>
             
</div>

   <div class="col">
      <div class="row">Chefe de Socorro:</div>

         <?php
            $idchefe = $row["idchefe"];
            $sql1 = "SELECT * FROM pessoas WHERE codmil = $idchefe";
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
           echo "
              ".$row1["grad"]." <b>".$row1["nomeguerra"]."</b>
           "

          ;?>
             
   </div>

   <div class="col">
      <div class="row">Telefonista 1:</div> 
         <?php
            $idtelefonista = $row["idtelefonista1"];
            $sql2 = "SELECT * FROM pessoas WHERE codmil = $idtelefonista";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
           echo "
              ".$row2["grad"]." <b>".$row2["nomeguerra"]."</b>
           "
         ;?>
   </div>

   <div class="col">
      <div class="row">Telefonista 2:</div> 
         <?php
            $idtelefonista2 = $row["idtelefonista2"];
            $sql_tel2 = "SELECT * FROM pessoas WHERE codmil = $idtelefonista2";
            $result_tel2 = mysqli_query($conn, $sql_tel2);
            $row_tel2 = mysqli_fetch_assoc($result_tel2);
           echo "
              ".$row_tel2["grad"]." <b>".$row_tel2["nomeguerra"]."</b>
           "
           ;?>
              
   </div>



</div>



