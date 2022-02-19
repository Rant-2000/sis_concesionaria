<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_ins ();";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		
		<th class='text-left'>Producto</th>
		<th class='text-left'>Codigo de Barra</th>
		<th class='text-left'>Descripcion</th>		
		<th class='text-left'>Precio</th>		
		<th class='text-left'>Cantidad</th>				

	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['Producto']."</td>
		<td class='text-left'>".$consultador['Codigo']."</td>
		<td class='text-left'>".$consultador['Descripcion']."</td>
		<td class='text-left'>".$consultador['Precio']."</td>
		<td class='text-left'>".$consultador['Cantidad']."</td>
		
	</tr>

	";	
}
echo " </tbody></table>	";
echo "<center><input type='submit' name='reporte' value='Reporte' class='btn btn-green'></center>

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