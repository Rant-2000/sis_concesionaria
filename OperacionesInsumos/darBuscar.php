<?php 
include('header.php');

if(isset($_POST['act'])){
  
include ("../conexion.php");
$conecta=conectar();
$cod=$_POST['cod'];
$sql="call buscod_ins('$cod');";
$registros=mysqli_query($conecta,$sql);

$consultador=mysqli_fetch_array($registros)
  ?>
        
         <div id='content'>
        <div class='container_12 bot-1'>
          <div class='grid_12'>
            <h2 class='indent-2'>Busqueda De Insumo</h2>
          </div>
          <div class='grid_5'>

            <center></center>
            <form id='form' method='POST'>
              
              
              <fieldset>

                    <label class='name'> <span class='title'>ID</span>
                  <input type='text' name='id' value="<?php echo ( isset ( $consultador['id'] ) ? $consultador['id'] : '' ); ?>" readonly='readonly'>
                   </label>

                    <label class='name'> <span class='title'>Producto</span>
                  <input type='text' name='Producto' value="<?php echo ( isset ( $consultador['Producto'] ) ? $consultador['Producto'] : '' ); ?>">
                   </label>

                    <label class='name'> <span class='title'>Descripcion</span>
                  <input type='text' name='des' value="<?php echo ( isset ( $consultador['Descripcion'] ) ? $consultador['Descripcion'] : '' ); ?>">
                   </label>

                    <label class='name'> <span class='title'>Precio</span>
                  <input type='text' name='pre' value="<?php echo ( isset ( $consultador['Precio'] ) ? $consultador['Precio'] : '' ); ?>">
                   </label>
                    <label class='name'> <span class='title'>Cantidad</span>
                  <input type='text' name='can' value="<?php echo ( isset ( $consultador['Cantidad'] ) ? $consultador['Cantidad'] : '' ); ?>">
                   </label>

                    <label class='name'> <span class='title'>Codigo</span>
                  <input type='text' name='cod' value="<?php echo ( isset ( $consultador['Codigo'] ) ? $consultador['Codigo'] : '' ); ?>">
                   </label>

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