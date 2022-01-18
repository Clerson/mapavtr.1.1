<?php


$idmapa = $_GET['idmapa'];

$iddetmp = $idvtr = $idpessoa = "";

$sql_detmapa = "SELECT * FROM detmapa, vtr WHERE idmapa = $idmapa AND idvtr = vtrid";


if(isset($_GET['acao'])) {

   $acao = $_GET['acao'];

      if($acao == 'view') {

         $view =  $_GET['view'];

         if(isset($view)) { 

               if($view == 'sint') {
                  
                    $sql_detmapa = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr";       
               
               } // FIM DA if(($_GET['view']) == 'sint')

            if($view == 'analit') {

               if(isset($_GET['idmapa'])) {

                   $sql_detmapa = "SELECT * FROM detmapa, vtr, pessoas WHERE idmapa=$idmapa AND idvtr=vtrid AND vtrid=idvtr AND idpessoa = codmil ORDER BY iddetmp DESC";

               }
           
               if(isset($_GET['idvtr'])) {

                  $idvtr =  $_GET['idvtr'];
                  
                  $sql_detmapa = "SELECT * FROM detmapa, vtr, pessoas WHERE idmapa=$idmapa AND idvtr=vtrid AND vtrid=$idvtr AND idpessoa = codmil ORDER BY iddetmp DESC";

               }

                

            } // FIM DA if(($_GET['view']) == 'analit')
         
         }// FIM DA IF GET VIEW)

      } // FIM DA if(($acao) == 'view')


      if(($acao) == 'update') {

         $iddetmp = $_GET['iddetmp'];
         $sql_detmapa = "SELECT * FROM detmapa, vtr, pessoas WHERE iddetmp = $iddetmp AND idvtr = vtrid AND idpessoa = codmil";

      } // FIM DA if(($acao) == 'update')


      if(($acao) == 'delete') {

         $iddetmp = $_GET['iddetmp'];
         $sql_detmapa = "DELETE FROM detmapa WHERE iddetmp=$iddetmp";

         if ($conn->query($sql_detmapa) === TRUE) {
            echo "<script>location.href='?page=mapadet&acao=view&view=analit&idmapa=".$idmapa."'</script>";
          } else {
            echo "Error: " . $sql_detmapa . "<br>" . $conn->error;
          } exit();

      } // FIM DA if(($acao) == 'delete')


      if(($acao) == 'insert') {

           $iddetmp =  $horasaida = $horentr = $destino = $obs = "";

      if (isset($_GET['idmapa'])) {
         $idmapa = $_GET['idmapa'];
         $odomentr = 0 ;
         }

      if (isset($_GET['idvtr'])) {

         
         $iddetmp = "";
         $idvtr = $_GET['idvtr'];
         $sql_km = "SELECT odomentr, iddetmp FROM detmapa WHERE idvtr=$idvtr ORDER BY iddetmp DESC LIMIT 1";
         $result_km = mysqli_query($conn, $sql_km);
         $row_km = mysqli_fetch_assoc($result_km);
         $odomentr = $row_km['odomentr'];

  
         $sql_detmapa = "SELECT * FROM detmapa, vtr WHERE idmapa = $idmapa AND idvtr = $idvtr AND idvtr = vtrid";

            
      ;}
      
   } // FIM DA GET FILTER
      
      
      $result_detmapa = mysqli_query($conn, $sql_detmapa);  
      $row_detmapa = mysqli_fetch_assoc($result_detmapa);
      
} // FIM DA if(isset($acao))


if (isset($_POST['acao'])) {

    $acao = $_POST['acao'];
    $iddetmp = $_POST['iddetmp'];
    $idmapa = $_POST['idmapa'];

    //MOTORISTA
    $idvtr = $_POST["idvtr"];
    $idpessoa = $_POST["pessoa"];
    $odomsaida = $_POST["odomsaida"];
    $odomentr = $_POST["odomentr"];
    $horasaida = $_POST["horasaida"];
    $horaentr = $_POST["horaentr"];
    $destino = $_POST["destino"];
    $obs = $_POST["obs"];

        if(($_POST['acao']) == "insert") {

        $sql_acao = "INSERT INTO detmapa(idmapa, idvtr, idpessoa, odomsaida, odomentr, horasaida, horaentr, destino, obs)
        VALUES ($idmapa, $idvtr, $idpessoa, $odomsaida, $odomentr, '$horasaida', '$horaentr', '$destino', '$obs')";
        
        }

        if(($_POST['acao']) == "update") {

        $sql_acao = "UPDATE detmapa SET idmapa = $idmapa, idvtr = $idvtr, idpessoa = $idpessoa, odomsaida = $odomsaida, odomentr = $odomentr, horasaida = '$horasaida', horaentr = '$horaentr', destino = '$destino', obs = '$obs' WHERE iddetmp = $iddetmp";
  
        ;}

    if ($conn->query($sql_acao) === TRUE) {
      echo "<script>location.href='?page=mapadet&acao=view&view=analit&idmapa=".$idmapa."'</script>";
    } else {
      echo "Error: " . $sql_acao . "<br>" . $conn->error;
    }

;}

;?>