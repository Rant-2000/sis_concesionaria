<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_ventas();";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		
		<th class='text-left'>ID</th>
		<th class='text-left'>Comprador</th>		
		<th class='text-left'>Apellidos</th>				
		<th class='text-left'>RFC</th>				
		<th class='text-left'>Numero de Motor</th>				
		<th class='text-left'>Marca</th>				
		<th class='text-left'>Modelo</th>				
		<th class='text-left'>Costo</th>				
		<th class='text-left'>Vendedor</th>				
		<th class='text-left'>Usuario</th>				
		
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['ID']."</td>
		<td class='text-left'>".$consultador['Comprador']."</td>
		<td class='text-left'>".$consultador['Apellidos']."</td>
		<td class='text-left'>".$consultador['RFC']."</td>
		<td class='text-left'>".$consultador['Numero de Motor']."</td>
		<td class='text-left'>".$consultador['Marca']."</td>
		<td class='text-left'>".$consultador['Modelo']."</td>
		<td class='text-left'>".$consultador['Costo']."</td>
		<td class='text-left'>".$consultador['Representante']."</td>
		<td class='text-left'>".$consultador['Usuario']."</td>
		

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