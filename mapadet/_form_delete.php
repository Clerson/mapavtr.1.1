<div class="modal fade" id="excluir<?php echo $row_detmapa["iddetmp"]; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-danger">
        <h4 class="modal-title">Excluir Registro #<?php echo $row_detmapa["iddetmp"]; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="row">
          <div class="col-sm">
            <div class="text-center"><h4><i class="fas fa-ambulance"></i> <?php echo $row_detmapa["vtrtipo"]; ?></h4></div>
            <img class="card-img-top" src="../veiculos/vtrimg/<?php echo $row_detmapa["vtrimg"]; ?>" alt="Card image">
          </div>

          <div class="col-sm">
            <h5>Tem certeza que deseja excluir esse registro?</h5>
            <a href="model.php?idmapa=<?php echo $row_detmapa["idmapa"];?>&idvtr=<?php echo $row_detmapa["idvtr"];?>&delete=<?php echo $row_detmapa["iddetmp"];?>" class="btn btn-danger"><i class="fas fa-trash"></i> Sim</a>
            <button type="button" class="btn btn-info" data-bs-dismiss="modal"><i class="fas fa-times"></i> Não</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>