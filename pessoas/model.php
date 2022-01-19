<?php
   
   $sql_pessoas = "SELECT * FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";
        
            
   if (isset($_GET['codmil'])) {    
      $codmil = $_GET['codmil'];
      $sql_pessoas = "SELECT * FROM pessoas WHERE codmil = $codmil";
   }

   if (isset($_GET['iddetmp'])) {
      $iddetmp = $_GET['iddetmp'];
      $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas, detmapa WHERE iddetmp=$iddetmp AND idpessoa = codmil";
   } 


if(isset($_GET['delete'])) {

    $codmil = $_GET['delete'];

     $sql_delete = "DELETE FROM pessoas WHERE codmil=$codmil";

            echo " 
            <div class='conteiner-fluid text-center p-2'>
            <button class='btn btn-primary' disabled>
            <span class='spinner-border spinner-border-sm'></span>
            Carregando... 
            </button>
            </div>
            ";

     if ($conn->query($sql_delete) === TRUE) {
        echo "
        <script>location.href='?page=pessoas'</script>";
      } else {
        echo "Error: " . $sql_delete . "<br>" . $conn->error;
      } exit();
    
    } // FIM DA if(($acao) == 'delete')

      $result_pessoas = mysqli_query($conn, $sql_pessoas);
      $row_pessoas = mysqli_fetch_assoc($result_pessoas);


if (isset($_POST['acao'])) {

    $grad = $_POST["grad"];
    $rg = $_POST["rg"];
    $nomeguerra = $_POST["nomeguerra"];
    $nome = $_POST["nome"];
    $contato = $_POST["contato"];
    $pstatus = $_POST["pstatus"];

    if ($_POST['acao'] == "pessoasinsert") {


      $sql = "INSERT INTO pessoas (grad, rg, nomeguerra, nome, contato, pstatus)
      VALUES ('$grad', '$rg', '$nomeguerra', '$nome', '$contato', '$pstatus')";

   }

    if ($_POST['acao'] == "pessoasupdate") {

    $codmil = $_POST['codmil'];

    $sql = "UPDATE pessoas SET grad='$grad', rg='$rg', nomeguerra='$nomeguerra', nome='$nome', contato='$contato', pstatus='$pstatus' WHERE codmil=$codmil";

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
      echo "<script>location.href='?page=pessoas'</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}



;?>