<?php
include ("../conexion.php");



$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$compra=$_POST['compra'];
$reparacion=$_POST['reparacion'];
$final=$_POST['final'];
$fechac=$_POST['fechac'];
$estado=$_POST['estado'];
$Placa=$_POST['Placa'];
$nm=$_POST['nm'];

$conecta2=conectar();

$id=$_POST['id'];

$sql="CALL  modi_carro('$Placa','$marca','$modelo','$color','$compra','$reparacion','$final','$estado','$fechac','$id','$nm')";
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