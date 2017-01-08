<?php
	$Avatar = $_POST["PasarURL"];
	$Coment = $_POST["PasarComent"];
	$Nick = $_POST["pasarNick"];
?>

<div class="div-topic-post div-topic-comentarios">
    <div class="div-coment-colizq">
        <a id="link-imagen" href="#"><img src=<?php echo $Avatar; ?> /></img></a>
    </div>
    <div class="div-coment-colder" style="width:700px;">
        <div class="div-coment-colder-autor">
            <span class="span-coment-nick LinkBlack">
                <a><?php echo $Nick; ?></a>
                <a class="link_fecha_coment">- <?php echo "hace un momento"; ?></a>
            </span>
        </div>
        <div class="div-coment-body">
            <?php echo nl2br($Coment); ?>
        </div>
        <div class="div-pie-coment">
            Pie del comentario
        </div>
    </div>
</div>
<div>Gracias por comentar</div>