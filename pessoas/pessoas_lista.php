<?php
$sql = "SELECT * FROM pessoas";
$result = mysqli_query($conn, $sql);
?>



<div class="container mt-3">
  <h2>Pessoas | <a href="?page=pessoas_insert">Adicionar</a></h2>
  <p>Llista de Pessoas</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Posto/Graduação</th>
        <th>RG</th>
        <th>Nome</th>
        <th>Status</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      <?php if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row["grad"];?></td>
        <td><?php echo $row["rg"];?></td>
        <td><?php echo $row["nome"];?></td>
        <td><div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="mySwitch" name="status" value="$row['status']" <?php if($row["status"]=='s') echo 'checked' ;?>>
            </div>
        </td>
        <td><a href="?page=pessoas_update&id=<?php echo $row["codmil"] ;?>">Editar</a></td>
      </tr>
  <?php }
} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>
     </tbody>
  </table>
</div>



