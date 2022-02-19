<?php
include ("../conexion.php");
$conecta=conectar();

$cod=$_POST['cod'];



$sql="call baja_cliente('$cod');";
//$sql="DELETE FROM empleado WHERE usuario='$usu'";
$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('BAJA EXITOSA')
window.location='inicio.php' 
</script>
";

?>