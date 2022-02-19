<?php

include ("../conexion.php");
$conecta=conectar();

$sql="SELECT * FROM cargo";
$registros=mysqli_query($conecta,$sql);

echo"
<p>Seleccione un cargo del siguiente menú:</p>
    <p>Cargos:
      <select>
        <option value='0'>Seleccione:</option>
";
while($consultador=mysqli_fetch_array($registros)){
	echo '<option value="'.$consultador['idcargo'].'">'.$consultador['Cargo'].'</option>';
}
echo "</select>
      
    </p>";

//sacar id seleccionado para la alta
if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA".mysqli_error();
exit();
}



?>