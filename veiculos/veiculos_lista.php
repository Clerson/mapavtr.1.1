<?php

require_once "veiculos_model.php";

?>
<div class="row">

<?php if (mysqli_num_rows($result_vtr) > 0) {
  // output data of each row
 
do { ?>

  <div class="col-2">


          <div class="container1 shadow m-0">
            <a href="" class="text-decoration-none"  data-bs-toggle="modal" data-bs-target="#<?php echo $row_vtr["vtrtipo"]; ?>">

            <img class="image" src="veiculos/vtrimg/<?php echo $row_vtr["vtrimg"]; ?>" alt="Card image">
            <div class="middle">
              <div class="vtrtitle"><?php echo $row_vtr["vtrtipo"]; ?><br></div>
            </div>

          </a>

        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#excluir<?php echo $row_vtr["vtrtipo"]; ?>">
          <i class='fas fa-trash'></i>
        </button>
  </div>

  </div>
  




  <!-- The Modal -->
<div class="modal fade" id="<?php echo $row_vtr["vtrtipo"]; ?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-truck"></i> <?php echo $row_vtr["vtrtipo"]; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
        <div class="col-5"><img class="card-img-top" src="veiculos/vtrimg/<?php echo $row_vtr["vtrimg"]; ?>" alt="Card image"></div>
        <div class="col">

<form action='?page=detmapas_model&acao=update&idmapa=<?php echo $idmapa;?>&iddetmp=<?php echo $row_vtr['iddetmp'];?>' method='POST' class='row gx-3 gy-2 align-items-center'>

        <div class="input-group">
           <span class="input-group-text">Prefixo</span>
          <input type="text" class="form-control" name="vtrpref" value="<?php echo $row_vtr['vtrpref']; ?>">
        </div>

        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-tachometer-alt"></i></span>
          <span class="input-group-text">Marca/Modelo</span>
          <input type="text" class="form-control"  name="vtrmarcamod"   value="<?php echo $row_vtr["vtrmarcamod"];?>" placeholder="Marca/Modelo" >
          <span class="input-group-text">Ano de fabricação</span>
          <input type="number" class="form-control"  name="vtrano"  value="<?php echo $row_vtr["vtrano"];?>" placeholder="Ano de fabricação">
        </div>
</div>
        <input type="text" name="vtrid" value="<?php echo $row_vtr['vtrid'];?>" hidden>

  <button type="submit" class="btn btn-primary " name="acao" value="update">Enviar</button>
</form>
</div>
</div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
</div>

<div class="modal fade" id="excluir<?php echo $row_vtr["vtrtipo"]; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Excluir <?php echo $row_vtr["vtrtipo"]; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <p>Tem certeza que deseja excluir esse registro?</p>
         <a href="?page=veiculos_model&acao=delete&vtrid=<?php echo $row_vtr['iddetmp'];?>" class="btn btn-warning">Sim</a> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
 <?php } while ($row_vtr = mysqli_fetch_assoc($result_vtr)) ;} ;?>
</div>
