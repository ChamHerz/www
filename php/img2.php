<?php
header("Content-type: image/png");
$fondo = "fondo.png";
$imagen = imagecreatefrompng($fondo);

$caracteres = "1234567890abcdefghijklmnopqrstuvwxyz";
$digitos="5";
$aleatorio="";

for ($i=0;$i<$digitos;$i++) {
	$aleatorio .= $caracteres{rand(0,35)};
}

//Variables de la imagen aleatoria:
$colorcito = rand(1,3);
$rojo = 0; $verde = 0; $azul = 0;
switch ($colorcito) {
	case 1: $rojo = 255;
			break;
	case 2: $verde = 255;
			break;
	case 3: $azul = 255;
			break;
}
$x = rand(11,13);
$y = rand(30,32);
$angulo = "0";
$letra = "Robbie.ttf";
$color = imagecolorallocate($imagen,$rojo,$verde,$azul);
$size = rand (21,23);
$nombre_img="$aleatorio.png";

imagettftext($imagen,$size,$angulo,$x,$y,$color,$letra,$aleatorio);

imagepng($imagen);
?>