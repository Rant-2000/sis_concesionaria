<?php
include ("../conexion.php");

$conecta=conectar();

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$tel=$_POST['tel'];
$dir=$_POST['dir'];
$rfc=$_POST['rfc'];

$sql="CALL alta_cliente('$nom','$ape','$tel','$dir','$rfc');";
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