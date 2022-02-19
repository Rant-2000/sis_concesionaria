<?php
include ("../conexion.php");

$conecta=conectar();

$nm=$_POST['nm'];
$usu=$_POST['usem'];
$idc=$_POST['idc'];


$sql2="CALL alta_venta('$usu','$idc','$nm');";
$registros=mysqli_query($conecta,$sql2);

if(!$registros)
{
//echo("Error description: " . mysqli_error($conecta));
$error=mysqli_error($conecta);
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('ERROR ".$error."')
window.location='inicio.php' 
</script>
";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('INSERCIÓN EXITOSA')
window.location='inicio.php' 
</script>
";
?>