<?php
include ("../conexion.php");
$conecta=conectar();

$cod=$_POST['idv'];



$sql="call baja_venta('$cod');";
//$sql="DELETE FROM empleado WHERE usuario='$usu'";
$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
echo "ERROR AL BORRAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('BAJA EXITOSA')
window.location='inicio.php' 
</script>
";

?>