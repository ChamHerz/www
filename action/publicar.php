<?php
header('Content-Type: text/html; charset=utf-8');
$BB_IdUser = $_POST['iduser'];
$BB_Titulo = $_POST['titulo'];
$BB_Categoria = $_POST['categoria'];
$BB_Code = $_POST['codigo'];
$BB_Tags = $_POST['tags'];
require_once ('../php/bd-functions.php');
PostAlta($BB_IdUser,$BB_Titulo,$BB_Categoria,$BB_Code,$BB_Tags);
echo "OK";
//require_once ('/../entidades/StringFunctions.php');
//$html_convertido = new StringFunctions();
//echo nl2br($BB_Code);

//echo nl2br($html_convertido->bbcode2html2($BB_Code));
?>