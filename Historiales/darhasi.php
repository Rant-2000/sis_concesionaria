 <?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_hisasi();";
$registros=mysqli_query($conecta,$sql);
echo'
                    <thead>
<table class="table-fill">
  <tr>
                        <th>
                          ID Historial
                        </th>
                        <th>
                          Usuario
                        </th>
                        <th>
                          Operacion
                        </th>
                        <th>
                          Fecha
                        </th>
                        <th>
                          ID Registro
                        </th>
                        <th>
                          ID Insumo
                        </th>
                        <th>
                          ID Reparacion
                        </th>
                        <th>
                          Cantidad
                        </th>
                        <th>
                          Fecha_Columna 
                        </th>
                        
                     </tr>
  </thead>
';
while($consultador=mysqli_fetch_array($registros)){
	?>
  <tbody class='table-hover'>
  <tr>

                        <td><?php echo ( isset ( $consultador['idhis_insrepa'] ) ? $consultador['idhis_insrepa'] : '' ); ?></td>

                        <td><?php echo ( isset ( $consultador['usuario'] ) ? $consultador['usuario'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['operacion'] ) ? $consultador['operacion'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['fecha'] ) ? $consultador['fecha'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['id_registro'] ) ? $consultador['id_registro'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['idinsumo'] ) ? $consultador['idinsumo'] : '' ); ?></td>

                        <td><?php echo ( isset ( $consultador['idrepa'] ) ? $consultador['idrepa'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['cantidad'] ) ? $consultador['cantidad'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['fecha_col'] ) ? $consultador['fecha_col'] : '' ); ?></td>
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