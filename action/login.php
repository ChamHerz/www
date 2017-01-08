<?php
	if (isset ($_POST['tbLoginNick']) && $_POST['tbLoginNick'] != ''){
		require_once (RAIZ_APLICACION.'/php/bd-functions.php');
		$Post_Nick = $_POST['tbLoginNick'];
		$Post_Pass = $_POST['tbPass'];
		$Probar = LoginUser($Post_Nick,$Post_Pass);
		if ($Probar==true) {
			
			$DatosUsuario = RetornarUser($Post_Nick);
			
			$_SESSION['login'] = 1;
			
			$_SESSION['user'] = new Usuario($DatosUsuario["Id_user"],$DatosUsuario["Nick"],$DatosUsuario["Avatar"]);

			header("Location: index.php");
		}
		else {
			echo "Error Logue";
		}
	}
	else{
		echo "Intenta un backDoor";	
	}
?>