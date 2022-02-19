<?php 
include('header.php');

if(isset($_GET['act'])){
  
include ("../conexion.php");
$conecta=conectar();
$idv=$_GET['idv'];
$sql="call bus_ventaID('$idv');";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
?>  
          
           <div id='content'>
          <div class='container_12 bot-1'>
            <div class='grid_12'>
              <h2 class='indent-2'>Modificacion De Venta</h2>
            </div>
            <div class='grid_5'>

              <center></center>
              <form id='form' action='darUpdate.php' method='POST'>
                
                
                <fieldset>

        <label class="text"> <span class="title">ID Venta*</span>
                    <input type="text" id="idv" name="idv" value="<?php echo ( isset ( $consultador['ID'] )?$consultador['ID'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" readonly='readonly' >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

                   <label class="text"> <span class="title">Usuario*</span>
                    <input type="text" id="us" name="us" value="<?php echo ( isset ( $consultador['Usuario'] ) ? $consultador['Usuario'] : '' ); ?>">
                    <br class="clear">
                    </label>
                  
                   <label class="text"> <span class="title">Numero de Motor*</span>
                    <input type="text" id="nm" name="nm" value="<?php echo ( isset ( $consultador['Numero de Motor'] ) ? $consultador['Numero de Motor'] : '' ); ?>">
                    <br class="clear">
                     </label>
                  
                   <label class="text"> <span class="title">ID Cliente*</span>
                    <input type="text" id="idc" name="idc" value="<?php echo ( isset ( $consultador['ID Cliente'] ) ? $consultador['ID Cliente'] : '' ); ?>
        "pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">Fecha*</span>
                    <input type="text" id="fv" name="fv" value="<?php echo ( isset ( $consultador['Fecha'] ) ? $consultador['Fecha'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
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