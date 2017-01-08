<?php
class StringFunctions {
    /**
     * bbcode2html() Estandard bbcode transform [http://www.bbcode.org/reference.php]
     * 
     * @access  public
     * @param   $cadena string BBCODE
     * @return  $cadena string HTML
     */
	 
	public function bbcode2html2($cadena) {
		$bb_code = array( 
	// emoticonos: debéis apuntar a vuestras imágenes en el código HTML 
	':)' => '<img src="feliz.gif" />', 
	':(' => '<img src="triste.gif" />', 
	':D' => '<img src="contento.gif" />', 

	// letra negrita 
	'[b]' => '<span style="font-weight:bold">', 
	'[/b]' => '</span>', 
	
	// letra cursiva 
	'[i]' => '<span style="font-style:italic">', 
	'[/i]' => '</span>', 
	
	// letra subrayada 
	'[u]' => '<span style="text-decoration:underline">', 
	'[/u]' => '</span>', 
	'[/url]' => '</a>',
	
	'[/size]' => '</font>',
	'[/color]' => '</span>',
	'[/font]' => '</font>',
	
	'[/center]' => '</div>',
	'[/left]' => '</div>',
	'[/right]' => '</div>',
	'[/justify]' => '</div>',
	
	// imagenes 
	'[img]' => '<img src="', 
	'[/img]' => '" />',
	
	// Codigo
	'[code]' => '<pre class="prettyprint linenums">', 
	'[/code]' => '</pre>'
	
	// recordad que después del último elemento no hay coma 
	); 
		$search = array_keys( $bb_code ); 
		$cadena = str_replace( $search, $bb_code, $cadena );
		//return $cadena;
		
		$bbcode [] = '/\[size=([\w\s-]*)\]/is';
        $html [] = '<font size="$1">';
		
		$bbcode [] = '/\[color=(\#[0-9a-fA-F]{6}+)\]/';
		$html [] = '<span style="color: $1">';
		
		$bbcode [] = '/\[img=(.*)x(.*)\]/';
		$html [] = '<img width="$1" height="$2" src="';
		
		$bbcode [] = '/\[url=(.*?)\]/';
		$html [] = '<a href="$1">';
		
		$bbcode [] = '/\[youtube\](.*?)\[\/youtube\]/';
		$html [] = '<iframe class="youtobe-embed" src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>';
		
		//$bbcode [] = '/\[color=(?:"|\')?(.*)(?:"|\')?\]/i';
		//$html [] = '<span style="color:$1;">';
		
		//$bbcode [] = '/\[color=(?:"|\')?(.*)(?:"|\')?\](.*)\[\/color\]/i';
        //$html [] = '<font color="$1">$2</font>';
		
		$bbcode [] = '/\[font=(?:"|\')?([\w\s-]*)(?:"|\')?\]/is';
        $html [] = '<span style="font-family:$1;">';
		
		$bbcode [] = '/\[(?:"|\')?(left|center|right|justify){1}(?:"|\')?\]/is';
        $html [] = '<div style="text-align:$1;">';
		
		$cadena = preg_replace ($bbcode, $html, $cadena);
		return $cadena;
	}
	
	public function interpretarCodigo($posteo) {
		$bb_code = array(
			'[code]' => '<div class="DivCodigo"', 
			'[/code]' => '</div>',
			
			//color azul:
			'if' => '<span style="color: blue"><b>if</b></span>',
			'var' => '<span style="color: blue"><b>var</b></span>'
			//'return' => '<span style="color: blue"><b>return</b></span>',
			//'false' => '<span style="color: blue"><b>false</b></span>',
			//'true' => '<span style="color: blue"><b>true</b></span>',
			//'(' => '<span style="color: blue"><b>(</b></span>',
			//')' => '<span style="color: blue"><b>)</b></span>',
			//'{' => '<span style="color: blue"><b>{</b></span>',
			//'}' => '<span style="color: blue"><b>}</b></span>',
			//';' => '<span style="color: blue"><b>;</b></span>',
			
			//color azul sin B
			//'=' => '<span style="color: blue">=</span>'
		);
		
		$search = array_keys( $bb_code ); 
		$posteo = str_replace( $search, $bb_code, $posteo );
		return $posteo;
		
		//$bbcode [] = '/\[code\](.*?)\[\/code\]/';
		//$html [] = '<div class="DivCodigo">"$1"</div>';
		//$posteo = preg_replace ($bbcode, $html, $posteo);
		//return $posteo;
	}
	
	
	
	
	
