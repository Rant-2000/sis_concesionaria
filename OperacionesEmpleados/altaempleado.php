<?php include("header.php");?>
<div id="content">
  <div class="container_12 bot-1">
    <div class="grid_12">
      <h2 class="indent-2">Nuevo Empleado</h2>
    </div>
    <div class="grid_5">

      <center></center>
      <form id="form" action="darAlta.php" method="POST">
        <div class="text-info">Llena correctamente los campos, los campos * son obligatorios</div>
        <div class="success">Contact form submitted!<br>
          <strong>We will be in touch soon.</strong> </div>
        <fieldset>
          <label class="name"> <span class="title">Nombre*</span>
            <input type="text" name="nom" pattern="^[a-zA-Z1-9].*" value=" ">
            <br class="clear">
            <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
          <label class="email"> <span class="title">Apellidos*</span>
            <input type="text" name="ape" pattern="^[a-zA-Z1-9].*" value=" ">
            <br class="clear">
            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
          <label class="phone"> <span class="title">Telefono*</span>
            <input type="text" name="tel" pattern="^[a-zA-Z1-9].*" value=" ">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
           <label class="phone"> <span class="title">Direccion*</span>
            <input type="text" name="dir" pattern="^[a-zA-Z1-9].*" value=" ">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
             
             <label class="phone"> <span class="title">RFC*</span>
            <input type="text" name="rfc" pattern="^[a-zA-Z1-9].*" >
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>

            <label class="text"> <span class="title">Usuario*</span>
            <input type="text" name="usuario" pattern="^[a-zA-Z1-9].*" >
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="phone"> <span class="title">Clave (4 Digitos)*</span>
            <input type="password" name="clave" pattern="^[a-zA-Z1-9].*" >
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            
            
            
            <label for="cargo"><span class="title">Cargo*</span>

              <select name="cargo" id="cargo">
  <option value="1">Gerente</option>
  <option value="2">Administrador</option>
  <option value="3">Vendedor</option>
  <option value="4">Mecanico</option>
  <option value="5">Auxiliar</option>
</select>


            </label>


           
          <div class="clear"></div>
          
          <a data-type="submit" class="btn"> <input type='submit' name='insertar' value="Insertar"></a>
          <br>
          
          <a data-type="submit" class="btn"> <input type='reset' name='cancelar' value="Cancelar"></a>

        </fieldset>
      </form>
    </div>
    
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_8"> <span>BiZZ &copy; 2045 | Privacy Policy | Design by <a href="http://www.templatemonster.com/">TemplateMonster.com</a></span> </div>
    <div class="grid_4">
      <ul class="soc-icon">
        <li><a href="#"><img src="images/icon-3.png" alt=""></a></li>
        <li><a href="#"><img src="images/icon-2.png" alt=""></a></li>
        <li><a href="#"><img src="images/icon-1.png" alt=""></a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>