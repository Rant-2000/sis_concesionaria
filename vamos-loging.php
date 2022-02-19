<?php 
include('conexion.php');

$usu=$_POST['usuario'];
$pas=$_POST['pass'];

session_start();
$proceso=mysqli_query($conexion,'SELECT * FROM usuarios WHERE 
	usuario='$usu' and contra='$pas'');
if ($resultado=mysqli_fetch_array($proceso)) {
	$_SESSION['u_usuario']=$usuario;
	echo "ENTRASTE";
}else{
	echo 'no perro';
}


?>