<div class="modal fade" id="insertpessoa">
  <div class="modal-dialog" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-user-plus"></i>Incluindo Pessoas</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">

          <form action="?page=pessoas_model" method="POST">
              <div class="form-floating mb-3 mt-3"> 
                   <input class="form-control" list="grad" name="grad" placeholder="grad" required>
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
                <div class="valid-feedback">Válido</div>
            </div>

            <div class="form-floating mb-3 mt-3">   
                <input type="text" class="form-control" name="rg" placeholder="numero do RG"   required>
                <label for="rg">RG:</label>
                <div class="valid-feedback">Válido</div>
            </div>

            <div class="form-floating mb-3 mt-3"> 
                <input type="text" class="form-control" name="nomeguerra" placeholder="Nome de guerra" required>
                <label for="nomeguerra">Nome de Guerra:</label>
                <div class="valid-feedback">Válido</div>
            </div>


            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" name="nome" placeholder="Nome completo"  required>
                  <label for="nome">Nome Completo:</label>
                  <div class="valid-feedback">Válido</div>
            </div>

            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" name="contato" placeholder="Contato"  required>
                  <label for="contato">Contato:</label>
                  <div class="valid-feedback">Válido</div>
            </div>

            <div class="form-floating mb-3 mt-3">
               
                <select class="form-select"  name="pstatus" placeholder="Status" required>
                  <option value="s">Ativa</option>
                  <option value="n">Inativa</option>
                </select>
                <label for="pstatus">Status:</label>
            </div>

              <button type="submit" class="btn btn-primary mt-3" name="acao" value="pessoasinsert">Enviar</button>
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