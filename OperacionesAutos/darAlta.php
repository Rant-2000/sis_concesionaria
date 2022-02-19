<?php
include ("../conexion.php");
include ("generador.php");
$conecta=conectar();

$nmo=$_POST['nmo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$precio=$_POST['precio'];
$placa=$_POST['placa'];

$sql="CALL alta_au('$nmo','$placa','$marca','$modelo','$color','$precio');";
//CALL alta_au('2021','OAX-20-21','Nissan','Sentra','Naranja',2021);
$registros=mysqli_query($conecta,$sql);

if(!$registros)
{
echo("Error description: " . mysqli_error($conecta));

exit();
}



echo "
<script language='JavaScript' type='text/JavaScript'>
alert('INSERCIÓN EXITOSA')
window.location='inicio.php' 
</script>
";

?>