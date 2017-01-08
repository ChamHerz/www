<?php
	require_once ('bd-functions.php');
	$Id_User = $_POST["IdDelUser"];
	$Id_Coment = $_POST["IdDelComent"];
	$UserAvatar = $_POST["UrlDelAvatar"];
?>
<div class="Div-Comentar div-topic-post">
	<div class="Div-Coment-Renglon-Sup">
    	Renglon Sup
    </div>
    <div class="Div-Coment-Renglon-Med">
    	<div class="DivComentColIzq">
    		<a id="link-imagen" href="#"><img src=<?php echo $UserAvatar; ?> /></img></a>    
        </div>
        <div class="DivComentColDer">
    		<textarea id="Id_textarea_coment" class="Comet-Text-Area" name="Coment-Body" tabindex="1" placeholder="Excribe tu comentario aqui..."></textarea>
        </div>
    </div>
    <div class="Div-Coment-Renglon-Inf"> 	
    	<input name="<?php echo nl2br($Id_Coment); ?>" class="BotonStile2 ComentBoton colorCambia" type="button" value="Comentar">
        <div class="Div-coment-error">
        	El comentario esta vacio
        </div>
    </div>
</div>