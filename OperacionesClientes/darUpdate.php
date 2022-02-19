<?php
include ("../conexion.php");

include ("autom.php");
$conecta=conectar();
$rfc=$_POST['rfc'];
$getid="CALL busidrfc_cliente($rfc)";
$r=mysqli_query($conecta,$getid);
if(!$r)
{
  echo("Error description: " . mysqli_error($conecta));

exit();
}

$idcliente='';
while ($row = $r->fetch_assoc()) {
    $idcliente= $row['id'];
}

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$tel=$_POST['tel'];
$dir=$_POST['dir'];
//$rfc=$_POST['rfc'];
//echo $nom,$ape,$tel,$dir,$rfc,$idcliente;

$conecta2=conectar();
$sql="CALL  modi_cliente('$nom','$ape','$tel','$dir','$rfc',$idcliente)";
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