<?php
session_start();
?>
<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="shortcut icon" href="img/iconedog.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script type="text/javascript" defer src="libs/jquery/jquery-3.3.1.min.js"> </script>
    <script type="text/javascript" defer src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" defer src="js/main.js"> </script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat: 400, 700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato: 400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>DOGUINHOS</title>


    <!-- Bootstrap core CSS -->

<body background="img/fundoform8.jpg" no repeat>
  <header>
    <nav  id="mainNav" class="navbar navbar-expand-sm fixed-top bg-secundario">
    <div class="container">
      <button id="botao-nav" class="navbar-toggler navbar-toggler-right-text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars">  </i>
      </button>
      <a class="navbar-brand" href="index.html"> DOGUINHOS </a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto mt-2 mt-sm-0"></ul>
        <li class="nav-item">
          <a class="nav-link" href="index.html">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="colabore.php">COLABORE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario.html">LOGIN </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="php/imprimir.php"> GERENCIAMENTO </a>
        </li>
      </div>
    </div>
    </nav>
  </header>

<!-- End menu -->
</br></br></br></br></br>

<div align="center">
<div id="formulario">
  <div class="row"> <!-- INIT row -->


  <div class="col-sm-3">
    <form method="post" action="php/insere.php" id="formCadastrarse">
  
      <div class="form-group">
                          
        <label for="usuario" id="usuario" class="alinhalabel">NOME</label>
        <input type="text" class="form-control formu" style="width: 200px;" name="NomeUsuario" id="name">
      </div>
      <div class="form-group" align="center">
        <label for="email"  id=" email" class="alinhalabel">EMAIL</label>
        <input type="email" class="form-control formu" style="width: 200px;" name="EmailUsuario" id="email">  
      </div>
     
      <div class="form-group">
        <label for="senha" id=" senha" class="alinhalabel">SENHA</label>
        <input type="password" class="form-control formu" style="width: 200px;" name="SenhaUsuario" id= "password"">  
      </div>

      <button id="botao-cad" type="submit" class="btn btn-primary"> CADASTRAR </button>
    </form>
  </div>
  </div>
</div>
</div>
<div class="col-sm-6"></div>

          
 <!-- END ROW-->

</body>
</html>