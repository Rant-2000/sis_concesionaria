 <?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  constotal_insrepa();";
$registros=mysqli_query($conecta,$sql);
echo'
                    <thead>
<table class="table-fill">
  <tr>
                        <th>
                          ID Asignaciones
                        </th>
                        <th>
                          ID Reparacion
                        </th>
                        <th>
                          Numero de Motor
                        </th>
                        <th>
                          Placa
                        </th>
                        <th>
                          Modelo
                        </th>
                        <th>
                          Marca
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Usuario
                        </th>
                        <th>
                          Producto
                        </th>
                        <th>
                          codBarra
                        </th>
                        <th>
                          Cantidad
                        </th>
                        <th>
                          Fecha
                        </th>
                     </tr>
  </thead>
';
while($consultador=mysqli_fetch_array($registros)){
	?>
  <tbody class='table-hover'>
  <tr>

                        <td><?php echo ( isset ( $consultador['idas'] ) ? $consultador['idas'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['ID Reparacion'] ) ? $consultador['ID Reparacion'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Numero de Motor'] ) ? $consultador['Numero de Motor'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Placa'] ) ? $consultador['Placa'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Modelo'] ) ? $consultador['Modelo'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Marca'] ) ? $consultador['Marca'] : '' ); ?></td>

                        <td><?php echo ( isset ( $consultador['Nombre'] ) ? $consultador['Nombre'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Usuario'] ) ? $consultador['Usuario'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Producto'] ) ? $consultador['Producto'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['CodBarra'] ) ? $consultador['CodBarra'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Cantidad'] ) ? $consultador['Cantidad'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Fecha'] ) ? $consultador['Fecha'] : '' ); ?></td>
                      </tr>
                      



<?php

}
echo " </tbody></table> ";
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