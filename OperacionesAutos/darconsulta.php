<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_carro ();";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		<th class='text-left'>Numero de Motor</th>
		<th class='text-left'>Placa</th>
		<th class='text-left'>Marca</th>
		<th class='text-left'>Modelo</th>		
		<th class='text-left'>Color</th>		
		<th class='text-left'>P.Compra</th>				
		<th class='text-left'>P.Reparacion</th>				
		<th class='text-left'>P.Final</th>				
		<th class='text-left'>Estado</th>				
		<th class='text-left'>P.Venta</th>				
		
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
	<td class='text-left'>".$consultador['Numero de Motor']."</td>
		<td class='text-left'>".$consultador['Placa']."</td>
		<td class='text-left'>".$consultador['Marca']."</td>
		<td class='text-left'>".$consultador['Modelo']."</td>
		<td class='text-left'>".$consultador['Color']."</td>
		<td class='text-left'>".$consultador['P.Compra']."</td>
		<td class='text-left'>".$consultador['P.Reparacion']."</td>
		<td class='text-left'>".$consultador['P.Final']."</td>
		<td class='text-left'>".$consultador['Estado']."</td>
		<td class='text-left'>".$consultador['P.Venta']."</td>
		

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