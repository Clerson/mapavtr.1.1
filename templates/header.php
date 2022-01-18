<?php
session_start();

if(isset($_GET['page'])) {
$_SESSION['page'] = $_GET['page'];
$page = $_SESSION['page']; 
}

require 'conexao.php';

?>
<head>
<title>Mapa Viaturas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="icon" type="image/x-icon" href="favico.gif">

</head>

<body class="bg-dark">
    <div class="bg-white shadow text-center p-3">
      <h4>MAPA DE CONTROLE DE SAÍDAS DAS VIATURAS DO 9º BBM - CALDAS NOVAS/GO</h4>
    </div>

  <div class="container-sm p-5">

  <div class="row">

  </div> 
    <div class="row">
