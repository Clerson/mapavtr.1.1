<?php
$idmapa = $_GET['idmapa'];
$idvtr = $idpessoa = $odomsaida = $odomentr = $horasaida = $horentr = $destino = $obs ="";

if (isset($_POST['detmapas_envia'])) {

    $idmapa = $_POST['idmapa'];

     // VIATURA
    $vtrtipo = $_POST["vtr"];
    $sql_vtr = "SELECT vtrid, vtrtipo FROM vtr WHERE vtrtipo='$vtrtipo'"; 
    $result_vtr = mysqli_query($conn, $sql_vtr);
    $row_vtr = mysqli_fetch_assoc($result_vtr);
    $idvtr = $row_vtr["vtrid"];

    //MOTORISTA
    $idpessoa = $_POST["motorista"];
    $sql_motorista = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$idpessoa'";
    $result_motorista = mysqli_query($conn, $sql_motorista);
    $row_motorista = mysqli_fetch_assoc($result_motorista);
    $idpessoa = $row_motorista["codmil"];

    
    $odomsaida = $_POST["odomsaida"];
    $odomentr = $_POST["odomentr"];
    $horasaida = $_POST["horasaida"];
    $horaentr = $_POST["horaentr"];
    $destino = $_POST["destino"];
    $obs = $_POST["obs"];

        if(($_POST['detmapas_envia']) == "insert") {

        $sql_ins_detmapa = "INSERT INTO detmapa(idmapa, idvtr, idpessoa, odomsaida, odomentr, horasaida, horaentr, destino, obs)
        VALUES ($idmapa, $idvtr, $idpessoa, $odomsaida, $odomentr, '$horasaida', '$horaentr', '$destino', '$obs')";
        
        }

        if(($_POST['detmapas_envia']) == "update") {

        $sql_ins_detmapa = "UPDATE detmapa set (idmapa = $idmapa, idvtr = $idvtr, idpessoa = $idpessoa, odomsaida = $odomsaida, odomentr = $odomentr, horasaida = '$horasaida', horaentr = '$horaentr', destino = '$destino', obs = '$obs')";
  
        ;}

    if ($conn->query($sql_ins_detmapa) === TRUE) {
      echo "<script>location.href='?page=mapadet&idmapa=".$idmapa."'</script>";
    } else {
      echo "Error: " . $sql_ins_detmapa . "<br>" . $conn->error;
    }

;}


;?>
