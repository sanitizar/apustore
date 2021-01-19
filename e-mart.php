<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">cv-
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <title>Kiwk E Mart</title>
</head>
<body>
    <!--NAVBAR-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light light-blue scrolling-navbar align-items-lg-end">
    <div class="container-fluid">
      <!--LOGO KWIK-->
      <a class="navbar-brand waves-effect pr-3" href="#" target="#">
        <img src="img/kwik.jpg" height="70" style="border-radius: 9px;" >
      </a>
    <!--BARRA DE BUSQUEDA-->
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="search">
      <span class="input-group-text mr-lg-5" style="background-color: red;" id="basic-addon1">
      <i class="fas fa-search" style="color: greenyellow;"></i></span>      
    </form>
      <!--BURGER MENU -->
      <button class="navbar-toggler align-content-lg-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-uppercase row-cols-lg-3">
            <li class="nav-item p-sm-2">
              <span class="nav-link"><i class="fas fa-shopping-basket" style="color: greenyellow;"></i></span>
            </li>
            <li class="nav-link">
              <a class="nav-link waves-effect" style="color: greenyellow;" href="#">Categorias</a>
            </li>
            <li class="nav-link">
              <a class="nav-link waves-effect" style="color: greenyellow;" href="#">Ofertas</a>
            </li>
            <li class="nav-link">
              <a class="nav-link waves-effect" style="color: greenyellow;" href="#">Personal</a>
            </li>
            <li class="nav-link">
              <a class="nav-link waves-effect" style="color: greenyellow;" href="#">Inicio</a>
            </li>
        </ul>
</nav>
<?php 
        include "carousel.php";
    ?>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/style.js"></script>
</body>
</html>