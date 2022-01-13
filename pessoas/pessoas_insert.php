<?php
$id = $grad = $rg = $nomeguerra = $nome = $contato = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $grad = test_input($_POST["grad"]);
    $rg = test_input($_POST["rg"]);
    $nomeguerra = test_input($_POST["nomeguerra"]);
    $nome = test_input($_POST["nome"]);
    $contato = test_input($_POST["contato"]);
    $status = test_input($_POST["status"]);

$sql = "INSERT INTO pessoas (grad, rg, nomeguerra, nome, contato, status)
VALUES ('$grad', '$rg', '$nomeguerra', '$nome', '$contato', '$status')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Novo registro inserido com sucesso');</script>";
      echo "<script>location.href='?page=pessoas'</script>";
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
  <h2>Pessoas | <a href="pessoas_lista.php">Lista</a></h2>
  <p>Preencha o formulário para incluir Pessoas</p>            
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  class="was-validated">

  <div class="form-floating mb-3 mt-3"> 
       <input class="form-control" list="grad" name="grad" placeholder="grad" value="<?php echo $grad;?>" required>
          <datalist id="grad">
            <option value="Cel QOC">
            <option value="TC QOC">
            <option value="Maj QOC">
            <option value="Cap QOC">
            <option value="Cap QOA">            
            <option value="1º Ten QOC">
            <option value="1º Ten QOA">            
            <option value="2º Ten QOC">
            <option value="2º Ten QOA">
            <option value="Asp Of">
            <option value="ST QPC">
            <option value="1º Sgt QPC">
            <option value="2º Sgt QPC">
            <option value="3º Sgt QPC">
            <option value="Cb QPC">
            <option value="Sd QPC">
            <option value="Sd 2º Classe">
          </datalist>
    <label for="grad">Posto/Grad:</label>
    <div class="valid-feedback">Válido</div>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3">   
    <input type="text" class="form-control" name="rg" value="<?php echo $rg;?>" placeholder="numero do RG"   required>
    <label for="rg">RG:</label>
    <div class="valid-feedback">Válido</div>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
    <input type="text" class="form-control" value="<?php echo $nomeguerra;?>" name="nomeguerra" placeholder="Nome de guerra" required>
    <label for="nomeguerra">Nome de Guerra:</label>
    <div class="valid-feedback">Válido</div>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>


<div class="form-floating mb-3 mt-3"> 
      <input type="text" class="form-control" value="<?php echo $nome;?>" name="nome" placeholder="Nome completo"  required>
      <label for="nome">Nome Completo:</label>
      <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
      <input type="text" class="form-control" value="<?php echo $contato;?>" name="contato" placeholder="Contato"  required>
      <label for="contato">Contato:</label>
      <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Preecha este campo!</div>

<div class="form-check form-switch mt-3">
      <input class="form-check-input" type="checkbox" id="mySwitch" name="status" value="s" checked>
      <label class="form-check-label" for="mySwitch">Status</label>
</div>

  <button type="submit" class="btn btn-primary mt-3" name="insert" value="<?php echo $id;?>">Enviar</button>
</form>
</div>
</body>
</html>


