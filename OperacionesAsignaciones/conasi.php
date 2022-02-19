<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  constotal_insrepa();";
$registros=mysqli_query($conecta,$sql);
echo'
                     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Consulta de Reparaciones</h4>
                  <p class="card-category"> Asignaciones, Insumos, Reparaciones, Empleados y Autos</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
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
                      </thead>
                      <tbody>
';
while($consultador=mysqli_fetch_array($registros)){
	?>

	
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
echo '
                    </tbody>
                  </table>
                </div>
              </div>
            </div>';



if(!$registros)
{
echo "ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA";
exit();
}



?>