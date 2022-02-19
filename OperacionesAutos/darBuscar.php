<?php 
include('header.php');

if(isset($_POST['act'])){
	
include ("../conexion.php");
$conecta=conectar();
$cod=$_POST['cod'];
$sql="call busnm_carro('$cod');";
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

 <label class='name'> <span class='title'>Numero de Motor</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Numero de Motor'] ) ? $consultador['Numero de Motor'] : '' ); ?>">
                   </label>

 <label class='name'> <span class='title'>Placa</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Placa'] ) ? $consultador['Placa'] : '' ); ?>">
                   </label>

      <label class='name'> <span class='title'>Marca</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Marca'] ) ? $consultador['Marca'] : '' ); ?>">
                   </label>

      <label class='name'> <span class='title'>Modelo</span>
                  <input type='text' name='nom'value="<?php echo ( isset ( $consultador['Modelo'] ) ? $consultador['Modelo'] : '' ); ?>">
                 
                 <label class='name'> <span class='title'>Color</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Color'] ) ? $consultador['Color'] : '' ); ?>">
                 


      <label class='name'> <span class='title'>P.Compra</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Compra'] ) ? $consultador['Compra'] : '' ); ?>">
                 
<label class='name'> <span class='title'>P.Reparacion</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Reparacion'] ) ? $consultador['Reparacion'] : '' ); ?>">
                 
                 <label class='name'> <span class='title'>P.Final</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Final'] ) ? $consultador['Final'] : '' ); ?>">
                 
                 <label class='name'> <span class='title'>Estado</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Estado'] ) ? $consultador['Estado'] : '' ); ?>">
                 
                 <label class='name'> <span class='title'>F.Compra</span>
                  <input type='text' name='nom' value="<?php echo ( isset ( $consultador['Fecha'] ) ? $consultador['Fecha'] : '' ); ?>">
        

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