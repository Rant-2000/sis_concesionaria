<!doctype html>
<html lang="en">

<head>
  <title>Asignaciones. Bodega</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <script src="push.min.js"></script>
   <?php

    session_start();

    if(!isset($_SESSION['rol'])){
       echo '<script>
        Push.create("ERROR",{
            body: "La cantidad a solicitar es mayor a la existente",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';
        header('location: ../home.php');
        
    }else{
        if($_SESSION['rol'] == 1 OR $_SESSION['rol']==2 ){
            
             if($_SESSION['rol'] == 1){
              /*echo '<script>
        Push.create("Bienvenido ",{
            body: "Cuenta con permisos de Gerenciales, Todas las funciones permitidas",
            icon: "../img/logo.png",
            timeout: 4000,
            
        });
    </script>';*/
             }else{
              /*echo '<script>
        Push.create("Bienvenido ",{
            body: "Cuenta con permisos de Administrativo, algunas funciones pueden no estar disponibles",
            icon: "../img/logo.png",
            timeout: 4000,
            
        });
    </script>';*/
             }
        }else{

          header('location: ../home.php');
          echo "No sirve el rol";
        }
    }


?>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo" data-color="danger">
        <a href="../log_out.php"  class="simple-text logo-mini">
          Cerrar Sesion
        </a>
        <a href="../home.php" class="simple-text logo-normal">
          Inicio
        </a>
        
      </div>
<?php
include('menu.php');
?>
      
        
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Asignaciones Beta</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here --> 
<div class="inst">
          
<?php   


    if(!isset($_SESSION['rol'])){
       echo '<script>
        Push.create("ERROR",{
            body: "Debe iniciar sesion",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';
        header('location: ../home.php');
        
    }else{
        if($_SESSION['rol'] == 1 OR $_SESSION['rol']==2 ){
            
             if($_SESSION['rol'] == 1){
              include 'po.php';
             }else{
              include 'po2.php';
             }
        }else{

          header('location: ../home.php');
          
        }
    }


?>
</div>




        </div>
      </div>
      <footer class="footer">
        
      </footer>
    </div>
  </div>
</body>

</html>


