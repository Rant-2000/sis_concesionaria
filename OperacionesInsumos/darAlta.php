<?php
include ("../conexion.php");
include ("generador.php");
$conecta=conectar();

$nom=$_POST['nom'];
$des=$_POST['des'];
$pre=$_POST['pre'];
$cod=$_POST['cod'];
$can=$_POST['can'];

if("" == trim($_POST['cod'])){
    $cod =generar_password_complejo(5);    
}
$sql="CALL alta_ins('$nom','$des','$pre','$cod','$can');";
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