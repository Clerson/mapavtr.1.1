<?php
require_once "pessoas/pessoas_model.php";
require_once "veiculos/veiculos_model.php";

$idmapa = $iddetmp = $idvtr = $idpessoa = ""; $odomentr = 0;
  if(isset($_GET['idmapa'])) {

     $idmapa = $_GET['idmapa'];

     $sql_detmapa = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr";  
    

      if(isset($_GET['idvtr'])) {

         $iddetmp = "";
         $idvtr = $_GET['idvtr'];
         $sql_detmapa = "SELECT * FROM detmapa, vtr, pessoas  WHERE idmapa = $idmapa AND idvtr = $idvtr AND idvtr = vtrid AND idpessoa = codmil ORDER BY iddetmp DESC";
      }
    
   if(isset($_GET['iddetmp'])) {

         $iddetmp = $_GET['iddetmp'];
         $sql_detmapa = "SELECT * FROM detmapa, vtr, pessoas WHERE iddetmp = $iddetmp AND idvtr = vtrid AND idpessoa = codmil";
      ;}
 
        if(isset($_GET['delete'])) {

        $iddetmp = $_GET['delete'];

         $sql_detmapa = "DELETE FROM detmapa WHERE iddetmp=$iddetmp";

         if ($conn->query($sql_detmapa) === TRUE) {
            echo "
            <script>location.href='?page=mapadet&idmapa=".$idmapa."'</script>";
          } else {
            echo "Error: " . $sql_detmapa . "<br>" . $conn->error;
          } exit();
         } // FIM DA if(($acao) == 'delete')
 
   ;} // FIM DA GET IDMAPA


   
      
      
      $result_detmapa = mysqli_query($conn, $sql_detmapa);  
      $row_detmapa = mysqli_fetch_assoc($result_detmapa);
      
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
    $status = $_POST["status"];
    $obs = $_POST["obs"];

        if($acao == "insert") {

        $sql_acao = "INSERT INTO detmapa(idmapa, idvtr, idpessoa, odomsaida, odomentr, horasaida, horaentr, destino, detmp_status, obs)
        VALUES ($idmapa, $idvtr, $idpessoa, $odomsaida, $odomentr, '$horasaida', '$horaentr', '$destino', '$status','$obs')";
        
        }

        if($acao == "update") {

        $sql_acao = "UPDATE detmapa SET idmapa = $idmapa, idvtr = $idvtr, idpessoa = $idpessoa, odomsaida = $odomsaida, odomentr = $odomentr, horasaida = '$horasaida', horaentr = '$horaentr', destino = '$destino',  detmp_status = '$status', obs = '$obs' WHERE iddetmp = $iddetmp";
        
        ;}
            
            echo " 
            <div class='conteiner-fluid text-center p-2'>
            <button class='btn btn-primary' disabled>
            <span class='spinner-border spinner-border-sm'></span>
            Carregando... 
            </button>
            </div>
            ";

    if ($conn->query($sql_acao) === TRUE) {
      echo "<script>location.href='?page=mapadet&idmapa=".$idmapa."'</script>";
    } else {
      echo "Error: " . $sql_acao . "<br>" . $conn->error;
    }

;}

;?>