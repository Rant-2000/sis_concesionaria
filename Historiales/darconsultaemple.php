<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_hisempleado ();";
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

		<th class='text-left'>Nombre</th>
		<th class='text-left'>Apellidos</th>		
		<th class='text-left'>Telefono</th>		
		<th class='text-left'>Direccion</th>		
		<th class='text-left'>RFC</th>		
		<th class='text-left'>Usuario</th>		
		<th class='text-left'>Cargo</th>		
		<th class='text-left'>Clave</th>		

	</tr>
	</thead>
";
while($consultador=mysqli_fetch_array($registros)){
	echo "
	<tbody class='table-hover'>
	<tr>
		<td class='text-left'>".$consultador['idhis_empleado']."</td>
		<td class='text-left'>".$consultador['usuario']."</td>
		<td class='text-left'>".$consultador['operacion']."</td>
		<td class='text-left'>".$consultador['fecha']."</td>	
		<td class='text-left'>".$consultador['id_registro']."</td>	

		<td class='text-left'>".$consultador['nombre']."</td>
		<td class='text-left'>".$consultador['apellidos']."</td>
		<td class='text-left'>".$consultador['tel']."</td>
		<td class='text-left'>".$consultador['dir']."</td>
		<td class='text-left'>".$consultador['rfc']."</td>
		<td class='text-left'>".$consultador['usuario_col']."</td>
		<td class='text-left'>".$consultador['cargo']."</td>
		<td class='text-left'>".$consultador['clave']."</td>
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