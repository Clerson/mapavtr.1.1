<?php

$codmil = $grad = $rg = $nomeguerra = $nome = $contato = $status = "";

$sql_pessoas = "SELECT * FROM pessoas ORDER BY nomeguerra ASC";

	if (isset($_GET['codmil'])) {
	    
	    $codmil = $_GET['codmil'];
	    $sql_pessoas = "SELECT * FROM pessoas WHERE codmil = $codmil";   
  }

$result_vtr = mysqli_query($conn, $sql_vtr);
$row_vtr = mysqli_fetch_assoc($result_vtr);


 	if(isset($_GET['delete'])) {

    $vtrid = $_GET['delete'];

     $sql_vtr = "DELETE FROM vtr WHERE vtrid=$vtrid";

            echo " 
            <div class='conteiner-fluid text-center p-2'>
            <button class='btn btn-primary' disabled>
            <span class='spinner-border spinner-border-sm'></span>
            Carregando... 
            </button>
            </div>
            ";

     if ($conn->query($sql_vtr) === TRUE) {
        echo "
        <script>location.href='?page=vtr'</script>";
      } else {
        echo "Error: " . $sql_vtr . "<br>" . $conn->error;
      } exit();
    
    } // FIM DA if(($acao) == 'delete')


if (isset($_POST['acao'])) {

	 $acao = $_POST['acao'];
    $vtrpref = $_POST["vtrpref"];
    $vtrtipo = $_POST["vtrtipo"];
    $vtrmarcamod = $_POST["vtrmarcamod"];
    $vtrano = $_POST["vtrano"];
    $vtrstatus = $_POST["vtrstatus"];

 if($acao == 'vtrupdate') {    

  $vtrid = $_POST["vtrid"];
  $sql = "UPDATE vtr SET vtrpref='$vtrpref', vtrtipo='$vtrtipo', vtrmarcamod='$vtrmarcamod', vtrano='$vtrano', vtrstatus='$vtrstatus' WHERE vtrid=$vtrid";
}

if($acao == 'vtrinsert') {

	$sql = "INSERT INTO vtr (vtrpref, vtrtipo, vtrmarcamod, vtrano, vtrstatus)
	VALUES ('$vtrpref', '$vtrtipo', '$vtrmarcamod', '$vtrano', '$vtrstatus')";

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
      echo "<script>location.href='?page=vtr'</script>";              
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

} 