<?php
function ObtenerUrlTopic($idPost,$Categorianame) {
	switch ($Categorianame) {
	case "Java":
		$Cat = "menuJava";
		break;
	case "Android":
		$Cat = "menuAndroid";
		break;
	case "Html":
		$Cat = "menuHtml";
		break;
	}
	$url = "/index.php?action=".$Cat."&topic=".$idPost;
	return $url;
}
?>