<?php
include ("../conexion.php");

$conecta2=conectar();
   $strsql = "call  bus_empleado ('".$_POST['cod']."');";
    $rs = mysqli_query($conecta2,$strsql);
   GLOBAL $row;
   $row = mysqli_fetch_assoc($rs);
    $total_rows = mysqli_num_rows($rs);    

$idp=isset ( $row['id'] ) ? $row['id'] : '';

//echo $idp;

$conecta=conectar();

$au=$_POST['nm'];
$obs=$_POST['obs'];


$sql2="CALL alta_repa('$au','$obs','$idp');";
$registros=mysqli_query($conecta,$sql2);

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