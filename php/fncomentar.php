<?php
//	require_once ('/entidades/usuario.php');
//	session_start();
//	$usuario_activo = $_SESSION['user'];
	 
	if (isset ($_POST['tag']) && $_POST['tag'] != '')
		{
		$tag  = $_POST['tag'];
		switch ($tag) {
			case "altaComent":
				$idPost = $_POST['idpost'];
				$idUser = $_POST['iduser'];
				$comentario = $_POST['post_comentario'];
				$response = array
					(
					"resultado" => "error",
					"mensaje" => ""
					);
				require_once ('bd-functions.php');
				$result = RealizarComentario($idPost,$idUser,$comentario);
				if($result)
					{
					$response["resultado"] = "ok";
					}
				echo json_encode($response);
				break;
			case "replyComent":
				$idcoment = $_POST['idcoment'];
				$idUser = $_POST['iduser'];
				$comentario = $_POST['post_comentario'];
				$response = array
					(
					"resultado" => "error",
					"mensaje" => ""
					);
				require_once ('bd-functions.php');
				$result = ReplyComentario($idcoment,$idUser,$comentario);
				if($result)
					{
					$response["resultado"] = "ok";
					}
				echo json_encode($response);
				break;
			case "prueba":
				$vinoDato = $_POST['datoVan'];
				require_once ('bd-functions.php');
				$ListaComentarios = RetornarComent(2);
				$arr = array();
				//$arr[] = array('manolo' => 'ok',
				//		);
				while($fila = $ListaComentarios->fetch_array(MYSQLI_ASSOC)){
					$arr[] = array('manolo' => $fila['Nick'],
						);
				}
				//$Lista = $ListaComentarios->fetch_array(MYSQLI_ASSOC);
				echo json_encode($arr);
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