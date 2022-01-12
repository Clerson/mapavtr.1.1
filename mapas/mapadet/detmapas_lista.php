<table class="table table-striped">
    <thead>
      <tr>
        <th>Veículo</th>
        <th>Condutor</th>
        <th>KM Saída</th>
        <th>KM Chegada</th>
        <th>Hora Saída</th>
        <th>Hora Chegada</th>
        <th>Destino</th>
        <th>Detalhes</th>
        <th>Opções</th>        
      </tr>
    </thead>
    <tbody>
      
<?php if (mysqli_num_rows($result3) > 0) {
  // output data of each row
  while($row3 = mysqli_fetch_assoc($result3)) { ?>      
      <tr>
        <td>

         <?php
            $idvtr = $row3["idvtr"];
            $sql1 = "SELECT * FROM vtr WHERE vtrid = $idvtr";
            $result1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($result1) > 0) {

              while($row1 = mysqli_fetch_assoc($result1)) { ?>

                <?php echo $row1["vtrtipo"];?>

            <?php } } ;?>

        </td>
        <td>
         <?php
            $idpessoa = $row3["idpessoa"];
            $sql2 = "SELECT * FROM pessoas WHERE codmil = $idpessoa";
            $result2 = mysqli_query($conn, $sql2);

            if (mysqli_num_rows($result2) > 0) {

              while($row2 = mysqli_fetch_assoc($result2)) { ?>

                <?php echo $row2["nomeguerra"];?>

            <?php } } ;?>
        </td>

        <td><?php echo $row3["odomsaida"];?></td>

        <td><?php echo $row3["odomentr"];?></td>
        
        <td><?php echo $row3["horasaida"];?></td>

        <td><?php echo $row3["horaentr"];?></td>

        <td><?php echo $row3["destino"];?></td>

        <td><?php echo $row3["obs"];?></td>

        <td><a href="?page=mapadet_lista&acao=update&id=<?php echo $row3["iddetmp"] ;?>">Editar</a> </td>
      </tr>
  <?php }
  } else {
    echo "Sem registro nesta tabela";
  } $conn->close();?>
     </tbody>
  </table>


