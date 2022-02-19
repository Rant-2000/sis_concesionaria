<?php
function getUsuario($usuario)
{
include ("../conexion.php");

$conecta=conectar();
$sql="SELECT idempleado FROM empleado where usuario='$usuario'";


$registros=mysqli_query($conecta,$sql);
if(!$registros)
{
  echo("Error description: " . mysqli_error($conecta));

exit();
}

return($registros);
}



?>