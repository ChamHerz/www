<?php
session_start();
//Vaciamos la sesi�n
$_SESSION = array();
//Borramos cada cookie que tengamos
setcookie("usuario","",time()-3600,"/","miweb.com");
//Destruimos la sesi�n
session_destroy();
//Redirigimos hacia la pagina index.php
header("Location: index.php");
?>