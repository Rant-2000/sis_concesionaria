<?php 
if (isset($_GET['action'])) { 

    include_once('../conexion.php');
$conecta=conectar();
   $strsql = "call  bus_empleado ('".$_GET['Usuario']."');";
    $rs = mysqli_query($conecta,$strsql);
   GLOBAL $row;
   $row = mysqli_fetch_assoc($rs);
    $total_rows = mysqli_num_rows($rs);    
    
} 

?>

<form method="GET">
  <h1>Entra tu Id:</h1>
    Id: <br/>
    <input type="text" id="Usuario" name="Usuario" value="<?php echo ( isset ( $row['Usuario'] ) ? $row['Usuario'] : '' ); ?>"> <input type="submit" id="btn_submit" value="Enviar"><br/>
    Curso:<br/>
    <input type="text" id="curso" name="curso" value="<?php echo ( isset ( $row['Nombre'] ) ? $row['Nombre'] : '' ); ?>"><br/>
    Fecha:<br/>
    <input type="text" id="fecha" name="fecha" value="<?php echo ( isset ( $row['Apellidos'] ) ? $row['Apellidos'] : '' ); ?>"><br/><br/>
    <input type="hidden" id="action" name="action" value="sent">
    
</form>




<hr>
<?php include_once('../conexion.php');?>
<?php

  $strsql = "SELECT * FROM empleado ";

$conecta=conectar();
  $rs = mysqli_query($conecta,$strsql) ;
  $row = mysqli_fetch_assoc($rs);
  $total_rows = mysqli_num_rows($rs);

  //print_r($row);
?>


