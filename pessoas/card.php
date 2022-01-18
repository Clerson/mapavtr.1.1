


<?php if (mysqli_num_rows($result_pessoas) > 0) {

echo "<div class='row gx-2'>";

  do { 
   $codmil = $row_pessoas["codmil"];
   $grad = $row_pessoas["grad"];
   $rg = $row_pessoas["rg"];
   $nomeguerra = $row_pessoas["nomeguerra"];
   $nome = $row_pessoas["nome"];
   $contato = $row_pessoas["contato"];
   $img = $row_pessoas["img"];
   $pstatus = $row_pessoas["pstatus"];
   $login = $row_pessoas["login"];
   $senha = $row_pessoas["senha"];
    ?>

<div class="card col-sm-2 shadow-sm rounded-3 p-0">
  <img class="card-img-top" src="pessoas/pessoas_img/<?php echo $img.".jpg";?>" alt="Card image" width="200" height="200">
  <div class="card-body"><?php echo $grad."<b> ".$nomeguerra;?></b></div>
  <div class="card-footer">
    <a href="?page=mapas&p=form&idmapa=<?php echo $row_pessoas["idmapa"] ;?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a> 
    <a href="?page=mapadet&idmapa=<?php echo $row_pessoas['idmapa'];?>" class="btn btn-primary"><i class="fas fa-folder-open"></i></a></div>
</div>

      
  <?php } while($row_pessoas = $result_pessoas->fetch_assoc()) ;

  echo "</div>";

} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>