	//no lo uso:
    public function bbcode2html($cadena) {
        // Style's to box code, spoiler, etc.
        define ( 'TITLE_DATA', ' style="font-size:11px;color:#666;"' );
        define ( 'BOX_STYLE', ' style="border:1px solid #ccc;background:#f1f1f1;padding:5px;margin:2px;"' );
        
        // Array bbcode & html PRCE
        $bbcode [] = '/\[b\](.*)\[\/b\]/is';
        $html [] = '<b>$1</b>';
        
        $bbcode [] = '/\[u\](.*)\[\/u\]/is';
        $html [] = '<u>$1</u>';
        
        $bbcode [] = '/\[i\](.*)\[\/i\]/is';
        $html [] = '<i>$1</i>';
        
        $bbcode [] = '/\[s\](.*)\[\/s\]/is';
        $html [] = '<s>$1</s>';
        
        $bbcode [] = '/\[br\]/iU';
        $html [] = '<br />';
        
        $bbcode [] = '/\[font=(?:"|\')?([\w\s-]*)(?:"|\')?\](.*)\[\/font\]/is';
        $html [] = '<span style="font-family:$1;">$2</span>';
        
        $bbcode [] = '/\[size=(?:"|\')?([\w\s-]*)(?:"|\')?\](.*)\[\/size\]/is';
        $html [] = '<span style="font-size:$1px;">$2</span>';
        
        $bbcode [] = '/\[url\](.*)\[\/url\]/i';
        $html [] = '<a href="$1">$1</a>';
        
        $bbcode [] = '/\[url=(?:"|\')?(.*)(?:"|\')?\](.*)\[\/url\]/i';
        $html [] = '<a href="$1">$2</a>';
        
        $bbcode [] = '/\[quote\]/i';
        $html [] = '<div' . TITLE_DATA . '>Cita:</div><blockquote' . BOX_STYLE . '>';
        
        $bbcode [] = '/\[quote=(?:"|\')?([\w\s-]*)(?:"|\')?\]/is';
        $html [] = '<div' . TITLE_DATA . '><b>$1</b> escribi&oacute;:</div><blockquote' . BOX_STYLE . '>';
        
        $bbcode [] = '/\[\/quote\]/i';
        $html [] = '</blockquote>';
        
        $bbcode [] = '/\[color=(?:"|\')?(.*)(?:"|\')?\](.*)\[\/color\]/i';
        $html [] = '<font color="$1">$2</font>';
        
        $bbcode [] = '/\[img\](.*)\[\/img\]/i';
        $html [] = '<img src="$1" />';
        
        $bbcode [] = '/\[email\](.*)\[\/email\]/i';
        $html [] = '<a href="mailto:$1">$1</a>';
        
        $bbcode [] = '/\[email=(?:"|\')?(.*)(?:"|\')?\](.*)\[\/email\]/i';
        $html [] = '<a href="mailto:$1">$2</a>';
        
        $bbcode [] = '/\[list\](.*)\[\/list\]/is';
        $html [] = '<ul>$1</ul>';
        
        $bbcode [] = '/\[list=1\](.*)\[\/list\]/is';
        $html [] = '<ol style="list-style-type:decimal">$1</ol>';
        
        $bbcode [] = '/\[list=a\](.*)\[\/list\]/is';
        $html [] = '<ol style="list-style-type:lower-alpha">$1</ol>';
        
        $bbcode [] = '/\[\*\](.*)/iU';
        $html [] = '<li>$1 ';
        
        $bbcode [] = '/\[code\](.*)\[\/code\]/ise';
        $html [] = "'<div'.TITLE_DATA.'>Codigo:</div><div'.BOX_STYLE.'>'.highlight_string(trim(stripslashes('$1')),true).'</div>'";
        
 //       $bbcode [] = '/\[align=(?:"|\')?(left|center|right){1}(?:"|\')?\](.*)\[\/align\]/is';
 //       $html [] = '<div style="text-align:$1;">$2</div>';
		
		$bbcode [] = '/\[(?:"|\')?(left|center|right){1}(?:"|\')?\](.*)\[\/(?:"|\')?(left|center|right)\]/is';
        $html [] = '<div style="text-align:$1;">$2</div>';
 
        $cadena = preg_replace ( $bbcode, $html, $cadena );
        
		return $cadena;
    }
}
?>