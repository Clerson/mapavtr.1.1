<?php
    include "../conexao.php";

    $sql = "SELECT * FROM mapas ORDER BY idmapa DESC "; 

    $itens_por_pagina = 15;

    $p = (isset($_GET['p']))?$_GET['p']:1;

    $inicio = ($itens_por_pagina*$p)-$itens_por_pagina;

    $sql_lim = $sql."LIMIT $inicio, $itens_por_pagina"; 
    
        if(!empty($_GET['idmapa'])) {

            $idmapa = $_GET['idmapa'];
            $sql = "SELECT * FROM mapas WHERE idmapa=$idmapa";
            
        }

       if(!empty($_POST['fdata'])) {

            $fdata = $_POST['fdata'];
            $fdata2 = date('Y-m-d H:i:s', strtotime($fdata));
            $sql_lim = "SELECT * FROM mapas WHERE data LIKE '%$fdata2'";

        }

    $result = mysqli_query($conn, $sql);
    $result_lim = mysqli_query($conn, $sql_lim);
    $row = mysqli_fetch_assoc($result_lim);
    


    $num_total =  mysqli_num_rows($result);

    $num_paginas = ceil($num_total/$itens_por_pagina);

    // $idmapa = $row['idmapa'];
    // $ala = $row["ala"];
    // $idchefe = $row["idchefe"];
    // $idofdia = $row["idofdia"];
    // $idtelefonista = $row["idtelefonista1"];
    // $idtelefonista2 = $row["idtelefonista2"];
    // $data = $row['data']; 

// --------------------------------------------------------------------------------- 

if(!empty($_POST['acao'])) {

        $acao = $_POST['acao'];
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
        VALUES ('$ala', $idofdia, $idchefe, $idtelefonista1, $idtelefonista2, '$data')";

          if ($conn->query($sql) === TRUE) {
            $mapa_ultimo_registro = $conn->insert_id;
                    


                  // echo "<script>alert('Novo registro inserido com sucesso');</script>";
                  echo "<script>location.href='/mapadet/index.php?idmapa=".$mapa_ultimo_registro."'</script>";
                  echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                exit;




    }

     if($acao == 'updatemapa') {
        $idmapa = $_POST['idmapa'];
        $sql = "UPDATE mapas SET ala='$ala', idofdia=$idofdia, idchefe=$idchefe, idtelefonista1=$idtelefonista1,  idtelefonista2=$idtelefonista2, data='$date' WHERE idmapa=$idmapa";
                    echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";
          if ($conn->query($sql) === TRUE) {
                


                  // echo "<script>alert('Novo registro inserido com sucesso');</script>";
                  echo "<script>location.href='/mapadet/index.php?idmapa=".$idmapa."'</script>";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }



}
    
 ;?>