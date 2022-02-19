<?php

if (isset($_POST['Buscar'])) { 

    include_once('../conexion.php');
$conecta=conectar();

$cod=$_POST['cod'];
    $strsql = "CALL buscod_ins('$cod')";
    $rs = mysqli_query($conecta,$strsql);
   GLOBAL $row;
   $row = mysqli_fetch_assoc($rs);
    $total_rows = mysqli_num_rows($rs);        
}

?>
<form id="form"  method="POST">
      <div class="col-md-8" data-color="azure">
              <div class="card" data-color="azure">
                <div class="card-header card-header-success" data-color="azure">
                  <h4 class="card-title">Buscar Insumo</h4>
                  <p class="card-category">Codigo De Barra</p>
                  <input type="text" name="cod"  value="<?php if(isset($_POST['cod'])) echo $_POST['cod'];?>">
                  <button  data-type="submit"  class="btn btn-primary pull-right" name="Buscar">Buscar</button>    
                  <p class="card-category">Cantidad</p>                                
                  <input type="text" name="cant"  value="<?php if(isset($_POST['cant'])) echo $_POST['cant'];?>">  
                  <button data-type="submit"  class="btn btn-primary pull-right" name="asi">Asignar</button>
                  <input type="hidden" class="form-control" value="<?php echo ( isset ( $row['Cantidad'] ) ? $row['Cantidad'] : '' ); ?>"name="can" id="can" readonly='readonly'> 

                  <h4 class="card-title">Reparacion</h4>
                  
                  <p class="card-category">Id de la reparacion</p>
                  
                  <input type="text" name="repa" value="<?php if(isset($_POST['repa'])) echo $_POST['repa'];?>">  
                  <button data-type="submit"  class="btn btn-primary pull-right" name="edi">Editar Asignacion</button>                                                              
                  <h4 class="card-title">Id Asignacion</h4>
                  
                  <p class="card-category">Usar solo para Eliminaciones</p>
                  
                  <input type="text" name="idasi" value="<?php if(isset($_POST['idasi'])) echo $_POST['idasi'];?>" hint='Solo para Eliminaciones'>  

                  <button data-type="submit"  class="btn btn-primary pull-right" name="elim">Elminar Asignacion</button>        
                  <input type="hidden" class="form-control" value="<?php echo ( isset ( $row['id'] ) ? $row['id'] : '' ); ?>"name="ide" id="ide" readonly='readonly' > 
                </div>                
                </form>
             <div class="card-body " data-color="azure">
                  <form method="POST">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Producto</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Producto'] ) ? $row['Producto'] : '' ); ?>" name="prod" id="prod" readonly='readonly'> 
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Descripcion</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Descripcion'] ) ? $row['Descripcion'] : '' ); ?>"name="des" id="des" readonly='readonly'>  
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">CodBarra</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Codigo'] ) ? $row['Codigo'] : '' ); ?>"name="cod" id="cod" readonly='readonly'> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cantidad</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['Cantidad'] ) ? $row['Cantidad'] : '' ); ?>"name="can" id="can" readonly='readonly'> 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ID</label>
                          <input type="text" class="form-control" value="<?php echo ( isset ( $row['id'] ) ? $row['id'] : '' ); ?>"name="ide" id="ide" readonly='readonly'> 
                        </div>
                      </div>
                    </div>                                       
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

          
        
</body>
 
</html>

<?php 
if (isset($_POST['asi'])) { 


    include_once('../conexion.php');
    $cod=$_POST['ide'];
    $repa=$_POST['repa'];
    $cant=$_POST['cant'];
    $can=$_POST['can'];

if($cant<=$can and $cant>0){




echo "$cod";
     $conecta=conectar();
    $strsql = "CALL alta_insrepa('$cod','$repa','$cant')";
    $registros=mysqli_query($conecta,$strsql);

if(!$registros)
{
  echo("Error description: " . mysqli_error($conecta));

exit();
}

 echo '<script>
        Push.create("Operacion Realizada",{
            body: "Asegurate de no duplicar insumos",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';

}else{

    echo '<script>
        Push.create("ERROR",{
            body: "La cantidad a solicitar es mayor a la existente",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';

}

}
if (isset($_POST['elim'])) { 


    include_once('../conexion.php');
    
    $idasi=$_POST['idasi'];
     $conecta=conectar();
    $strsql = "CALL baja_insrepa('$idasi')";
    $registros=mysqli_query($conecta,$strsql);

if(!$registros)
{

  echo '<script>
        Push.create("ERROR",{
            body: "Asegurate de no duplicar insumos",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';


exit();
}

 echo '<script>
        Push.create("Operacion De Borrado Realizada",{
            body: "Asegurate de no duplicar insumos",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';


}
if (isset($_POST['edi'])) { 


    include_once('../conexion.php');
    $cod=$_POST['ide'];
    $repa=$_POST['repa'];    
    $idasi=$_POST['idasi'];
    $cant=$_POST['cant'];
    
    $conecta=conectar();
    $strsql = "CALL modi_insrepa('$cod','$repa','$cant','$idasi')";
    $registros=mysqli_query($conecta,$strsql);

if(!$registros)
{
    
    $er=''.mysqli_error($conecta).'';
  echo '<script>
        Push.create("ERROR",{
            body: ".$er.",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';

exit();
}

 echo '<script>
        Push.create("Edicion Realizada",{
            body: "Comprueba los cambios",
            icon: "img/logo.png",
            timeout: 4000,
            onClick: function () {
                window.location="https://nickersoft.github.io/push.js/";
                this.close();
            }
        });
    </script>';


}
?>