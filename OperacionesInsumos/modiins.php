<?php 
include('header.php');

if(isset($_GET['act'])){
  
include ("../conexion.php");
$conecta=conectar();
$usuario=$_GET['cod'];
$sql="call buscod_ins('$usuario');";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
?>  
          
           <div id='content'>
          <div class='container_12 bot-1'>
            <div class='grid_12'>
              <h2 class='indent-2'>Modificacion De Insumo</h2>
            </div>
            <div class='grid_5'>

              <center></center>
              <form id='form' action='darUpdate.php' method='POST'>
                
                
                <fieldset>

        <label class="text"> <span class="title">ID*</span>
                    <input type="tel" id="id" name="id" value="<?php echo ( isset ( $consultador['id'] ) ? $consultador['id'] : '');?>"pattern="^[a-zA-Z1-9].*" readonly='readonly'>
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

                   <label class="text"> <span class="title">Producto*</span>
                    <input type="tel" id="pro" name="pro" value="<?php echo ( isset ( $consultador['Producto'] ) ? $consultador['Producto'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                  
                   <label class="text"> <span class="title">Descripcion*</span>
                    <input type="tel" id="des" name="des" value="<?php echo ( isset ( $consultador['Descripcion'] ) ? $consultador['Descripcion'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                  
                   <label class="text"> <span class="title">Precio*</span>
                    <input type="tel" id="pre" name="pre" value="<?php echo ( isset ( $consultador['Precio'] ) ? $consultador['Precio'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    <label class="text"> <span class="title">Cantidad*</span>
                    <input type="tel" id="can" name="can" value="<?php echo ( isset ( $consultador['Cantidad'] ) ? $consultador['Cantidad'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    <label class="text"> <span class="title">Codigo*</span>
                    <input type="tel" id="cod" name="cod" value="<?php echo ( isset ( $consultador['Codigo'] ) ? $consultador['Codigo'] : '' ); ?>"pattern="^[a-zA-Z1-9].*" >
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