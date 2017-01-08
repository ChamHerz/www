<div id="Registrar-fondo">
	<div id="Registrar-tapa">
    	<div id="Registrar-col1">
       	<form id="creator" name="creator" accept-charset="UTF-8" method="post" action="/ChamHerz/index.php?action=registrar2">
        	<div id="Reg-col1-unete"></div>
            <div id="Reg-col1-cuerpo">
            	<div id="Reg-col1-cuerpo-col1">
                	<div class="Capa45px">
                        <b>Nick:</b></br>
                        <div id="Error-nick" class="Error-cartel">
                            <label>chambi Adriel</label>
                        </div>
                    </div>
                    <div class="Capa50px">
                        <b>E-Mail:</b></br>
                        <div id="Error-email" class="Error-cartel">
                                <label>correo invalido</label>
                        </div>
                    </div>
                    <div class="Capa45px">
                        <b>Contrase&ntilde;a:</b></br>
                        <div id="Error-pass-1" class="Error-cartel">
                                <label>correo invalido</label>
                        </div>
                    </div>
                    <div class="Capa45px">
                        <b>Repetir Contrase&ntilde;a:</b></br>
                        <div id="Error-pass-2" class="Error-cartel">
                                <label>correo invalido</label>
                        </div>
                    </div>
                    <div class="Capa45px">
                        <b>Pais:</b></br>
                        <div id="Error-pais" class="Error-cartel">
                                <label>Pais obligatorio</label>
                        </div>
                    </div>
                    <div class="Capa45px">
                        <b>Sexo:</b></br>
                        <div id="Error-sexo" class="Error-cartel">
                                <label></label>
                        </div>
                    </div>
                    <div class="Capa45px">
                        <b>Avatar:</b></br>
                        <div id="Error-avatar" class="Error-cartel">
                                <label>avatar error</label>
                        </div>
                    </div>
                    <div class="Capa50px">
                        <b>Captcha:</b></br>
                    	<div id="ver">
                            <imh src="<?php echo RAIZ_APLICACION."/php/img.php"; ?>" />
                        </div>
                    </div>
                    <div class="Capa45px">
                        <b>Aceptar terminos:</b></br>
                    </div>
                </div>
                <div id="Reg-col1-cuerpo-col2">
                	<div class="Capa45px">
                		<input id="tbNick" name="tbNick" type="text" maxlength="10" class="Tb-ingreso" />
                    </div>
                    <div class="Capa50px derecha">
                		<input id="tbEmail" name="tbEmail" type="text" maxlength="40" class="Tb-ingreso" />
                        <b>gmail, yahoo y hotmail</b>
                    </div>
                    <div class="Capa45px">
                		<input id="tbPass1" name="tbPass1" type="text" maxlength="20" class="Tb-ingreso" />
                    </div>
                    <div class="Capa45px">
                		<input id="tbPass2" name="tbPass2" type="text" maxlength="20" class="Tb-ingreso" />
                    </div>
                    <div class="Capa45px">
                		<select id="selectPais" name="selectPais" class="Tb-ingreso" />
                		  <option selected="selected" value="-1">Seleccionar Pa&iacute;s:</option>
                          <option value="af">Afganist&aacute;n</option>
                          <option value="al">Albania</option>
                          <option value="de">Alemania</option>
                          <option value="ad">Andorra</option>
                          <option value="ao">Angola</option>
                          <option value="ai">Anguilla</option>
                          <option value="aq">Ant&aacute;rtida</option>
                          <option value="ag">Antigua y Barbuda</option>
                          <option value="an">Antillas Holandesas</option>
                          <option value="sa">Arabia Saud&iacute;</option>
                          <option value="dz">Argelia</option>
                          <option value="ar">Argentina</option>
                          <option value="am">Armenia</option>
                          <option value="aw">Aruba</option>
                          <option value="mk">ARY Macedonia</option>
                          <option value="au">Australia</option>
                          <option value="at">Austria</option>
                          <option value="az">Azerbaiy&aacute;n</option>
                          <option value="be">B&eacute;lgica</option>
                          <option value="bs">Bahamas</option>
                          <option value="bh">Bahr&eacute;in</option>
                          <option value="bd">Bangladesh</option>
                          <option value="bb">Barbados</option>
                          <option value="bz">Belice</option>
                          <option value="bj">Benin</option>
                          <option value="bm">Bermudas</option>
                          <option value="bt">Bhut&aacute;n</option>
                          <option value="by">Bielorrusia</option>
                          <option value="bo">Bolivia</option>
                          <option value="ba">Bosnia y Herzegovina</option>
                          <option value="bw">Botsuana</option>
                          <option value="br">Brasil</option>
                          <option value="bn">Brun&eacute;i</option>
                          <option value="bg">Bulgaria</option>
                          <option value="bf">Burkina Faso</option>
                          <option value="bi">Burundi</option>
                          <option value="cv">Cabo Verde</option>
                          <option value="kh">Camboya</option>
                          <option value="cm">Camer&uacute;n</option>
                          <option value="ca">Canad&aacute;</option>
                          <option value="td">Chad</option>
                          <option value="cl">Chile</option>
                          <option value="cn">China</option>
                          <option value="cy">Chipre</option>
                          <option value="va">Ciudad del Vaticano</option>
                          <option value="co">Colombia</option>
                          <option value="km">Comoras</option>
                          <option value="cg">Congo</option>
                          <option value="kp">Corea del Norte</option>
                          <option value="kr">Corea del Sur</option>
                          <option value="ci">Costa de Marfil</option>
                          <option value="cr">Costa Rica</option>
                          <option value="hr">Croacia</option>
                          <option value="cu">Cuba</option>
                          <option value="dk">Dinamarca</option>
                          <option value="dm">Dominica</option>
                          <option value="ec">Ecuador</option>
                          <option value="eg">Egipto</option>
                          <option value="sv">El Salvador</option>
                          <option value="ae">Emiratos &aacute;rabes Unidos</option>
                          <option value="er">Eritrea</option>
                          <option value="sk">Eslovaquia</option>
                          <option value="si">Eslovenia</option>
                          <option value="es">Espa&ntilde;a</option>
                          <option value="us">Estados Unidos</option>
                          <option value="ee">Estonia</option>
                          <option value="et">Etiop&iacute;a</option>
                          <option value="ph">Filipinas</option>
                          <option value="fi">Finlandia</option>
                          <option value="fj">Fiyi</option>
                          <option value="fr">Francia</option>
                          <option value="ga">Gab&oacute;n</option>
                          <option value="gm">Gambia</option>
                          <option value="ge">Georgia</option>
                          <option value="gh">Ghana</option>
                          <option value="gi">Gibraltar</option>
                          <option value="gd">Granada</option>
                          <option value="gr">Grecia</option>
                          <option value="gl">Groenlandia</option>
                          <option value="gp">Guadalupe</option>
                          <option value="gu">Guam</option>
                          <option value="gt">Guatemala</option>
                          <option value="gf">Guayana Francesa</option>
                          <option value="gn">Guinea</option>
                          <option value="gq">Guinea Ecuatorial</option>
                          <option value="gw">Guinea-Bissau</option>
                          <option value="gy">Guyana</option>
                          <option value="ht">Hait&iacute;</option>
                          <option value="hn">Honduras</option>
                          <option value="hk">Hong Kong</option>
                          <option value="hu">Hungr&iacute;a</option>
                          <option value="in">India</option>
                          <option value="id">Indonesia</option>
                          <option value="ir">Ir&aacute;n</option>
                          <option value="iq">Iraq</option>
                          <option value="ie">Irlanda</option>
                          <option value="bv">Isla Bouvet</option>
                          <option value="cx">Isla de Navidad</option>
                          <option value="nf">Isla Norfolk</option>
                          <option value="is">Islandia</option>
                          <option value="ky">Islas Caim&aacute;n</option>
                          <option value="cc">Islas Cocos</option>
                          <option value="ck">Islas Cook</option>
                          <option value="fo">Islas Feroe</option>
                          <option value="gs">Islas Georgias del Sur y Sandwich del Sur</option>
                          <option value="ax">Islas Gland</option>
                          <option value="hm">Islas Heard y McDonald</option>
                          <option value="fk">Islas Malvinas</option>
                          <option value="mp">Islas Marianas del Norte</option>
                          <option value="mh">Islas Marshall</option>
                          <option value="pn">Islas Pitcairn</option>
                          <option value="sb">Islas Salom&oacute;n</option>
                          <option value="tc">Islas Turcas y Caicos</option>
                          <option value="um">Islas ultramarinas de Estados Unidos</option>
                          <option value="vg">Islas V&iacute;rgenes Brit&aacute;nicas</option>
                          <option value="vi">Islas V&iacute;rgenes de los Estados Unidos</option>
                          <option value="il">Israel</option>
                          <option value="it">Italia</option>
                          <option value="jm">Jamaica</option>
                          <option value="jp">Jap&oacute;n</option>
                          <option value="jo">Jordania</option>
                          <option value="kz">Kazajst&aacute;n</option>
                          <option value="ke">Kenia</option>
                          <option value="kg">Kirguist&aacute;n</option>
                          <option value="ki">Kiribati</option>
                          <option value="kw">Kuwait</option>
                          <option value="lb">L&iacute;bano</option>
                          <option value="la">Laos</option>
                          <option value="ls">Lesotho</option>
                          <option value="lv">Letonia</option>
                          <option value="lr">Liberia</option>
                          <option value="ly">Libia</option>
                          <option value="li">Liechtenstein</option>
                          <option value="lt">Lituania</option>
                          <option value="lu">Luxemburgo</option>
                          <option value="mx">M&eacute;xico</option>
                          <option value="mc">M&oacute;naco</option>
                          <option value="mo">Macao</option>
                          <option value="mg">Madagascar</option>
                          <option value="ml">Mal&iacute;</option>
                          <option value="my">Malasia</option>
                          <option value="mw">Malawi</option>
                          <option value="mv">Maldivas</option>
                          <option value="mt">Malta</option>
                          <option value="ma">Marruecos</option>
                          <option value="mq">Martinica</option>
                          <option value="mu">Mauricio</option>
                          <option value="mr">Mauritania</option>
                          <option value="yt">Mayotte</option>
                          <option value="fm">Micronesia</option>
                          <option value="md">Moldavia</option>
                          <option value="mn">Mongolia</option>
                          <option value="ms">Montserrat</option>
                          <option value="mz">Mozambique</option>
                          <option value="mm">Myanmar</option>
                          <option value="ne">N&iacute;ger</option>
                          <option value="na">Namibia</option>
                          <option value="nr">Nauru</option>
                          <option value="np">Nepal</option>
                          <option value="ni">Nicaragua</option>
                          <option value="ng">Nigeria</option>
                          <option value="nu">Niue</option>
                          <option value="no">Noruega</option>
                          <option value="nc">Nueva Caledonia</option>
                          <option value="nz">Nueva Zelanda</option>
                          <option value="om">Om&aacute;n</option>
                          <option value="nl">Pa&iacute;ses Bajos</option>
                          <option value="pk">Pakist&aacute;n</option>
                          <option value="pw">Palau</option>
                          <option value="ps">Palestina</option>
                          <option value="pa">Panam&aacute;</option>
                          <option value="pg">Pap&uacute;a Nueva Guinea</option>
                          <option value="py">Paraguay</option>
                          <option value="pe">Per&uacute;</option>
                          <option value="pf">Polinesia Francesa</option>
                          <option value="pl">Polonia</option>
                          <option value="pt">Portugal</option>
                          <option value="pr">Puerto Rico</option>
                          <option value="qa">Qatar</option>
                          <option value="gb">Reino Unido</option>
                          <option value="cf">Rep&uacute;blica Centroafricana</option>
                          <option value="cz">Rep&uacute;blica Checa</option>
                          <option value="cd">Rep&uacute;blica Democr&aacute;tica del Congo</option>
                          <option value="do">Rep&uacute;blica Dominicana</option>
                          <option value="re">Reuni&oacute;n</option>
                          <option value="rw">Ruanda</option>
                          <option value="ro">Rumania</option>
                          <option value="ru">Rusia</option>
                          <option value="eh">Sahara Occidental</option>
                          <option value="ws">Samoa</option>
                          <option value="as">Samoa Americana</option>
                          <option value="kn">San Crist&oacute;bal y Nevis</option>
                          <option value="sm">San Marino</option>
                          <option value="pm">San Pedro y Miquel&oacute;n</option>
                          <option value="vc">San Vicente y las Granadinas</option>
                          <option value="sh">Santa Helena</option>
                          <option value="lc">Santa Luc&iacute;a</option>
                          <option value="st">Santo Tom&eacute; y Pr&iacute;ncipe</option>
                          <option value="sn">Senegal</option>
                          <option value="cs">Serbia y Montenegro</option>
                          <option value="sc">Seychelles</option>
                          <option value="sl">Sierra Leona</option>
                          <option value="sg">Singapur</option>
                          <option value="sy">Siria</option>
                          <option value="so">Somalia</option>
                          <option value="lk">Sri Lanka</option>
                          <option value="sz">Suazilandia</option>
                          <option value="za">Sud&aacute;frica</option>
                          <option value="sd">Sud&aacute;n</option>
                          <option value="se">Suecia</option>
                          <option value="ch">Suiza</option>
                          <option value="sr">Surinam</option>
                          <option value="sj">Svalbard y Jan Mayen</option>
                          <option value="tn">T&uacute;nez</option>
                          <option value="th">Tailandia</option>
                          <option value="tw">Taiw&aacute;n</option>
                          <option value="tz">Tanzania</option>
                          <option value="tj">Tayikist&aacute;n</option>
                          <option value="io">Territorio Brit&aacute;nico del Oc&eacute;ano &iacute;ndico</option>
                          <option value="tf">Territorios Australes Franceses</option>
                          <option value="tl">Timor Oriental</option>
                          <option value="tg">Togo</option>
                          <option value="tk">Tokelau</option>
                          <option value="to">Tonga</option>
                          <option value="tt">Trinidad y Tobago</option>
                          <option value="tm">Turkmenist&aacute;n</option>
                          <option value="tr">Turqu&iacute;a</option>
                          <option value="tv">Tuvalu</option>
                          <option value="ua">Ucrania</option>
                          <option value="ug">Uganda</option>
                          <option value="uy">Uruguay</option>
                          <option value="uz">Uzbekist&aacute;n</option>
                          <option value="vu">Vanuatu</option>
                          <option value="ve">Venezuela</option>
                          <option value="vn">Vietnam</option>
                          <option value="wf">Wallis y Futuna</option>
                          <option value="ye">Yemen</option>
                          <option value="dj">Yibuti</option>
                          <option value="zm">Zambia</option>
                          <option value="zw">Zimbabue</option>
                		</select>
                        <div id="flag" class="Bandera"></div>
                    </div>
                    <div class="Capa45px">
                		<select id="selectSexo" name="selectSexo" class="Tb-ingreso" />
                		  <option value="-1">Seleccionar:</option>
                          <option value="H">Hombre</option>
                          <option value="M">Mujer</option>
                		</select>
                    </div>
                    <div class="Capa45px">
                    	<a id="btnAvatar" class="boton">Cambiar Avatar</a>
                        <input id="tbAvatar" name="tbAvatar" type="text" value="" />
                    </div>
                    <div class="Capa50pxl">
                    	<a id="linkCapcha">No se puede ver la imagen:</a></br>
                        <div id="ver">
                			<input id="tbCapcha" name="tbCapcha" type="text" maxlength="20" class="Tb-ingreso" />
                        </div>
                    </div>
                    <div class="Capa45px">
                    	<b>Al registrarse acpeta los términos</b></br>  
                    </div>
                    <div class="Capa50pxl">
                    	<input id="btnRegistrar" class="boton" type="submit" value="Registrarse">
                    </div>
                </div>
            </div>    
        </form>
        </div>
        <div id="Registrar-col2">
        	<div id="Div-Preliminar">Vista preliminar:</div>
            <div id="Div-Usuario">
            	<div id="Div-Arriba">
            		<span id="Span-Nick" class="LinkBlack"><a>ChamHerz</a></span>
                </div>
                <div id="Div-Medio">
                	<div id="Div-Medio-izq">
                        <a id="link-imagen" href="#"><img src="http://i.minus.com/iSzyKTqQwhlS1.gif" /></img></a>
                    	<div id="Div-Level">Level 12 Commander</div>
                        <div id="Div-Experiencia">
                        	<div id="Div-Barra"></div>
                        	<span id="span-Experiencia">0/500</span>
                        </div>
                    </div>
                    <div id="Div-Medio-der" class="LinkBlack">
                    	<a>></a>
                        <div id="divExtencion" >
                        	<div id="divMsjPersonal">Sin mensaje personal</div>
                            <div id="divGrandePuntos">
                                <div class="divIconos">
                                    <span id="iconMoney" class="icon"></span>
                                    <span id="iconEye" class="icon"></span>
                                    <span id="iconPost" class="icon"></span>
                                    <span id="iconTilde" class="icon"></span>
                                    <span id="iconPrecedencia" class="icon"></span>
                                    <span id="iconAntiguedad" class="icon"></span>
                                </div>
                                <div class="divIconos">
                                    <span id="ptsMoney" class="clasePts">2351</span>
                                    <span id="ptsEye" class="clasePts">321</span>
                                    <span id="ptsPost" class="clasePts">35</span>
                                    <span id="ptsTilde" class="clasePts">150</span>
                                    <span id="ptsPrecedencia" class="clasePts">721</span>
                                    <span id="ptsAntiguedad" class="clasePts">1 Año</span>
                                </div>
                                <div class="divIconos fRight">
                                	<span id="iconFlag" class="Bandera iconRight"></span>
                                </div>
                            </div>
    					</div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>