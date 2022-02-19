<?php 

 echo '
<form id="form"  method="POST">
      <div class="col-md-8" data-color="azure">
              <div class="card" data-color="azure">
                <div class="card-header card-header-success" data-color="azure">
                  <h4 class="card-title">Buscar Insumo</h4>
                  <p class="card-category">Codigo De Barra</p>
                  <input type="text" name="cod"  value="">                  
                  <button data-type="submit"  class="btn btn-primary pull-right" name="Buscar">Buscar</button>
                  </form>
                </div>
';


if (isset($_POST['Buscar'])) { 

    include_once('../conexion.php');
$conecta=conectar();

$cod=$_POST['cod'];
    $strsql = "CALL buscod_ins('$cod')";
    $rs = mysqli_query($conecta,$strsql);
   GLOBAL $row;
   $row = mysqli_fetch_assoc($rs);
    $total_rows = mysqli_num_rows($rs);    
    
}    ?>
                <div class="card-body " data-color="azure">
                  <form>
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Producto</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Producto'] ) ? $row['Producto'] : '' ); ?>"> 
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Descripcion</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Descripcion'] ) ? $row['Descripcion'] : '' ); ?>"> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">CodBarra</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Codigo'] ) ? $row['Codigo'] : '' ); ?>"> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidad</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Cantidad'] ) ? $row['Cantidad'] : '' ); ?>"> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Precio</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Precio'] ) ? $row['Precio'] : '' ); ?>"> 
                        </div>
                      </div>
                      
                    </div>                                       
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
