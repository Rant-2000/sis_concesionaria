<?php
include ("../conexion.php");
$id=$_POST['id'];
$obsp=$_POST['obs'];
$fein=$_POST['fein'];
$nm=$_POST['nm'];
$ide=$_POST['ide'];
$est=$_POST['est'];
$conecta2=conectar();


$sql="CALL  modi_repa('$nm','$ide','$id','$obsp','$fein','$est')";
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