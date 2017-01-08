<?php
header('Content-Type: text/html; charset=utf-8');
$BB_Code = $_POST['codigo'];
require_once ('/../entidades/StringFunctions.php');
$html_convertido = new StringFunctions();
//echo nl2br($BB_Code);

echo nl2br($html_convertido->bbcode2html2($BB_Code));
?>