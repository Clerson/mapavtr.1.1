<?php
         $sql_pessoas = "SELECT * FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";
         $result_pessoas = mysqli_query($conn, $sql_pessoas);
         $row_pessoas = mysqli_fetch_assoc($result_pessoas);
            
            if (isset($_GET['iddetmp'])) {
               $iddetmp = $_GET['iddetmp'];
               $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas, detmapa WHERE iddetmp=$iddetmp AND idpessoa = codmil";
              } else { $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas WHERE idpessoa = codmil AND status='s'"; }        


;?>