<?php
	$usuario_activo = $_SESSION['user'];
?>
<div class="divTopLeft">
    <ul>
        <li><div class="img_avata_peque"><a class="" href="index.php"><img id="AvatarChiuito" name="<?php echo $usuario_activo->get_Id_user(); ?>" src=<?php echo $usuario_activo->get_avatar(); ?> /></a></div></li>
        <li><a class="" href="index.php"><span id="nickTop"><?php echo $usuario_activo->get_nick(); ?> </span></a></li>
        <li><a class="" href="index.php?action=logout">Nada</a></li>
        <li><a class="" href="index.php?action=logout">Salir</a></li>
    </ul>
</div>