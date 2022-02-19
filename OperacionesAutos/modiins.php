<?php 
include('header.php');

if(isset($_GET['act'])){
  
include ("../conexion.php");
$conecta=conectar();
$id=$_GET['nm'];
$sql="call busnm_carro('$id');";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
?>  
          
           <div id='content'>
          <div class='container_12 bot-1'>
            <div class='grid_12'>
              <h2 class='indent-2'>Modificacion De Automovil</h2>
            </div>
            <div class='grid_5'>

              <center></center>
              <form id='form' action='darUpdate.php' method='POST'>
                
                
                <fieldset>
                  <label class="text"> <span class="title">ID*</span>
                    <input type="text" id="id" name="id" value="<?php echo ( isset ( $consultador['id'] )?$consultador['id'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly' >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

        <label class="text"> <span class="title">Numero de Motor*</span>
                    <input type="text" id="nm" name="nm" value="<?php echo ( isset ( $consultador['Numero de Motor'] )?$consultador['Numero de Motor'] : '' ); ?>"pattern="^[a-zA-Z1-9].*"  >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

                   <label class="text"> <span class="title">Placa*</span>
                    <input type="text" id="Placa" name="Placa" value="<?php echo ( isset ( $consultador['Placa'] ) ? $consultador['Placa'] : '' ); ?>">
                    <br class="clear">
                    </label>
                     
                   <label class="text"> <span class="title">Marca*</span>
                    <input type="text" id="marca" name="marca" value="<?php echo ( isset ( $consultador['Marca'] ) ? $consultador['Marca'] : '' ); ?>">
                    <br class="clear">
                    </label>
                  
                   <label class="text"> <span class="title">Modelo*</span>
                    <input type="text" id="modelo" name="modelo" value="<?php echo ( isset ( $consultador['Modelo'] ) ? $consultador['Modelo'] : '' ); ?>">
                    <br class="clear">
                     </label>
                  
                   <label class="text"> <span class="title">Color*</span>
                    <input type="text" id="color" name="color" value="<?php echo ( isset ( $consultador['Color'] ) ? $consultador['Color'] : '' ); ?>
        "pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">P.Compra*</span>
                    <input type="text" id="compra" name="compra" value="<?php echo ( isset ( $consultador['Compra'] ) ? $consultador['Compra'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">P.Reparacion*</span>
                    <input type="text" id="reparacion" name="reparacion" value="<?php echo ( isset ( $consultador['Reparacion'] ) ? $consultador['Reparacion'] : '' ); ?>" >
                    <br class="clear">
                    </label>
                  
                   <label class="text"> <span class="title">P.Final*</span>
                    <input type="text" id="final" name="final" value="<?php echo ( isset ( $consultador['Final'] ) ? $consultador['Final'] : '' ); ?>" >
                    <br class="clear">
                     </label>
                     <label class="text"> <span class="title">Estado*</span>
                    <input type="text" id="estado" name="estado" value="<?php echo ( isset ( $consultador['Estado'] ) ? $consultador['Estado'] : '' ); ?>" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                     <label class="text"> <span class="title">F.Compra*</span>
                    <input type="text" id="fechac" name="fechac" value="<?php echo ( isset ( $consultador['Fecha'] ) ? $consultador['Fecha'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                   
                   

                  <a data-type="submit" class="btn"> <input type='submit' name='action' id="action" value="Modificar"></a>

              </fieldset>
              </form>
            </div>
            
          </div>
        </div>
        <footer>
          <div class='container_12'>
            <div class='grid_8'> <span>BiZZ &copy; 2045 | Privacy Policy | Design by <a href='http://www.templatemonster.com/'>TemplateMonster.com</a></span> </div>
            <div class='grid_4'>
              <ul class='soc-icon'>
                <li><a href='#''><img src='images/icon-3.png' alt=''></a></li>
                <li><a href='#''><img src='images/icon-2.png' alt=''></a></li>
                <li><a href='#''><img src='images/icon-1.png' alt=''></a></li>
              </ul>
            </div>
          </div>
        </footer>
        </body>
        </html>
<?php
}
if(!$registros)
{
echo 'ERROR AL INSERTAR LOS DATOS EN LOS REGISTROS, PROBABLE CLAVE REPETIDA';
exit();
}
}

?>