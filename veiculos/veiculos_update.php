<?php

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM vtr where vtrid = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $vtrpref = $row["vtrpref"];
    $vtrtipo = $row["vtrtipo"];
    $vtrmarcamod = $row["vtrmarcamod"];
    $vtrano = $row["vtrano"];
    $vtrstatus = $row["vtrstatus"];

}

if (isset($_POST['enviar'])) {
        $id = $_POST["enviar"];
        $vtrpref = $_POST["vtrpref"];
        $vtrtipo = $_POST["vtrtipo"];
        $vtrmarcamod = $_POST["vtrmarcamod"];
        $vtrano = $_POST["vtrano"];
        $vtrstatus = $_POST["vtrstatus"];

    $sql = "UPDATE pessoas SET vtrpref='$vtrpref', vtrtipo='$vtrtipo', vtrmarcamod='$vtrmarcamod', vtrano='$vtrano', vtrstatus='$vtrstatus' WHERE codmil=$id";

    if ($conn->query($sql) === TRUE) {
              echo "<script>alert('Registro editado com sucesso');</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

}   


?>

<body>
<div class="container mt-3">
  <h2>Veículos | <a href="?page=vtr">Lista</a></h2>
  <p>Formulário para edição de dados</p>            
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  class="was-validated">

<div class="form-floating mb-3 mt-3">   
    <input type="text" class="form-control" name="vtrpref" value="<?php echo $vtrpref;?>" placeholder="Prefixo" required>
    <label for="vtrpref">Prefixo:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3">   
    <input type="text" class="form-control" name="vtrtipo" value="<?php echo $vtrtipo;?>" placeholder="numero do vtrtipo"   required>
    <label for="vtrtipo">vtrtipo:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
    <input type="text" class="form-control" value="<?php echo $vtrmarcamod;?>" name="vtrmarcamod" placeholder="vtrano de guerra" required>
    <label for="vtrmarcamod">vtrano de Guerra:</label>
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
  <button type="submit" class="btn btn-primary mt-3" name="enviar" value="<?php echo $id;?>">Enviar</button>
</form>
</div>
</body>
</html>


