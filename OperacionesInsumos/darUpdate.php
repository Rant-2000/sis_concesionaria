<?php
include ("../conexion.php");
$conecta=conectar();


$pro=$_POST['pro'];
$des=$_POST['des'];
$pre=$_POST['pre'];
$can=$_POST['can'];
$cod=$_POST['cod'];
$id=$_POST['id'];

//echo "$id,$pro,$des, $pre,$cod,$can";
$sql="CALL  modiid_ins('$id','$pro','$des',$pre,'$cod',$can)";

//$sql="INSERT INTO empleado(nombre, apellidos,tel,dir,rfc,usuario,clave,cargo) VALUES ('$nom','$ape','$tel','$dir','$rfc','$usu','$clave','$cargo')";*/
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