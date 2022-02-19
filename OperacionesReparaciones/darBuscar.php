<?php 
include('header.php');

if(isset($_GET['act'])){
  
include ("../conexion.php");
$conecta=conectar();
$id=$_GET['nm'];
$idr=$_GET['idr'];
$sql="call bus_repa('$idr','$id');";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
?>  
          
           <div id='content'>
          <div class='container_12 bot-1'>
            <div class='grid_12'>
              <h2 class='indent-2'>Busqueda De Reparacion</h2>
            </div>
            <div class='grid_5'>

              <center></center>
              <form id='form'  method='POST'>
                
                
                <fieldset>
<label class="text"> <span class="title">Numero de Motor*</span>
                    <input type="text" id="nm" name="Numero de Motor" value="<?php echo ( isset ( $consultador['Numero de Motor'] )?$consultador['Numero de Motor'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly' >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>


        <label class="text"> <span class="title">ID*</span>
                    <input type="text" id="id" name="id" value="<?php echo ( isset ( $consultador['ID'] )?$consultador['ID'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly' >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

                   <label class="text"> <span class="title">Observaciones*</span>
                    <input type="text" id="obs" name="obs" value="<?php echo ( isset ( $consultador['Observaciones'] ) ? $consultador['Observaciones'] : '' ); ?>">
                    <br class="clear">
                    </label>

                    <label class="text"> <span class="title">Estado*</span>
                    <input type="text" id="est" name="est" value="<?php echo ( isset ( $consultador['Estado'] ) ? $consultador['Estado'] : '' ); ?>">
                    <br class="clear">
                    </label>
                  
                   <label class="text"> <span class="title">Fecha de Ingreso*</span>
                    <input type="text" id="fein" name="fein" value="<?php echo ( isset ( $consultador['Fecha de Ingreso'] ) ? $consultador['Fecha de Ingreso'] : '' ); ?>">
                    <br class="clear">
                     </label>
                  
                   <label class="text"> <span class="title">Total*</span>
                    <input type="text" id="to" name="to" value="<?php echo ( isset ( $consultador['Total'] ) ? $consultador['Total'] : '' ); ?>
        "pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">Nombre Mecanico*</span>
                    <input type="text" id="nm" name="nm" value="<?php echo ( isset ( $consultador['Nombre M.'] ) ? $consultador['Nombre M.'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">Apellidos Mecanico*</span>
                    <input type="text" id="am" name="am" value="<?php echo ( isset ( $consultador['Apellido M.'] ) ? $consultador['Apellido M.'] : '' ); ?>" readonly='readonly'>
                    <br class="clear">
                    </label>
                  
                   <label class="text"> <span class="title">Placa*</span>
                    <input type="text" id="placa" name="placa" value="<?php echo ( isset ( $consultador['Placa'] ) ? $consultador['Placa'] : '' ); ?>" readonly='readonly'>
                    <br class="clear">
                     </label>
                     <label class="text"> <span class="title">Marca*</span>
                    <input type="text" id="marca" name="Marca" value="<?php echo ( isset ( $consultador['Marca'] ) ? $consultador['Marca'] : '' ); ?>" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                     <label class="text"> <span class="title">Modelo*</span>
                    <input type="text" id="mod" name="mod" value="<?php echo ( isset ( $consultador['Modelo'] ) ? $consultador['Modelo'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                   
                     <label class="text"> <span class="title">Color*</span>
                    <input type="text" id="colo" name="colo" value="<?php echo ( isset ( $consultador['Color'] ) ? $consultador['Color'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>


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