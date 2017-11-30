<?php

define("USUARIO", "matias");
define("CONTRASENA", "123456");

$mensaje = '';
$style = 'display:none;';
$login_display = 'display:block;';

session_start();

if(isset($_SESSION['login']) && ($_SESSION['login'] == 1 )){

	$login_display = 'display:none;';
	echo "Ya estas adentro " . $_SESSION['name'];
	echo "<a href='cerrar_sesion.php'>Cerrar Sesion</a>";

}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(($_POST['name'] == USUARIO) && ($_POST['password'] == CONTRASENA)){

		session_start();
		$_SESSION['name'] = USUARIO;
		$_SESSION['login'] = 1;
		setcookie("SESION_PRUEBA", $_SESSION['name'], time()+60*60, "/", "localhost", false, true);
		
		header("Location: welcome.php");
		exit;
	}else{

		$mensaje = "Usuario o contraseña invalido";
		$style = 'display:block;';

	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="POST">

		<div class="<?=$style;?>">
        	<?php echo $mensaje; ?>
   		</div>
		<div class="<?=$login_display?>">
			
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="name" required="">

			<label><b>Password</b></label>
			<input type="password" name="password" placeholder="Enter Password" required="">

			<button type="submit" name="login">Login</button>
		</div>


</form>

</body>
</html>