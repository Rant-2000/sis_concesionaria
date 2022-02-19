<?php 
include('../header.php');
if (isset($_GET['action'])) { 

    include_once('../conexion.php');
$conecta=conectar();
    $strsql = "call  bus_empleado ('".$_GET['usuario']."');";
    $rs = mysqli_query($conecta,$strsql);
   GLOBAL $row;
   $row = mysqli_fetch_assoc($rs);
    $total_rows = mysqli_num_rows($rs);    
    
} 

?>


  
   <div id='content'>
  <div class='container_12 bot-1'>
    <div class='grid_12'>
      <h2 class='indent-2'>Busqueda Empleado</h2>
    </div>
    <div class='grid_5'>

      <center></center>
      <form id='form'  >
        <div class='text-info'>Llena correctamente los campos, los campos * son obligatorios</div>
        <div class='success'>Contact form submitted!<br>
          <strong>We will be in touch soon.</strong> </div>
        <fieldset>
 <label class="text"> <span class="title">Usuario*</span>
            <input type="tel" id="usuario" name="usuario" value="<?php echo ( isset ( $row['Usuario'] ) ? $row['Usuario'] : '' ); ?>
"pattern="^[a-zA-Z1-9].*" >
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            
            
          <div class="clear"></div>
          
          <a data-type="submit" class="btn"> <input type='submit' name='action' id="action" value="Buscar"></a>



<label class='name'> <span class='title'>Nombre*</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['Nombre'] ) ? $row['Nombre'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

<label class='name'> <span class='title'>Apellidos*</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['Apellidos'] ) ? $row['Apellidos'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>
<label class='name'> <span class='title'>Telefono*</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['Telefono'] ) ? $row['Telefono'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>


<label class='name'> <span class='title'>Direccion*</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['Direccion'] ) ? $row['Direccion'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

<label class='name'> <span class='title'>RFC*</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['RFC'] ) ? $row['RFC'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

<label class='name'> <span class='title'>Usuario*</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['Usuario'] ) ? $row['Usuario'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

<label class='name'> <span class='title'>Contraseña*</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['Clave'] ) ? $row['Clave'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>


            <label class='name'> <span class='title'>Cargo</span>
            <input type='text' name='nom' value="<?php echo ( isset ( $row['carid'] ) ? $row['carid'] : '' ); ?>">
            <br class='clear'>
            <span class='error error-empty'>*This is not a valid name.</span><span class='empty error-empty'>*This field is required.</span> </label>

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
