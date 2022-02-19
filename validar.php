<?php

//include ("conexion.php");
//$conecta=conectar();


$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
 
if(empty($usuario) || empty($pass)){
header("Location: index.html");
exit();
}

$conexion = mysqli_connect("localhost", "root","1234","concesionaria");
if (!$conexion)
{
echo "ERROR DE CONEXION CON EL SERVIDOR MYSQL";
exit();
}
 

$result = mysqli_query($conexion,"SELECT * from empleado where usuario='" . $usuario . "'");
 
foreach($result as $row)    {
if($row['cargo']=="1" OR $row['cargo']=="2" OR $row['cargo']=="3" OR $row['cargo']=="4"){
        $_SESSION['usuario']=$row['usuario'];
        $_SESSION[cargo]=$row['cargo'];
        $_SESSION['passw']=$row['clave'];
        if($_SESSION['usuario']==$usuario AND $_SESSION['passw']==$pass){
            echo '<script> alert("Sesion iniciada. Bienvenido '.$_SESSION['usuario'].' Cargo: '.$_SESSION['cargo'].'");
window.location.href="home.php";
</script>';
        }else{
           echo '<script> alert("ERROR Clave incorrecta");
window.location.href="index.html";
</script>'; 
        }
        


}else{
     echo '<script> alert("sesion incorrecta invitado");
      window.location.href="contact.html";
</script>';   
}

        
}
        if(empty($result)){
             echo '<script> alert("sesion incorrecta invitado");
      window.location.href="contact.html";
</script>';
        }

?>