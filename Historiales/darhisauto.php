<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_hisauto ();";
$registros=mysqli_query($conecta,$sql);
echo"
<thead>
<table class='table-fill'>
	<tr>
		<th class='text-left'>ID Historial</th>
		<th class='text-left'>Usuario</th>
		<th class='text-left'>Operacion</th>
		<th class='text-left'>Fecha</th>		
		<th class='text-left'>ID Registro</th>		
		<th class='text-left'>N.Motor</th>				
		<th class='text-left'>Placa</th>				
		<th class='text-left'>Marca</th>				
		<th class='text-left'>Modelo</th>				
		<th class='text-left'>Color</th>				
		<th class='text-left'>P.Original</th>				
		<th class='text-left'>P.Reparacion</th>				
		<th class='text-left'>P.Final</th>				
		<th class='text-left'>estado</th>				
		<th class='text-left'>F.Compra</th>				
		<th class='text-left'>P.Venta</th>				
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
	<td class='text-left'>".$consultador['idhis_auto']."</td>
		<td class='text-left'>".$consultador['usuario']."</td>
		<td class='text-left'>".$consultador['operacion']."</td>
		<td class='text-left'>".$consultador['fecha']."</td>
		<td class='text-left'>".$consultador['id_registro']."</td>
		<td class='text-left'>".$consultador['nmotor']."</td>
		<td class='text-left'>".$consultador['placa']."</td>
		<td class='text-left'>".$consultador['marca']."</td>
		<td class='text-left'>".$consultador['modelo']."</td>
		<td class='text-left'>".$consultador['color']."</td>
		<td class='text-left'>".$consultador['p_original']."</td>
		<td class='text-left'>".$consultador['p_reparacion']."</td>
		<td class='text-left'>".$consultador['p_final']."</td>
		<td class='text-left'>".$consultador['estado']."</td>		
		<td class='text-left'>".$consultador['fcompra']."</td>
		<td class='text-left'>".$consultador['p_venta']."</td>
		

	</tr>

	";	
}
echo " </tbody></table>	";
echo "
	<center><input type='submit' name='reporte' value='Reporte' class='btn btn-green'></center>
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