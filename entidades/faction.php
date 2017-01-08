<?php
	class Faction {
		private $Name;
		private $Color = array(
			"Ninguna" => "FactionNinguna",
			"Web" => "FactionWeb",
			"Unix" => "FactionUnix",
			"Desktop" => "FactionDesktop",
			"Movil" => "FactionMovil",
			"Gamer" => "FactionGamer",
			"Admin" => "FactionAdmin"
		);
		
		public function __construct($Nombre){
			$this->Name = $Nombre;
		}
		
		public function perfil_recuadro(){
			//return "<span class='Span-Faction' id='".$this->Color[$this->Name]."'>".$this->Name."</span>";
			return "<span class='Span-Faction' id='".$this->Color[$this->Name]."'>".$this->Name."</span>";
		}
	}
?>