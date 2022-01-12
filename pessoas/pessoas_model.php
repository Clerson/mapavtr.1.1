<?php
// require '../../conexao.php';

   if(isset($_GET['acao'])) { 


         if(($_GET['acao']) == 'view') {

        $sql_pessoas = "SELECT * FROM pessoas WHERE status = 's'";

         } // FIM DA if(($_GET['acao']) == 'view')




         if(($_GET['acao']) == 'update') {

            // $sql_pessoas = "SELECT * FROM pessoas WHERE codmil=$codmil";

            if (isset($_GET['iddetmp'])) {
               $iddetmp = $_GET['iddetmp'];
               $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas, detmapa WHERE iddetmp=$iddetmp AND idpessoa = codmil";
              } else { $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas WHERE idpessoa = codmil AND status='s'"; }        

         } // FIM DA if(($_GET['acao']) == 'update')


         if(($_GET['acao']) == 'delete') { 

            $sql_pessoas = "SELECT * FROM detmapa WHERE idmapa=$idmapa";

         } // FIM DA if(($_GET['acao']) == 'delete')


         if(($_GET['acao']) == 'insert') {

               $sql_pessoas = "SELECT codmil, nomeguerra, status FROM pessoas WHERE status = 's'";


         } // FIM DA if(($_GET['acao']) == 'insert') 

            $result_pessoas = mysqli_query($conn, $sql_pessoas);
            $row_pessoas = mysqli_fetch_assoc($result_pessoas);
            
      } // FIM DA if(isset($_GET['acao']))

;?>