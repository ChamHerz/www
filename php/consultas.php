<?php
	if (isset ($_POST['tag']) && $_POST['tag'] != '')
		{
		require_once ('bd-functions.php');
		$tag  = $_POST['tag'];
		switch ($tag) {
			case "verNick":
				$nick = $_POST['usuario'];
				$response = array 
					(
					"tag" => "eroor",
					"resultado" => "",
					"colorfondo" => "",
					"imagen" => ""
					);
				$conecto = existeUsuario($nick);
				if ($conecto)
					{
					$response["resultado"] = "Nick en uso";
					}
				else
					{
					$response["resultado"] = "Nick correcto";
					$response["colorfondo"] = "#81E573";
					$response["imagen"] = "url(imagenes/registro-bien.png)";
					}
				echo json_encode($response);
				break;
			case "verEmail":
				$email = $_POST['email'];
				$respuesta = array 
					(
					"tag" => "eroor",
					"resultado" => "funca",
					"colorfondo" => "",
					"imagen" => ""
					); //Ingreso un Tag trucho
				$conecto = existeEmail($email);
				if ($conecto)
					{
					$respuesta["resultado"] = "Email en uso";
					}
				else
					{
					$respuesta["resultado"] = "Email correcto";
					$respuesta["colorfondo"] = "#81E573";
					$respuesta["imagen"] = "url(imagenes/registro-bien.png)";
					}
				echo json_encode($respuesta);
				break;
			case "verCapcha":
				session_start();
				$capcha = $_POST['capcha'];
				$trueCapcha = $_SESSION["verificacion"];
				$mensaje = array (
					"resultado" => "error",
					"valorCapcha" => $trueCapcha);
				if ($capcha == $trueCapcha) {
					$mensaje["resultado"] ="correcto";}
				echo json_encode($mensaje);
				break;
			default:
				echo "Tag trucho";
				break;
			}
		}
	else
		{
		echo "Acceso denegado"; //Si no hemos puesto ningún tag
		}
?>
