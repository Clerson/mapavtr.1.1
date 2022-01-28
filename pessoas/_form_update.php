<div class="modal fade" id="updatepessoa<?php echo $row_pessoas['codmil'];?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-user"></i> Alterando Dados de <?php echo $row_pessoas['nomeguerra'];?><h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            <img class="image"  src="pessoas_img/<?php echo $row_pessoas["img"].".jpg";?>" alt="Card image">
            <form action="upload_pessoa_img.php" method="POST" enctype="multipart/form-data" class="form-control">
              <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
              <input type="text" name="codmil" value="<?=$row_pessoas['codmil']?>" hidden>
              <input type="submit" class="btn btn-primary" value="Upload Image" name="submit">
            </form>
                        
          </div>

          <div class="col-sm">

            <form action="model.php" method="POST">


              <div class="form-floating mb-3 mt-3"> 
                   <input class="form-control" list="grad" name="grad" placeholder="grad" value="<?php echo $row_pessoas['grad'];?>" required>
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
              </div>

            <div class="form-floating mb-3 mt-3">   
                <input type="text" class="form-control" name="rg" value="<?php echo $row_pessoas['rg'];?>" placeholder="numero do RG"   required>
                <label for="rg">RG:</label>
              </div>

            <div class="form-floating mb-3 mt-3"> 
                <input type="text" class="form-control" value="<?php echo $row_pessoas['nomeguerra'];?>" name="nomeguerra" placeholder="Nome de guerra" required>
                <label for="nomeguerra">Nome de Guerra:</label>
              </div>


            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" value="<?php echo $row_pessoas['nome'];?>" name="nome" placeholder="Nome completo"  required>
                  <label for="nome">Nome Completo:</label>
                </div>

            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" value="<?php echo $row_pessoas['contato'];?>" name="contato" placeholder="Contato"  required>
                  <label for="contato">Contato:</label>
                </div>

            <div class="form-floating mb-3 mt-3">
               
                <select class="form-select"  name="pstatus"  value="<?php echo $row_pessoas['pstatus'];?>" placeholder="Status" required>
                  <option value="s" <?php if($row_pessoas['pstatus'] == 's') echo 'selected';?>>Ativa</option>
                  <option value="n" <?php if($row_pessoas['pstatus'] == 'n') echo 'selected';?>>Inativa</option>
                </select>
                <label for="pstatus">Status:</label>
            </div>

              <input type="int" name="codmil" value="<?php echo $row_pessoas['codmil'];?>" hidden>

              <button type="submit" class="btn btn-primary" name="acao" value="pessoasupdate">Enviar</button>
            </form>

        </div>

      </div>

    </div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluir<?php echo $row_pessoas['codmil'] ?>"><i class="fas fa-trash"></i></button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>