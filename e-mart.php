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
  <style>
    .nav-item>.nav-link {
      text-shadow: 2px 2px 5px rgba(199, 193, 193, 0.43);
    }
  </style>
</head>

<body>
  <!--NAVBAR-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white scrolling-navbar align-items-lg-end">
    <div class="container-fluid">
      <!--LOGO KWIK-->
      <a class="navbar-brand waves-effect mx-5" href="#" target="#">
        <img src="img/kwik-logo.png" height="70">
      </a>
      <!--BURGER MENU -->
      <button class="navbar-toggler align-content-lg-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 font-weight-bold text-uppercase mx-auto">
          <li class="nav-item px-lg-3 pl-sm-5">
            <a class="nav-link active" aria-current="page" href="#" style="color: #76C246;">Inicio</a>
          </li>
          <li class="nav-item px-lg-3 pl-sm-5">
            <a class="nav-link" aria-current="page" href="#" style="color: #76C246;">Categorías</a>
          </li>
          <li class="nav-item px-lg-3 pl-sm-5">
            <a class="nav-link" aria-current="page" href="#" style="color: #76C246;">Ofertas</a>
          </li>
          <li class="nav-item px-lg-3 pl-sm-5">
            <a class="nav-link" aria-current="page" href="#" style="color: #76C246;">Personal</a>
          </li>
        </ul>
        <form class="d-flex ml-auto">
          <input class="form-control mx-2" type="search" placeholder="Buscar" aria-label="search">
          <span class="input-group-text mr-lg-5" style="background-color: #76C246;" id="basic-addon1">
            <i class="fas fa-search" style="color: white;"></i></span>
          <span class="nav-link"><i class="fas fa-shopping-basket" style="color: #76C246;"></i></span>
        </form>
      </div>
      <!--BARRA DE BUSQUEDA-->

  </nav>
  <!-- FIN NAVBAR -->

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