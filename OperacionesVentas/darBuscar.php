<?php 
include('header.php');

if(isset($_POST['act'])){
  
include ("../conexion.php");
$conecta=conectar();
$nm=$_POST['nm'];
$idc=$_POST['idc'];
$usu=$_POST['usu'];

$sql="call bus_venta('$idc','$usu','$nm');";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
?>  
          
           <div id='content'>
          <div class='container_12 bot-1'>
            <div class='grid_12'>
              <h2 class='indent-2'>Modificacion De Reparacion</h2>
            </div>
            <div class='grid_5'>

              <center></center>
              <form id='form' action='darUpdate.php' method='POST'>
                
                
                <fieldset>

        <label class="text"> <span class="title">Comprador*</span>
                    <input type="text" id="idc" name="idc" value="<?php echo ( isset ( $consultador['Comprador'] )?$consultador['Comprador'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly' >
                    <input type="text" id="cap" name="cap" value="<?php echo ( isset ( $consultador['Apellidos'] )?$consultador['Apellidos'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly' >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                   <label class="text"> <span class="title">RFC*</span>
                    <input type="text" id="rfc" name="rfc" value="<?php echo ( isset ( $consultador['RFC'] ) ? $consultador['RFC'] : '' ); ?>">
                    <br class="clear">
                    </label>
                  
                   <label class="text"> <span class="title">Fecha de Venta*</span>
                    <input type="text" id="fein" name="fein" value="<?php echo ( isset ( $consultador['Fecha'] ) ? $consultador['Fecha'] : '' ); ?>">
                    <br class="clear">
                     </label>
                  
                   <label class="text"> <span class="title">Marca*</span>
                    <input type="text" id="to" name="to" value="<?php echo ( isset ( $consultador['Marca'] ) ? $consultador['Marca'] : '' ); ?>
        "pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">Modelo*</span>
                    <input type="text" id="nm" name="nm" value="<?php echo ( isset ( $consultador['Modelo'] ) ? $consultador['Modelo'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">Numero de Motor*</span>
                    <input type="text" id="mod" name="mod" value="<?php echo ( isset ( $consultador['Numero de Motor'] ) ? $consultador['Numero de Motor'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">Precio de Venta*</span>
                    <input type="text" id="am" name="am" value="<?php echo ( isset ( $consultador['Costo'] ) ? $consultador['Costo'] : '' ); ?>" readonly='readonly'>
                    <br class="clear">
                    </label>
                  
                   <label class="text"> <span class="title">Vendedor*</span>
                    <input type="text" id="placa" name="placa" value="<?php echo ( isset ( $consultador['Representante'] ) ? $consultador['Representante'] : '' ); ?>" readonly='readonly'>
                    <br class="clear">
                     </label>
                     <label class="text"> <span class="title">Usuario*</span>
                    <input type="text" id="Usuario" name="Usuario" value="<?php echo ( isset ( $consultador['Usuario'] ) ? $consultador['Usuario'] : '' ); ?>" readonly='readonly'>
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