<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_empleado ();";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		
		<th class='text-left'>Nombre</th>
		<th class='text-left'>Apellidos</th>		
		<th class='text-left'>Telefono</th>		
		<th class='text-left'>Direccion</th>		
		<th class='text-left'>RFC</th>		
		<th class='text-left'>Usuario</th>		
		<th class='text-left'>Cargo</th>		

	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['Nombre']."</td>
		<td class='text-left'>".$consultador['Apellidos']."</td>
		<td class='text-left'>".$consultador['Telefono']."</td>
		<td class='text-left'>".$consultador['Direccion']."</td>
		<td class='text-left'>".$consultador['RFC']."</td>
		<td class='text-left'>".$consultador['Usuario']."</td>
		<td class='text-left'>".$consultador['Cargo']."</td>
	</tr>

	";	
}
echo " </tbody></table>	";
echo "

 <style type = 'text/css'>table {
   border-collapse: separate;
   border-spacing: 5px;
   background: #000 url('gradient.gif') bottom left repeat-x;
   color: #fff;
}
td, th {
   background: #fff;
   color: #000;
} </style> 



";


if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}



?>