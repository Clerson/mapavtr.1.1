 <?php
 require_once "../conexao.php";
        $idvtr = $_GET['idvtr'];
         $sql_km = "SELECT odomentr, iddetmp FROM detmapa WHERE idvtr=$idvtr ORDER BY iddetmp DESC LIMIT 1";
         $result_km = mysqli_query($conn, $sql_km);
         $row_km = mysqli_fetch_assoc($result_km);
         $odomentr = 0;
        if(mysqli_num_rows($result_km) > 0){$odomentr = $row_km['odomentr'];}

         echo "      
      <span class='input-group-text'><i class='fas fa-tachometer-alt'></i></span>
      <span class='input-group-text'>Saída:</span>
      <input type='number' class='form-control' name='odomsaida' value='".$odomentr."' >
      <span class='input-group-text'>Chegada:</span>
      <input type='number' class='form-control' id='odomentr' name='odomentr' min=".$odomentr." value='".$odomentr."' required>
      ";
?>