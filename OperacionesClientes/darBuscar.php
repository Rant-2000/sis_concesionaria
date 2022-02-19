<?php 
include('header.php');

if(isset($_POST['act'])){
	
include ("../conexion.php");
$conecta=conectar();
$cod=$_POST['cod'];
$sql="call busrfc_cliente('$cod');";
$registros=mysqli_query($conecta,$sql);

$consultador=mysqli_fetch_array($registros)
  ?>
        
         <div id='content'>
        <div class='container_12 bot-1'>
          <div class='grid_12'>
            <h2 class='indent-2'>Busqueda De Auto</h2>
          </div>
          <div class='grid_5'>

            <center></center>
            <form id='form' method='POST'>
              
              
              <fieldset>



      <label class='name'> <span class='title'>Nombre</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Nombre'] ) ? $consultador['Nombre'] : '' ); ?>">
                   </label>

      <label class='name'> <span class='title'>Apellidos</span>
                  <input type='text' name='nom'value="<?php echo ( isset ( $consultador['Apellidos'] ) ? $consultador['Apellidos'] : '' ); ?>">
                 
                 <label class='name'> <span class='title'>Telefono</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Telefono'] ) ? $consultador['Telefono'] : '' ); ?>">
                 


      <label class='name'> <span class='title'>Direccion</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Direccion'] ) ? $consultador['Direccion'] : '' ); ?>">
                 
<label class='name'> <span class='title'>RFC</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['RFC'] ) ? $consultador['RFC'] : '' ); ?>">
                 
                 

        

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

?>