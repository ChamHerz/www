<?php
	require_once ('bd-functions.php');
	require_once ('fechas.php');
	$idDelPost = $_POST["IdDelPost"];
	$PostCantComent = $_POST["pasarCantComent"];
	$TotalDeComent = $_POST["PostTotalComent"];
	$IdUser_Actual = $_POST["PostIdUser"];
	$coment_post = RetornarComent($idDelPost,$PostCantComent);
	$ContadorComent = $PostCantComent; 
?>
<script type="text/javascript">
	function Mostrar($recursivo,$IdUser) {
		$(".Mascomentarios").remove();
		var pasarIdPost = $('.spanIdpost').text();
		var PostCantComent = $recursivo;
		var totalComent = $('#SpanComent').text();
		$(".divMasComent"+$recursivo).load('php/masComent.php',{IdDelPost:pasarIdPost,pasarCantComent:PostCantComent,PostTotalComent:totalComent,PostIdUser:$IdUser});
	}
	function BotonNuevo($IdComent,$IdUser) {
		$("#Respuesta"+$IdComent).text('Responder Comentario');
		$("#Respuesta"+$IdComent).load('php/replyComent.php',{IdDelUser:$IdUser,IdDelComent:$IdComent});
	}
</script>
<?php
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
			<?php echo $fila["Coment_body"]; ?>
		</div>
		<div class="div-pie-coment">
        	<input id="<?php echo $fila["Id_coment"]; ?>" class="BotonEnalceComent" type="button" onClick="BotonNuevo(<?php echo $fila["Id_coment"].",".$IdUser_Actual; ?>)" value="Boton Nuevo">
			Pie del comentario
		</div>
	</div>
</div>
<?php
	if($fila["Cant_reply"]>0){?>
    	<div id="CapaReply" class="div-ResplyComent">
        	<?php
        		$reply_list = RetornarComentReply($fila["Id_coment"],0,2);
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
                        <?php echo $filaReply["Coment_body"]; ?>
                    </div>
                    <div class="div-pie-coment">
						Pie del comentario
					</div>
				</div>
			</div>
            <?php
				endwhile;
			?>
        </div>
	<?php } ?>
    	<div class="div-ResplyComent" id="Respuesta<?php echo $fila["Id_coment"]; ?>"></div>
    <?php
	$ContadorComent = $ContadorComent + 1;
	endwhile;
?>
<div class="Mascomentarios">
<?php
	if ($ContadorComent<$TotalDeComent)
	{
		echo "<input class='BotonMasComent BotonStile2 colorCambia' name='".$ContadorComent."' type='button' value='Mostrar mas comentarios' onclick='Mostrar(".$ContadorComent.",".$IdUser_Actual.");'>";
	}
	else{
		echo "no mas";
	}
?>	
</div>
<div class="divMasComent<?php echo $ContadorComent; ?> ">
</div>