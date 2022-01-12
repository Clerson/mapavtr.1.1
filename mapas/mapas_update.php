<?php
if (isset($_GET['idmapa'])) {
    
    $id = $_GET['idmapa'];
    $sql = "SELECT * FROM mapas WHERE idmapa = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $ala = $row["ala"];
    $idofdia = $row["idofdia"];
    $idchefe = $row["idchefe"];
    $idtelefonista1 = $row["idtelefonista1"];
    $idtelefonista2 = $row["idtelefonista2"];
    $date = $row["data"];

}

if (isset($_POST['mapas_update'])) {
        $id = $_POST["mapas_update"];
        $ala = $_POST["ala"];
        $idofdia = $_POST["idofdia"];
        $idchefe = $_POST["idchefe"];
        $idtelefonista1 = $_POST["idtelefonista1"];
        $idtelefonista2 = $_POST["idtelefonista2"];
        $date = $_POST["date"];

    $sql = "UPDATE mapas SET ala='$ala', idofdia=$idofdia, idchefe=$idchefe, idtelefonista1=$idtelefonista1,  idtelefonista2=$idtelefonista2, data='$date' WHERE idmapa=$id";

    if ($conn->query($sql) === TRUE) {
              echo "<script>alert('Registro editado com sucesso');</script>";
              echo "<script>location.href='?page=mapas'</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

}   

?>


<div class="container mt-3">
  <h2>Mapas | <a href="?page=mapas">Lista</a></h2>
  <p>Preencha o formulário para incluir novo Mapa</p>            
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  class="was-validated">

<div class="form-floating mb-3 mt-3"> 
       <input class="form-control" list="ala" name="ala" placeholder="ala" value="<?php echo $ala;?>" required>
          <datalist id="ala">
            <option value="Alpha">
            <option value="Bravo">
            <option value="Charlie">
            <option value="Delta">
          </datalist>
    <label for="ala">Ala:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
       <input class="form-control" list="idchefe" value="<?php echo $idchefe;?>" name="idchefe" placeholder="idchefe" required>
          <datalist id="idchefe">
            <?php

                

            $sql1 = "SELECT * FROM pessoas WHERE status = 's'";
            $result1 = mysqli_query($conn, $sql1);


              while($row1 = mysqli_fetch_assoc($result1)) { ?>

            <option value="<?php echo $row1['codmil'];?>" >

                <?php echo $row1["nomeguerra"];?>

            <?php }  ;?>

          </datalist>
    <label for="ala">Chefe:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
       <input class="form-control" list="idofdia" value="<?php echo $idofdia;?>" name="idofdia" placeholder="idofdia" required>
          <datalist id="idofdia">
            <?php
            $sql_ofdia = "SELECT * FROM pessoas WHERE status = 's'";
            $result_ofdia = mysqli_query($conn, $sql_ofdia);

            if (mysqli_num_rows($result_ofdia) > 0) {

              while($row1 = mysqli_fetch_assoc($result_ofdia)) { ?>

            <option value="<?php echo $row_ofdia['codmil'];?>" >

                <?php echo $row_ofdia["nomeguerra"];?>

            <?php } } ;?>

          </datalist>
    <label for="idofdia">Oficial de Dia:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>


<div class="form-floating mb-3 mt-3"> 
       <input class="form-control" list="idtelefonista"  value="<?php echo $idtelefonista;?>" name="idtelefonista" placeholder="idtelefonista" required>
          <datalist id="idtelefonista">
            <?php
            $sql2 = "SELECT * FROM pessoas WHERE status = 's'";
            $result2 = mysqli_query($conn, $sql2);

            if (mysqli_num_rows($result2) > 0) {

              while($row2 = mysqli_fetch_assoc($result2)) { ?>

            <option value="<?php echo $row2['codmil'];?>" >

                <?php echo $row2["nomeguerra"];?>

            <?php } 

        ;} ;?>

          </datalist>
    <label for="telefonista">Telefonista:</label>
    <div class="invalid-feedback">Preecha este campo!</div>
</div>

<div class="form-floating mb-3 mt-3"> 
      <input type="date" class="form-control" value="<?php echo $date;?>" name="date" placeholder="Data"  required>
      <label for="date">Data:</label>
      <div class="invalid-feedback">Preecha este campo!</div>
</div>


  <button type="submit" class="btn btn-primary mt-3" name="mapas_update" value="<?php echo $id;?>">Enviar</button>
</form>
</div>



