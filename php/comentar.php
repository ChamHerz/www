<!--<form id="frmComent" name="frmComent" accept-charset="UTF-8" method="post" >-->
<div class="Div-Comentar div-topic-post ComentEnElPost">
	<div class="Div-Coment-Renglon-Sup">
    	Renglon Sup
    </div>
    <div class="Div-Coment-Renglon-Med">
    	<div class="DivComentColIzq">
    		<a id="link-imagen" href="#"><img src=<?php echo $usuario_activo->get_avatar(); ?> /></img></a>    
        </div>
        <div class="DivComentColDer">
    		<textarea id="Id_textarea_coment" class="Comet-Text-Area" name="Coment-Body" tabindex="1" placeholder="Excribe tu comentario aqui..."></textarea>
        </div>
    </div>
    <div class="Div-Coment-Renglon-Inf"> 	
    	<input class="BotonStile2 ComentBoton colorCambia" type="button" value="Comentar">
        <div class="Div-coment-error" id="ErrorPrimerComent">
        	El comentario esta vacio
        </div>
    </div>
</div>
<!--</form>-->