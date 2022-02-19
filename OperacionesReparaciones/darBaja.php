<?php
include ("../conexion.php");
$conecta=conectar();

$conecta2=conectar();
   $strsql = "call  bus_empleado ('".$_POST['um']."');";
    $rs = mysqli_query($conecta2,$strsql);
   GLOBAL $row;
   $row = mysqli_fetch_assoc($rs);
    $total_rows = mysqli_num_rows($rs);    

$idm=isset ( $row['id'] ) ? $row['id'] : '';



$nm=$_POST['nm'];



$sql="call baja_repa('$idm','$nm');";
//$sql="DELETE FROM empleado WHERE usuario='$usu'";
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