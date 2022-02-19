<?php include("header.php");?>
<div id="content">
  <div class="container_12 bot-1">
    <div class="grid_12">
      <h2 class="indent-2">Consulta Ventas</h2>
    </div>
    <div class="grid_5">

      <center></center>
      <form id="form" action="reporte_general_ventas.php" method="POST">
        
        
          
        <fieldset>
         

            <label class="text"> <span class="title">Consulta General de Ventas*</span>
            </span> </label>
            
            
          <div class="clear"></div>
          
          <?php include('darconsultaven.php');


          ?>

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