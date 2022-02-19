
<?php
    //include_once 'conexion.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: home.php');
            break;

            case 2:
            header('location: home.php');
            break;
			case 3:
            header('location: home.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

		include ("conexion.php");
		$conecta=conectar();

		$sql="SELECT * from empleado where usuario='" .$_POST['username'] . "'";
		$registros=mysqli_query($conecta,$sql);
		if ($consultador=mysqli_fetch_array($registros)) {
			if($consultador['clave'] == $password){

			
			$_SESSION['rol'] = $consultador['cargo'];
			
			switch($_SESSION['rol']){
            case 1:
                header('location: home.php');
            break;

            case 2:
            header('location: home.php');
            break;
			case 3:
            header('location: home.php');
            break;

            default:
        	}
			
			}else{
			header("Location: index.php");
			exit();
			} 
		}else{


        	echo "Nombre de usuario o contraseña incorrecto";
        
		}
		if(!$registros)
		{
		echo "ERROR ";
		exit();
		}



        

    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
	

	<title>Login V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="push.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/fondopared.jfif');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="#" method="POST">
					<div class="login100-form-avatar">
						<img src="images/avatar.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Concesionaria Malosos
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button type='submit' class="login100-form-btn">
							Login
						</button>
					</div>

					

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>