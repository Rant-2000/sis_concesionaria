<?php 
include('../header.php');

if(isset($_GET['act'])){
  
include ("../conexion.php");
$conecta=conectar();
$usuario=$_GET['usuario'];
$sql="call bus_empleado('$usuario');";
$registros=mysqli_query($conecta,$sql);

while($consultador=mysqli_fetch_array($registros)){
?>  
          
           <div id='content'>
          <div class='container_12 bot-1'>
            <div class='grid_12'>
              <h2 class='indent-2'>Modificacion De Emplead</h2>
            </div>
            <div class='grid_5'>

              <center></center>
              <form id='form' action='darUpdate.php' method='POST'>
                <div class='text-info'>Llena correctamente los campos, los campos * son obligatorios</div>
                
                <fieldset>

        <label class="text"> <span class="title">Usuario*</span>
                    <input type="tel" id="usuario" name="usuario" value="<?php echo ( isset ( $consultador['Usuario'] ) ? $consultador['Usuario'] : '' ); ?>
        "pattern="^[a-zA-Z1-9].*" >
                    <br class="clear">
                    <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                    
                    
                 

        <label class='name'> <span class='title'>Id</span>
                    <input type='text' id="ide" name="ide" readonly='readonly' value="<?php echo ( isset ( $consultador['id'] ) ? $consultador['id'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

        <label class='name'> <span class='title'>Nombre*</span>
                    <input type='text' name="nom" id="nom" value="<?php echo ( isset ( $consultador['Nombre'] ) ? $consultador['Nombre'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

        <label class='name'> <span class='title'>Apellidos*</span>
                    <input type='text' name="ape" id="ape"  value="<?php echo ( isset ( $consultador['Apellidos'] ) ? $consultador['Apellidos'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>
        <label class='name'> <span class='title'>Telefono*</span>
                    <input type='text' name="tel" id="tel" value="<?php echo ( isset ( $consultador['Telefono'] ) ? $consultador['Telefono'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>


        <label class='name'> <span class='title'>Direccion*</span>
                    <input type='text' name='dir' id='dir' value="<?php echo ( isset ( $consultador['Direccion'] ) ? $consultador['Direccion'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

        <label class='name'> <span class='title'>RFC*</span>
                    <input type='text' name='rfc' id="rfc" value="<?php echo ( isset ( $consultador['RFC'] ) ? $consultador['RFC'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

        <label class='name'> <span class='title'>Contraseña*</span>
                    <input type='text' name='con' id="con" value="<?php echo ( isset ( $consultador['Clave'] ) ? $consultador['Clave'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>


                    <label class='name'> <span class='title'>Cargo</span>
                    <input type='text' name='carid' id="carid" value="<?php echo ( isset ( $consultador['carid'] ) ? $consultador['carid'] : '' ); ?>">
                    <br class='clear'>
                    <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>
           <div class="clear"></div>
                  
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