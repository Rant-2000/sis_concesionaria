<?php
include ("../conexion.php");

$idv=$_POST['idv'];
$us=$_POST['us'];
$idc=$_POST['idc'];
$nm=$_POST['nm'];
$fv=$_POST['fv'];
$conecta2=conectar();


$sql="CALL  modi_ventas('$idv','$us','$idc','$nm','$fv')";
$registros=mysqli_query($conecta2,$sql);
if(!$registros)
{
  echo("Error description: " . mysqli_error($conecta2));
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('INSERCIÓN EXITOSA')
window.location='inicio.php' 
</script>
";

?>