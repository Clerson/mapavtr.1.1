<?php
$id = $vtrpref = $vtrtipo = $vtrmarcamodelo = $vtrano = $vtrstatus = "";

if (isset($_POST['vtr_insert'])) {

    $vtrpref = test_input($_POST["vtrpref"]);
    $vtrtipo = test_input($_POST["vtrtipo"]);
    $vtrmarcamodelo = test_input($_POST["vtrmarcamodelo"]);
    $vtrano = test_input($_POST["vtrano"]);
    $vtrstatus = test_input($_POST["vtrstatus"]);


$sql = "INSERT INTO vtr (vtrpref, vtrtipo, vtrmarcamod, vtrano, vtrstatus)
VALUES ('$vtrpref', '$vtrtipo', '$vtrmarcamodelo', '$vtrano', '$vtrstatus')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Novo registro inserido com sucesso');</script>";
      echo "<script>location.href='?page=vtr'</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<body>
<div class="container mt-3">
  <h2>Veículos | <a href="?page=vtr">Lista</a></h2>
  <p>Preencha o formulário para incluir Veículos</p>            
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  class="was-validated">

<div class="form-floating mb-3 mt-3">   
    <input type="text" class="form-control" name="vtrpref" value="<?php echo $vtrpref;?>" placeholder="Prefixo" required>
    <label for="vtrpref">Prefixo:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3">   
    <input type="text" class="form-control" name="vtrtipo" value="<?php echo $vtrtipo;?>" placeholder="Nomenclatura"  required>
    <label for="vtrtipo">Nomenclatura:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
    <input type="text" class="form-control" value="<?php echo $vtrmarcamodelo;?>" name="vtrmarcamodelo" placeholder="Fabricante/Modelo" required>
    <label for="vtrmarcamodelo">Fabricante/Modelo:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>


<div class="form-floating mb-3 mt-3"> 
      <input type="text" class="form-control" value="<?php echo $vtrano;?>" name="vtrano" placeholder="Ano de Fabricação"  required>
      <label for="vtrano">Ano de Fabricação:</label>
      <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-check form-switch mt-3">
      <input class="form-check-input" type="checkbox" id="mySwitch" name="vtrstatus" value="s" checked>
      <label class="form-check-label" for="mySwitch">Status</label>
</div>

  <button type="submit" class="btn btn-primary mt-3" name="vtr_insert" value="<?php echo $id;?>">Enviar</button>
</form>
</div>
</body>
</html>


