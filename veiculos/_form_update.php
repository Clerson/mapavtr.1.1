<div class="modal fade" id="abrir<?=$vtrid; ?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">#<?=$vtrid; ?> <i class="fas fa-truck"></i> <?=$vtrtipo; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5"><img class="card-img-top" src="vtrimg/<?=$vtrimg; ?>" alt="Card image"></div>
          <div class="col-sm">

            <form action='?page=vtr_model' method='POST' class='row gx-3 gy-2 align-items-center'>
              
              <div class="input-group">
                <span class="input-group-text">Nomenclatura</span>
                <input type="text" class="form-control" name="vtrtipo" value="<?=$vtrtipo; ?>" placeholder="Nomenclatura" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Prefixo</span>
                <input type="text" class="form-control" name="vtrpref" value="<?=$vtrpref; ?>" placeholder="Prefixo" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Marca/Modelo</span>
                <input type="text" class="form-control"  name="vtrmarcamod"   value="<?=$vtrmarcamod;?>" placeholder="Marca/Modelo" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Ano de fabricação</span>
                <input type="number" class="form-control"  name="vtrano"  value="<?=$vtrano;?>" placeholder="Ano de fabricação">
              </div>
                            <div class="input-group">
                <span class="input-group-text">Status</span>
                <select class="form-select"  name="vtrstatus"  value="<?=$vtrstatus;?>" placeholder="Status">
                  <option value="ATIVA" <?php if($vtrstatus == 'ATIVA') echo 'selected';?>>Ativa</option>
                  <option value="INATIVA" <?php if($vtrstatus == 'INATIVA') echo 'selected';?>>Inativa</option>
                </select>
              </div>
              <input type="text" name="vtrid" value="<?=$vtrid;?>" hidden>

              <button type="submit" class="btn btn-primary " name="acao" value="vtrupdate">Enviar</button>
            </form>

        </div>

      </div>

    </div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#excluir<?=$vtrtipo; ?>">
          <i class='fas fa-trash'></i>
        </button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>