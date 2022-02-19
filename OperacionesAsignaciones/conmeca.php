<?php

include ("../conexion.php");
$conecta=conectar();

$sql="call  cons_emmeca();";
$registros=mysqli_query($conecta,$sql);
echo'
	<div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Empleados</h4>
                  <p class="card-category">Empleados, Mecanicos</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Usuario</th>
                      <th>Cargo</th>
                    </thead>
                    <tbody>
';
while($consultador=mysqli_fetch_array($registros)){
	?>

	
                      <tr>
                        <td><?php echo ( isset ( $consultador['Nombre'] ) ? $consultador['Nombre'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Apellidos'] ) ? $consultador['Apellidos'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Usuario'] ) ? $consultador['Usuario'] : '' ); ?></td>
                        <td><?php echo ( isset ( $consultador['Cargo'] ) ? $consultador['Cargo'] : '' ); ?></td>
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