 <?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../home.php');
        //echo'no hay rol';
    }else{
        if($_SESSION['rol'] == 1){
            echo "Entras OK";
            include("header.php");
        }else{
          header('location: ../home.php');
          
        }
    }


?>
<div id="content">
  <div class="container_12 bot-1">
    <div class="grid_12">
      <h2 class="indent-2">Eliminar Cliente</h2>
    </div>
    <div class="grid_5">

      <center></center>
      <form id="form" action="darBaja.php" method="POST">
        <div class="text-info">Llena correctamente los campos, los campos * son obligatorios</div>
        
          
        <fieldset>
         

            <label class="text"> <span class="title">RFC Cliente*</span>
            <input type="tel" name="cod" value="">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            
            
          <div class="clear"></div>
          
          <a data-type="submit" class="btn"> <input type='submit' name='insertar' value="Eliminar"></a>
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