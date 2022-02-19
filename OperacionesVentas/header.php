<!DOCTYPE html>
<html lang="en">
<head>
<title>Carroceria Malosos</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        easing: 'easeOutQuad',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: 'fade',
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(
    function () {
        $('.carousel1').carouFredSel({
            auto: false,
            prev: '.prev1',
            next: '.next1',
            width: 960,
            items: {
                visible: {
                    min: 4,
                    max: 4
                },
            },
            responsive: false,
            scroll: 1,
            mousewheel: false,
            swipe: {
                onMouse: false,
                onTouch: false
            }
        });
    });
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
    <?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../home.php');
        //echo'no hay rol';
    }else{
        if($_SESSION['rol'] == 1  OR $_SESSION['rol']==3){
          //  echo "Entras OK";
        }else{
          header('location: ../home.php');
          //echo "No sirve el rol";
        }
    }


?>
<script src="js/push.min.js"></script>
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
    </div>
  </div>
  <nav>
    <div class="container_12">
      <div class="grid_12">
        <ul class="sf-menu">
          <li class="current"><a href="../home.php">Inicio</a></li>
          <li><a href="OperacionesClientes/inicio.php">Clientes</a>
            <ul>
             <li><a href="../OperacionesClientes/altacliente.php">Nuevo Cliente</a></li>
              <li><a href="../OperacionesClientes/bajacliente.php">Eliminar Cliente</a></li>
              <li><a href="../OperacionesClientes/modibus.php">Modificar Cliente</a></li>
              <li><a href="../OperacionesClientes/busclie.php">Buscar Cliente</a></li>
              <li><a href="../OperacionesClientes/consulta.php">Consultar Clientes</a></li>
              
            </ul>
          </li>
          <li><a href="contact.html">Insumos</a>
            <ul>
              <li><a href="../OperacionesInsumos/altainsumo.php">Nuevo Producto</a></li>
              <li><a href="../OperacionesInsumos/bajainsumo.php">Eliminar Producto</a></li>
              <li><a href="../OperacionesInsumos/modibus.php">Modificar Producto</a></li>
              <li><a href="../OperacionesInsumos/buscarin.php">Buscar Producto COD</a></li>
              <li><a href="../OperacionesInsumos/consulta.php">Consultar Productos</a></li>
              
            </ul>
          </li>
           <li><a href="services.html">Empleados</a>

            <ul>
              <li><a href="../OperacionesEmpleados/altaempleado.php">Nuevo Empleado</a></li>
              <li><a href="../OperacionesEmpleados/bajaempleado.php">Eliminar Empleado</a></li>
              <li><a href="../OperacionesEmpleados/modibus.php">Modificar Emlpeado</a></li>
              <li><a href="../OperacionesEmpleados/busempleado.php">Buscar Empleado</a></li>
              <li><a href="../OperacionesEmpleados/consultaempleados.php">Consultar Empleado</a></li>
              
            </ul>
          </li>
          <li><a href="../OperacionesAutos/inicio.php">Autos</a>
            <ul>
              <li><a href="../OperacionesAutos/altaauto.php">Nuevo Auto</a></li>
              <li><a href="../OperacionesAutos/bajacarro.php">Eliminar Auto</a></li>
              <li><a href="../OperacionesAutos/modibus.php">Modificar Auto</a></li>
              <li><a href="../OperacionesAutos/busauto.php">Buscar Auto</a></li>
              <li><a href="../OperacionesAutos/consulta.php">Consultar Autos</a></li>
              
            </ul>
          </li>
          <li><a href="../OperacionesVentas/inicio.php">Ventas</a>
            <ul>
              <li><a href="../OperacionesVentas/altaventa.php">Nueva Venta</a></li>
              <li><a href="../OperacionesVentas/bajaventa.php">Eliminar Venta</a></li>
              <li><a href="../OperacionesVentas/modibus.php">Modificar Venta</a></li>
              <li><a href="../OperacionesVentas/buscarin.php">Buscar Venta</a></li>
              <li><a href="../OperacionesVentas/consulta.php">Consultar Ventas</a></li>
              
            </ul>
          </li>
          <li><a href="inicio.php">Reparaciones</a>
            <ul>
              <li><a href="../OperacionesReparaciones/altarepa.php">Nueva Reparacion</a></li>
              <li><a href="../OperacionesReparaciones/bajarepa.php">Eliminar Reparacion</a></li>
              <li><a href="../OperacionesReparaciones/modibus.php">Modificar Reparacion</a></li>
              <li><a href="../OperacionesReparaciones/buscarin.php">Buscar Reparacion</a></li>
              <li><a href="../OperacionesReparaciones/consulta.php">Consultar Reparaciones</a></li>
              
            </ul>

          </li>
          <?php 

           if(!isset($_SESSION['rol'])){
        header('location: index.php');
        echo'no hay rol';
    }else{
        if($_SESSION['rol'] == 1 ){
            echo '
          <li><a href="#">Reportes</a>
            <ul>
             <li><a href="../OperacionesReportes/consultaclientes.php">R. Clientes</a></li>
              <li><a href="../OperacionesReportes/consultainsumos">R. Insumos</a></li>
              <li><a href="../OperacionesReportes/consultaempleados">R. Empleados</a></li>
              <li><a href="../OperacionesReportes/consultaautos.php">R. Autos</a></li>
              <li><a href="../OperacionesReportes/consultaReparaciones.php">R. Reparaciones</a></li>
              <li><a href="../OperacionesReportes/consultaasignaciones.php">R. Asignaciones</a></li>
              <li><a href="../OperacionesReportes/consultaventas">R. Ventas</a></li>  
              
            </ul>

          </li>
          <li><a href="#">Historial de operaciones</a>
            <ul>
              <li><a href="../Historiales/hclientes.php">R. Clientes</a></li>
              <li><a href="../Historiales/hinsumo.php">R. Insumos</a></li>
              <li><a href="../Historiales/hemple.php">R. Empleados</a></li>
              <li><a href="../Historiales/hauto.php">R. Autos</a></li>
              <li><a href="../Historiales/haventas.php">R. Ventas</a></li>              
              <li><a href="../Historiales/hrepa.php">R. Reparaciones</a></li>
              <li><a href="../Historiales/hasi.php">R. Asignaciones</a></li>
            </ul> </li>'; 
        }
    }?>
        <div class="clear"></div>
      </div>
      <form align="right" name="form1" method="post" action="../log_out.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" class="button button3" id="submit2" value="Cerrar Sesion">
  </label>
</form>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {background-color: #f44336;} /* Red */ 
</style>
    </div>
  </nav>
</header>