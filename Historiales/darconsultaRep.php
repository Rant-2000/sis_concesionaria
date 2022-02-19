<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_hisrepa ();";
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

		<th class='text-left'>Mecanico</th>		
		<th class='text-left'>Observaciones</th>				
		<th class='text-left'>Fecha de Ingreso</th>			
		<th class='text-left'>Total</th>				
		<th class='text-left'>Numero de Motor</th>				
		
	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['idhis_reparacion']."</td>
		<td class='text-left'>".$consultador['usuario']."</td>
		<td class='text-left'>".$consultador['operacion']."</td>
		<td class='text-left'>".$consultador['fecha']."</td>
		<td class='text-left'>".$consultador['id_registro']."</td>
		<td class='text-left'>".$consultador['mecanico']."</td>
		<td class='text-left'>".$consultador['obs']."</td>
		<td class='text-left'>".$consultador['fecha_ingreso']."</td>
		<td class='text-left'>".$consultador['total']."</td>
		<td class='text-left'>".$consultador['auto']."</td>
		

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