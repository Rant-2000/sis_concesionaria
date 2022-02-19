<?php
function Conectar()
{
$SERVIDOR="localhost";
$USUARIO="root";
$PASSWORD="1234";
$BD="concesionaria";

$conexion = mysqli_connect($SERVIDOR, $USUARIO, $PASSWORD,$BD);
if (!$conexion)
{
echo "ERROR DE CONEXION CON EL SERVIDOR MYSQL";
exit();
}


return($conexion);
}

?>