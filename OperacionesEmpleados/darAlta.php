<?php
include ("../conexion.php");
$conecta=conectar();

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$tel=$_POST['tel'];
$dir=$_POST['dir'];
$rfc=$_POST['rfc'];
$usu=$_POST['usuario'];
$clave=$_POST['clave'];
$cargo=$_POST['cargo'];


$sql="call alta_empleado('$nom','$ape','$tel','$dir','$rfc','$usu','$clave','$cargo')";


$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}



echo "
<script language='JavaScript' type='text/JavaScript'>
alert('INSERCIÓN EXITOSA')
window.location='inicio.php' 
</script>
";

?>