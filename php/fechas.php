<?php
	function FechaRelativa($fechaTime)
{
	$HoraActual = time() - 14360;
	$fechaAbsoluta = strtotime($fechaTime);
    $dias       = intval(($HoraActual - $fechaAbsoluta) / 86400);
    $segundos   = intval(($HoraActual - $fechaAbsoluta));
 
    if($dias < 0) {
        return -1; //Error
    } elseif ($segundos==0) {
        $fecha = "En este momento";
    } elseif ($segundos > 0 && $segundos < 60) {
        $fecha = "Hace " . $segundos . " segundos";
    } elseif ($segundos >= 60 && $segundos <120 ) {
        $fecha = "Hace un minuto";
    } elseif ($segundos >= 120 && $segundos < 3600 ) {
        $fecha = "Hace " . intval($segundos/60) . " minutos";
    } elseif ($segundos >= 3600 && $segundos < 7200) {
        $fecha = "Hace una hora";
    } elseif ($segundos >= 7200 && $segundos < 86400) {
        $fecha = "Hace " . intval($segundos/3600) . " horas";
    } elseif ($dias==1) {
        $fecha = "Ayer";
    } elseif ($dias >= 2 && $dias <= 6) {
        $fecha =  "Hace " . $dias . " días";
    } elseif ($dias >= 7 && $dias < 14) {
        $fecha= "La semana pasada";
    } elseif ($dias >= 14 && $dias < 30) {
        $fecha =  "Hace " . intval($dias / 7) . " semanas";
	} elseif ($dias >= 30 && $dias < 60) {
        $fecha =  "El mes pasado";
	} elseif ($dias >= 60 && $dias < 365) {
        $fecha =  "Hace " . intval($dias / 30) . " meses";
	} elseif ($dias >= 365 && $dias < 730) {
        $fecha =  "El año pasado";
	} elseif ($dias >= 730) {
        $fecha =  "Hace " . intval($dias / 365) . " años";
    } else {
        $fecha = date("d-m-Y", $fechaAbsoluta);
    }
 
    return $fecha;
}
?>