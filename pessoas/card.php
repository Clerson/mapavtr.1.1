

<div class="row">

<?php  do { 

   $codmil = $row_pessoas["codmil"];
   $grad = $row_pessoas["grad"];
   $rg = $row_pessoas["rg"];
   $nomeguerra = $row_pessoas["nomeguerra"];
   $nome = $row_pessoas["nome"];
   $contato = $row_pessoas["contato"];
   $img = $row_pessoas["img"];
   $pstatus = $row_pessoas["pstatus"];
    
    ?>

  <div class="card col-sm-2 shadow-sm rounded-3 p-0">
      <img class="card-img-top" src="pessoas/pessoas_img/<?php echo $img.".jpg";?>" alt="Card image" width="200" height="200">
      <div class="card-body"><?php echo $grad."<b> ".$nomeguerra;?></b></div>
      
      <div class="card-footer">
        <a href='#' class='btn btn-secondary shadow-sm'  data-bs-toggle="modal" data-bs-target="#updatepessoa<?php echo $codmil;?>"><i class="fas fa-pencil-alt"></i></a> 
      </div>
  </div>



<div class="modal fade" id="updatepessoa<?php echo $codmil;?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-user-plus"></i> Alterando Dados<h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">

            <form action="?page=pessoas_model" method="POST"  class="was-validated">


              <div class="form-floating mb-3 mt-3"> 
                   <input class="form-control" list="grad" name="grad" placeholder="grad" value="<?php echo $grad;?>" required>
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
                <div class="invalid-feedback">Preecha este campo!</div>
            </div>

            <div class="form-floating mb-3 mt-3">   
                <input type="text" class="form-control" name="rg" value="<?php echo $rg;?>" placeholder="numero do RG"   required>
                <label for="rg">RG:</label>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Preecha este campo!</div>
            </div>

            <div class="form-floating mb-3 mt-3"> 
                <input type="text" class="form-control" value="<?php echo $nomeguerra;?>" name="nomeguerra" placeholder="Nome de guerra" required>
                <label for="nomeguerra">Nome de Guerra:</label>
                <div class="valid-feedback">Válido</div>
                <div class="invalid-feedback">Preecha este campo!</div>
            </div>


            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" value="<?php echo $nome;?>" name="nome" placeholder="Nome completo"  required>
                  <label for="nome">Nome Completo:</label>
                  <div class="valid-feedback">Válido</div>
                  <div class="invalid-feedback">Preecha este campo!</div>
            </div>

            <div class="form-floating mb-3 mt-3"> 
                  <input type="text" class="form-control" value="<?php echo $contato;?>" name="contato" placeholder="Contato"  required>
                  <label for="contato">Contato:</label>
                  <div class="valid-feedback">Válido</div>
                  <div class="invalid-feedback">Preecha este campo!</div>
            </div>

            <div class="form-floating mb-3 mt-3">
               
                <select class="form-select"  name="pstatus"  value="<?php echo $pstatus;?>" placeholder="Status" required>
                  <option value="s" <?php if($pstatus == 's') echo 'selected';?>>Ativa</option>
                  <option value="n" <?php if($pstatus == 'n') echo 'selected';?>>Inativa</option>
                </select>
                <label for="pstatus">Status:</label>
            </div>

              <input type="int" name="codmil" value="<?php echo $codmil;?>" hidden>

              <button type="submit" class="btn btn-primary mt-3" name="acao" value="pessoasupdate">Enviar</button>
            </form>

        </div>

      </div>

    </div>

    <!-- Modal footer -->
      <div class="modal-footer">
         <a href="#"  data-bs-toggle="modal" data-bs-target="#excluir<?php echo $codmil ?>" class="btn btn-warning"><i class="fas fa-trash"></i></a>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

<!-- //------- inicio Modal Excluir -->

<div class="modal fade" id="excluir<?php echo $codmil ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">#<?php echo $codmil; ?> Excluir <?php echo $grad ." ".$nomeguerra; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <p>Tem certeza que deseja excluir esse registro?</p>
         <a href="?page=pessoas&delete=<?php echo $codmil;?>" class="btn btn-danger">Sim</a> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>  




<?php } while($row_pessoas = $result_pessoas->fetch_assoc()) ;?>
</div>
</div>