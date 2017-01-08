<?php
	if (isset ($_POST['tbNick']) && $_POST['tbNick'] != ''){
		if($_SESSION["verificacion"]==$_POST["tbCapcha"]) {
			$_SESSION["login"] = 0;
			$Post_Nick = $_POST['tbNick'];
			$Post_Pais = $_POST['selectPais'];
			$Post_Sexo = $_POST['selectSexo'];
			$Post_Avatar = $_POST['tbAvatar'];
			$Post_Pass = $_POST['tbPass1'];
			$Post_Email = $_POST['tbEmail'];
			echo $Post_Nick;
			echo $Post_Pais;
			echo $Post_Sexo;
			echo $Post_Avatar;
			require_once ('/php/bd-functions.php');
			$probar = DarAltaUsuario($Post_Nick,$Post_Pais,$Post_Sexo,$Post_Avatar,$Post_Pass,$Post_Email);
			echo "El capcha fue correcto y se agrego el usuario";}
		else {
			echo "El capcha fue correcto y se agrego el usuario";}}
	else{
		echo "Intenta un backDoor";	
	}
?>