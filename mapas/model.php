<?php
    include "../conexao.php";

    $idmapa = $ala = $idofdia = $idchefe = $idtelefonista1 = $idtelefonista2 = $date = "";
       
    $sql = "SELECT * FROM mapas ORDER BY idmapa DESC";
    
        if(isset($_GET['idmapa'])) {

            $idmapa = $_GET['idmapa'];
            $sql = "SELECT * FROM mapas WHERE idmapa=$idmapa";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $ala = $row["ala"];
            $idofdia = $row["idofdia"];
            $idchefe = $row["idchefe"];
            $idtelefonista1 = $row["idtelefonista1"];
            $idtelefonista2 = $row["idtelefonista2"];
            $date = $row["data"];

        // OFICIAL DE DIA

            $sql_ofdia = "SELECT codmil, nomeguerra FROM pessoas WHERE codmil = $idofdia";
            $result_ofdia = mysqli_query($conn, $sql_ofdia);
            $row_ofdia = mysqli_fetch_assoc($result_ofdia);
            $idofdia = $row_ofdia["nomeguerra"];

        // CHEFESOS

            $sql_chefesos = "SELECT codmil, nomeguerra FROM pessoas WHERE codmil = $idchefe";
            $result_chefesos = mysqli_query($conn, $sql_chefesos);
            $row_chefesos = mysqli_fetch_assoc($result_chefesos);
            $idchefe = $row_chefesos["nomeguerra"];

        // TELEFONISTA 1

            $sql_tel1 = "SELECT codmil, nomeguerra FROM pessoas WHERE codmil = $idtelefonista1";
            $result_tel1 = mysqli_query($conn, $sql_tel1);
            $row_tel1 = mysqli_fetch_assoc($result_tel1);
            $idtelefonista1 = $row_tel1["nomeguerra"];


        // TELEFONISTA 2

            $sql_tel2 = "SELECT codmil, nomeguerra FROM pessoas WHERE codmil = $idtelefonista2";
            $result_tel2 = mysqli_query($conn, $sql_tel2);
            $row_tel2 = mysqli_fetch_assoc($result_tel2);
            $idtelefonista2 = $row_tel2["nomeguerra"];  

        }

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

// --------------------------------------------------------------------------------- 

if(isset($_POST['acao'])) {

        $acao = $_POST['acao'];
        $ala = $_POST["ala"];
        $idofdia = $_POST["idofdia"];
        $idchefe = $_POST["idchefe"];
        $idtelefonista1 = $_POST["idtelefonista1"];
        $idtelefonista2 = $_POST["idtelefonista2"];
        $date = $_POST["date"]; 

        // OFICIAL DE DIA

            $sql_ofdia = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$idofdia'";
            $result_ofdia = mysqli_query($conn, $sql_ofdia);
            $row_ofdia = mysqli_fetch_assoc($result_ofdia);
            $idofdia = $row_ofdia["codmil"];

        // CHEFESOS

            $sql_chefesos = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$idchefe'";
            $result_chefesos = mysqli_query($conn, $sql_chefesos);
            $row_chefesos = mysqli_fetch_assoc($result_chefesos);
            $idchefe = $row_chefesos["codmil"];

        // TELEFONISTA 1

            $sql_tel1 = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$idtelefonista1'";
            $result_tel1 = mysqli_query($conn, $sql_tel1);
            $row_tel1 = mysqli_fetch_assoc($result_tel1);
            $idtelefonista1 = $row_tel1["codmil"];


        // TELEFONISTA 2

            $sql_tel2 = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$idtelefonista2'";
            $result_tel2 = mysqli_query($conn, $sql_tel2);
            $row_tel2 = mysqli_fetch_assoc($result_tel2);
            $idtelefonista2 = $row_tel2["codmil"];

    if($acao == 'insertmapa') {
        
        $sql = "INSERT INTO mapas(ala, idofdia, idchefe, idtelefonista1, idtelefonista2, data)
        VALUES ('$ala', $idofdia, $idchefe, $idtelefonista1, $idtelefonista2, '$date')";
    }

     if($acao == 'updatemapa') {

        $sql = "UPDATE mapas SET ala='$ala', idofdia=$idofdia, idchefe=$idchefe, idtelefonista1=$idtelefonista1,  idtelefonista2=$idtelefonista2, data='$date' WHERE idmapa=$idmapa";

    }

    echo " 
            <div class='conteiner-fluid text-center p-2'>
            <button class='btn btn-primary' disabled>
            <span class='spinner-border spinner-border-sm'></span>
            Carregando... 
            </button>
            </div>
            ";

  if ($conn->query($sql) === TRUE) {
        $mapa_ultimo_registro = $conn->insert_id;
        
          // echo "<script>alert('Novo registro inserido com sucesso');</script>";
          echo "<script>location.href='?page=mapadet&idmapa=".$mapa_ultimo_registro."'</script>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

}
    
 ;?>