<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_repa ();";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		
		<th class='text-left'>ID</th>
		<th class='text-left'>Observaciones</th>		
		<th class='text-left'>Fecha de Ingreso</th>		
		<th class='text-left'>Total</th>				
		<th class='text-left'>Nombre Mecanico</th>				
		<th class='text-left'>Usuario Mecanico</th>				
		<th class='text-left'>Numero de Motor</th>				
		<th class='text-left'>Placa</th>				
		<th class='text-left'>Marca</th>				
		<th class='text-left'>Modelo</th>				
		<th class='text-left'>Color</th>				
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['ID']."</td>
		<td class='text-left'>".$consultador['Observaciones']."</td>
		<td class='text-left'>".$consultador['Fecha de Ingreso']."</td>
		<td class='text-left'>".$consultador['Total']."</td>
		<td class='text-left'>".$consultador['Nombre Mecanico']."</td>
		<td class='text-left'>".$consultador['Usuario Mecanico']."</td>
		<td class='text-left'>".$consultador['Numero de Motor']."</td>
		<td class='text-left'>".$consultador['Placa']."</td>
		<td class='text-left'>".$consultador['Marca']."</td>
		<td class='text-left'>".$consultador['Modelo']."</td>
		<td class='text-left'>".$consultador['Color']."</td>

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