<?php
include ("../conexion.php");
$conecta=conectar();

$cod=$_POST['cod'];


//echo "$cod";

$sql="call baja_carro('$cod');";

$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
echo("Error description: " . mysqli_error($conecta));
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('BAJA EXITOSA')
window.location='inicio.php' 
</script>
";

?>