

<style type="text/css">
   .row, .col {padding: 0; margin: 0;}
</style>

<div class="row">

<?php if (mysqli_num_rows($result_vtr) > 0) {
 
while ($row_vtr = mysqli_fetch_assoc($result_vtr))  { 

    $vtrid = $row_vtr["vtrid"];
    $vtrpref = $row_vtr["vtrpref"];
    $vtrtipo = $row_vtr["vtrtipo"];
    $vtrmarcamod = $row_vtr["vtrmarcamod"];
    $vtrano = $row_vtr["vtrano"];
    $vtrstatus = $row_vtr["vtrstatus"];
    $vtrimg = $row_vtr["vtrimg"];

  ?>

<?php if($vtrstatus == 'INATIVA') {
  echo "<div class='col-sm-2 m-1 shadow rounded-3 bg-secondary'>";
}
else echo "<div class='col-sm-2 m-1 shadow rounded-3'>" ;?>

      <div class="container1" >
      <a href="" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#abrir<?php echo $vtrid; ?>">
        <img class="image" src="veiculos/vtrimg/<?php echo $vtrimg; ?>" alt="Card image">
        <div class="middle">
          <div class="vtrtitle"><?php echo $vtrtipo; ?><br></div>
        </div>
      </a>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#excluir<?php echo $vtrtipo; ?>">
      <i class='fas fa-trash'></i>
     </button>
    </div>
  </div>

<!-------------------- The Modal -->
<div class="modal fade" id="abrir<?php echo $vtrid; ?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">#<?php echo $vtrid; ?> <i class="fas fa-truck"></i> <?php echo $vtrtipo; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5"><img class="card-img-top" src="veiculos/vtrimg/<?php echo $vtrimg; ?>" alt="Card image"></div>
          <div class="col-sm">

            <form action='?page=vtr_model' method='POST' class='row gx-3 gy-2 align-items-center'>
              
              <div class="input-group">
                <span class="input-group-text">Nomenclatura</span>
                <input type="text" class="form-control" name="vtrtipo" value="<?php echo $vtrtipo; ?>">
              </div>
              <div class="input-group">
                <span class="input-group-text">Prefixo</span>
                <input type="text" class="form-control" name="vtrpref" value="<?php echo $vtrpref; ?>">
              </div>
              <div class="input-group">
                <span class="input-group-text">Marca/Modelo</span>
                <input type="text" class="form-control"  name="vtrmarcamod"   value="<?php echo $vtrmarcamod;?>" placeholder="Marca/Modelo" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Ano de fabricação</span>
                <input type="number" class="form-control"  name="vtrano"  value="<?php echo $vtrano;?>" placeholder="Ano de fabricação">
              </div>
                            <div class="input-group">
                <span class="input-group-text">Status</span>
                <select class="form-select"  name="vtrstatus"  value="<?php echo $vtrstatus;?>" placeholder="Status">
                  <option value="ATIVA" <?php if($vtrstatus == 'ATIVA') echo 'selected';?>>Ativa</option>
                  <option value="INATIVA" <?php if($vtrstatus == 'INATIVA') echo 'selected';?>>Inativa</option>
                </select>
              </div>
              <input type="text" name="vtrid" value="<?php echo $vtrid;?>" hidden>

              <button type="submit" class="btn btn-primary " name="acao" value="vtrupdate">Enviar</button>
            </form>

        </div>

      </div>

    </div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="excluir<?php echo $vtrtipo; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Excluir <?php echo $vtrtipo; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <p>Tem certeza que deseja excluir esse registro?</p>
         <a href="?page=vtr_model&acao=delete&delete=<?php echo $vtrid;?>" class="btn btn-warning">Sim</a> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
 <?php } ;} 

 ;?>
</div>
