<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Mapa Viaturas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="icon" type="image/x-icon" href="../img/favico.gif">
</head>

<?php 
include "../conexao.php";
include "model.php";
include "_form_insert.php";
?>

<body class="bg-dark small">
<!--     <div class="bg-white shadow text-center p-3">
      <h4>MAPA DE CONTROLE DE SAÍDAS DAS VIATURAS DO 9º BBM - CALDAS NOVAS/GO</h4>
    </div> -->

  <div class="container-sm p-4 mb-5">

    <div class="row">

         <div class="col-sm-2 bg-white me-2 p-2 rounded-3 shadow">
          
            <?php include_once "menu_vert_esq.php";?> 
             
          </div>
       
          <div class="col-sm">

            <div class="row mb-2 bg-white shadow rounded-3 sticky-top">

              <nav class="navbar navbar-expand-sm ">
              <ul class="navbar-nav">
                <li class="nav-item"><a href='javascript:history.back()' class='btn btn-light shadow-sm me-2'><i class="fas fa-reply"></i> Voltar</a></li>
                <li class="nav-item me-2"><a href='#' class='btn btn-light' data-bs-toggle="modal" data-bs-target="#insert"><i class="fas fa-plus"></i> Adicionar</a></li>
                