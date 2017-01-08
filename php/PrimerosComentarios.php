<div>
    <input id="btnIdCard" type="button" value="Comentar">
</div>
<?php
	$coment_post = RetornarComent($idPost_get);
    $ContadorComent = 0;
    while($fila = $coment_post->fetch_array(MYSQLI_ASSOC)):
?>
<div class="div-topic-post div-topic-comentarios">
    <div class="div-coment-colizq">
        <a id="link-imagen" href="#"><img src=<?php echo $fila["Avatar"]; ?> /></img></a>
    </div>
    <div class="div-coment-colder">
        <div class="div-coment-colder-autor">
            <span class="span-coment-nick LinkBlack">
                <a><?php echo $fila["Nick"]; ?></a>
                <a class="link_fecha_coment">- <?php echo FechaRelativa($fila["Fecha"]); ?></a>
            </span>
        </div>
        <div class="div-coment-body">
            <?php echo nl2br($fila["Coment_body"]); ?>
        </div>
        <div class="div-pie-coment">
        	<span class="span-BotonesComent">
            	<ul>
                	<li><span id="<?php echo $fila["Id_coment"]; ?>" class="BotonComent BC_response"></span></li>
                    <li><span id="<?php echo $fila["Id_coment"]; ?>" class="BotonComent BC_denunciar"></span></li>
                    <li><span class="BotonComent BC_mensaje"></span></li>
                    <li><span class="BotonComent BC_borrar"></span></li>
                </ul>
            </span>
        </div>
    </div>
</div>
<div id="CapaReply<?php echo $fila["Id_coment"]; ?>" class="div-ResplyComentTotal">
<?php
if($fila["Cant_reply"]>0){
            $reply_list = RetornarComentReply($fila["Id_coment"],0,1000);
            while($filaReply = $reply_list->fetch_array(MYSQLI_ASSOC)):
        ?>
        <div class="div-topic-post div-topic-comentarios">
            <div class="div-coment-colizq">
                <a id="link-imagen" href="#"><img src=<?php echo $filaReply["Avatar"]; ?> /></img></a>
            </div>
            <div class="div-coment-colder" style="width:700px;">
                <div class="div-coment-colder-autor">
                    <span class="span-coment-nick LinkBlack">
                        <a><?php echo $filaReply["Nick"]; ?></a>
                        <a class="link_fecha_coment">- <?php echo FechaRelativa($filaReply["Fecha"]); ?></a>
                    </span>
                </div>
                <div class="div-coment-body">
                    <?php echo nl2br($filaReply["Coment_body"]); ?>
                </div>
                <div class="div-pie-coment">
                    <span class="span-BotonesComent">
                        <ul>
                        <li><span id="<?php echo $fila["Id_coment"]; ?>" class="BotonComent BC_response"></span></a></li>
                        <li><span id="<?php echo $fila["Id_coment"]; ?>" class="BotonComent BC_denunciar"></span></a></li>
                        <li><span class="BotonComent BC_mensaje"></span></a></li>
                        <li><span class="BotonComent BC_borrar"></span></a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
        <?php
            endwhile;
        } ?>
</div>
	<div class="div-ResplyComent" id="Temporal<?php echo $fila["Id_coment"]; ?>"></div>
    <div class="div-ResplyComent" id="Respuesta<?php echo $fila["Id_coment"]; ?>"></div>
<?php
    $ContadorComent = $ContadorComent + 1;
    endwhile;
?>