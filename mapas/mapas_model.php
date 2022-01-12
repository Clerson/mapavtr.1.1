<?php

    // $_SESSION['idmapa'] = $_GET['idmapa'];  
$sql_mapa = "SELECT * FROM mapas ORDER BY idmapa DESC";

   if(isset($_GET['acao'])) {

      $sql_mapa = "SELECT * FROM mapas ORDER BY idmapa DESC";

// --------------------------------------------------------------------------------- 
         
         
         if(($_GET['acao']) == 'view') {

            $sql_mapa = "SELECT * FROM mapas ORDER BY idmapa DESC";

            if(isset($_GET['view'])) {

               if(($_GET['view']) == 'sint') {

                $sql_mapa = "SELECT * FROM mapas WHERE idmapa=$idmapa";
                 
                }
                
             ;}
         ;}

// --------------------------------------------------------------------------------- 

         if(($_GET['acao']) == 'update') { 

            $sql_mapa = "SELECT * FROM mapas WHERE idmapa=$idmapa";

         } 

// --------------------------------------------------------------------------------- 

         if(($_GET['acao']) == 'delete') { 

            $sql_mapa = "SELECT * FROM mapas WHERE idmapa=$idmapa";

         } 

// --------------------------------------------------------------------------------- 
if(isset($_POST['acao'])) {

         if(($_POST['acao']) == 'insert') {

          $ala = $_POST["ala"]; // ALA

            // OFICIAL DE DIA

                $ofdia = $_POST["ofdia"];
                $sql_ofdia = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$ofdia'";
                $result_ofdia = mysqli_query($conn, $sql_ofdia);
                $row_ofdia = mysqli_fetch_assoc($result_ofdia);
                $ofdia = $row_ofdia["codmil"];

            // CHEFESOS

                $chefe = $_POST["chefe"];
                $sql_chefesos = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$chefe'";
                $result_chefesos = mysqli_query($conn, $sql_chefesos);
                $row_chefesos = mysqli_fetch_assoc($result_chefesos);
                $chefe = $row_chefesos["codmil"];

            // TELEFONISTA 1
                $tel1 = $_POST["tel1"];
                $sql_tel1 = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$tel1'";
                $result_tel1 = mysqli_query($conn, $sql_tel1);
                $row_tel1 = mysqli_fetch_assoc($result_tel1);
                $tel1 = $row_tel1["codmil"];


            // TELEFONISTA 2
                $tel2 = $_POST["tel2"];
                $sql_tel2 = "SELECT codmil, nomeguerra FROM pessoas WHERE nomeguerra = '$tel2'";
                $result_tel2 = mysqli_query($conn, $sql_tel2);
                $row_tel2 = mysqli_fetch_assoc($result_tel2);
                $tel2 = $row_tel2["codmil"];

            $date = $_POST["date"];

        $sql = "INSERT INTO mapas(ala, idofdia, idchefe, idtelefonista1, idtelefonista2, data)
        VALUES ('$ala', $ofdia, $chefe, $tel1, $tel2, '$date')";
            
            if ($conn->query($sql) === TRUE) {
            $mapa_ultimo_registro = $conn->insert_id;
            
              // echo "<script>alert('Novo registro inserido com sucesso');</script>";
              echo "<script>location.href='?page=mapas&acao=view&view=sint&idmapa=".$mapa_ultimo_registro."'</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }


         }
}

// --------------------------------------------------------------------------------- 

            
// --------------------------------------------------------------------------------- 


    
   ;} // FIM DA if(isset($_GET['acao']))

            $result = mysqli_query($conn, $sql_mapa);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['idmapa'] = $row['idmapa'];
 ;?>