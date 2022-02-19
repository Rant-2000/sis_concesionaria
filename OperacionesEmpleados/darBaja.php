<?php
include ("../conexion.php");
$conecta=conectar();

$usu=$_POST['usuario'];



$sql="call  baja_empleado ($usu);";
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