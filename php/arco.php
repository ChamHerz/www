<?php

// crear una imagen de 200*200
$img = imagecreatetruecolor(200, 200);
imagesavealpha($img, true);
$transparent = imagecolorallocatealpha($img, 0, 0, 0, 127);
 imagefill($img, 0, 0, $transparent);
 
// asignar algunos colores
$blanco = imagecolorallocate($img, 255, 255, 255);
$rojo   = imagecolorallocate($img, 255,   0,   0);
$verde = imagecolorallocate($img,   0, 255,   0);
$azul  = imagecolorallocate($img,   0,   0, 255);

// dibujar la cabeza
imagearc($img, 100, 100, 200, 200,  0, 360, $blanco);
// la boca
imagearc($img, 100, 100, 150, 150, 25, 155, $rojo);
// el ojo izquierdo y después el ojo derecho
imagearc($img,  60,  75,  50,  50,  0, 360, $verde);
imagearc($img, 140,  75,  50,  50,  0, 360, $azul);

// imprimir la imagen en el navegador
header("Content-type: image/png");
imagepng($img);

// liberar memoria
imagedestroy($img);

?>