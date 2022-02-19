<?php 

 echo '<form id="form"  method="POST">
      <div class="col-md-8" data-color="azure">
              <div class="card" data-color="azure">
              
                <div class="card-header card-header-tabs card-header-primary" data-color="azure">
                  <h4 class="card-title">Buscar Reparacion</h4>

                  <p class="card-category">Usuario</p>
                  <input type="text" name="usu"  value="">                  
                  <p class="card-category">Placa</p>
                  <input type="text" name="placa"  value="">                  

                  <button data-type="submit"  class="btn btn-primary pull-right" name="Buscar2">Buscar</button>
                  </form>
                </div>
';


if (isset($_POST['Buscar2'])) { 

    include_once('../conexion.php');
$conecta=conectar();
$meca=$_POST['usu'];
$placa=$_POST['placa'];
    $strsql = "CALL busidrepa_uspl('$meca','$placa')";
    $rs = mysqli_query($conecta,$strsql);
   GLOBAL $row;
   $row = mysqli_fetch_assoc($rs);
    $total_rows = mysqli_num_rows($rs);    
    
}    ?>

      <div class="card-body " data-color="azure">
                  <form>
                    
                    
                   
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['ID'] ) ? $row['ID'] : '' ); ?>"> 
                        </div>
                      </div>
                    </div>                                       
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

