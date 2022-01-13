<?php

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM pessoas where codmil = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $grad = $row["grad"];
    $rg = $row["rg"];
    $nomeguerra = $row["nomeguerra"];
    $nome = $row["nome"];
    $contato = $row["contato"];
    $status = $row["status"];

}

if (isset($_POST['enviar'])) {
        $id = $_POST["enviar"];
        $grad = $_POST["grad"];
        $rg = $_POST["rg"];
        $nomeguerra = $_POST["nomeguerra"];
        $nome = $_POST["nome"];
        $contato = $_POST["contato"];
        $status = $_POST["status"];

    $sql = "UPDATE pessoas SET grad='$grad', rg='$rg', nomeguerra='$nomeguerra', nome='$nome', contato='$contato', status='$status' WHERE codmil=$id";

    if ($conn->query($sql) === TRUE) {
              echo "<script>alert('Registro editado com sucesso');</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

}   


?>

<div class="container mt-3">
  <h2>Pessoas | <a href="?page=pessoas">Lista</a></h2>
  <p>Formulário para edição de dados</p>            
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  class="was-validated">

  <div class="form-floating mb-3 mt-3"> 
       <input class="form-control" list="grad"  name="grad" value="<?php echo $grad;?>" required>
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
    <div class="invalid-feedback">Preecha este campo!</div>
</div>


<div class="form-floating mb-3 mt-3">   
    <input type="text" class="form-control" name="rg" value="<?php echo $rg;?>" placeholder="numero do RG"   required>
    <label for="rg">RG:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
    <input type="text" class="form-control" value="<?php echo $nomeguerra;?>" name="nomeguerra" placeholder="Nome de guerra" required>
    <label for="nomeguerra">Nome de Guerra:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>


<div class="form-floating mb-3 mt-3"> 
      <input type="text" class="form-control" value="<?php echo $nome;?>" name="nome" placeholder="Nome completo"  required>
      <label for="nome">Nome Completo:</label>
          <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
      <input type="text" class="form-control" value="<?php echo $contato;?>" name="contato" placeholder="Contato"  required>
      <label for="contato">Contato:</label>
          <div class="invalid-feedback">Preecha este campo!</div>

<div class="form-check form-switch mt-3">
      <input class="form-check-input" type="checkbox" id="mySwitch" name="status" value="s" <?php if($status=='s') echo 'checked' ;?>>
      <label class="form-check-label" for="mySwitch">Status</label>
</div>

  <button type="submit" class="btn btn-primary mt-3" name="enviar" value="<?php echo $id;?>">Enviar</button>
</form>
</div>


