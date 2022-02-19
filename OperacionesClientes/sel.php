<?php 
include ("../conexion.php");
$conecta=conectar();


$id=$_POST['id'];
$sql=" select c.cargo as 'Cargo' from empleado e inner join cargo c on e.cargo=c.idcargo where e.idempleado='$id';";

/*$sql="INSERT INTO empleado(nombre, apellidos,tel,dir,rfc,usuario,clave,cargo) VALUES ('$nom','$ape','$tel','$dir','$rfc','$usu','$clave','$cargo')";*/
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
  $resultado = "<option value='".$consultador['Cargo']."' selected='selected'>‌";
}
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}


return $resultado;



?>