<?php
    include "../conexao.php";

       
    $sql = "SELECT * FROM mapas ORDER BY idmapa DESC";
    
        if(!empty($_GET['idmapa'])) {

            $idmapa = $_GET['idmapa'];
            $sql = "SELECT * FROM mapas WHERE idmapa=$idmapa";
            
        }

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

// --------------------------------------------------------------------------------- 

if(!empty($_POST['acao'])) {

        $idmapa = $_POST['idmapa'];
        $ala = $_POST["ala"];
        $idofdia = $_POST["idofdia"];
        $idchefe = $_POST["idchefe"];
        $idtelefonista1 = $_POST["idtelefonista1"];
        $idtelefonista2 = $_POST["idtelefonista2"];
        $data = $_POST["data"]; 

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

          if ($conn->query($sql) === TRUE) {
                    echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";

                  // echo "<script>alert('Novo registro inserido com sucesso');</script>";
                  echo "<script>location.href='/mapadet/index.php?idmapa=".$mapa_ultimo_registro."'</script>";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }




    }

     if($acao == 'updatemapa') {

        $sql = "UPDATE mapas SET ala='$ala', idofdia=$idofdia, idchefe=$idchefe, idtelefonista1=$idtelefonista1,  idtelefonista2=$idtelefonista2, data='$date' WHERE idmapa=$idmapa";

          if ($conn->query($sql) === TRUE) {
                $mapa_ultimo_registro = $conn->insert_id;
                    echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";

                  // echo "<script>alert('Novo registro inserido com sucesso');</script>";
                  echo "<script>location.href='/mapadet/index.php?idmapa=".$idmapa."'</script>";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }



}
    
 ;?>