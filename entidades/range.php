<?php
	class Range {
		private $Name;
		private $Level;
		private $Points_Next_Level;
		Private $Xp;
		
		public function __construct($Nombre,$Nivel,$Points_Next_Level,$Xp){
			$this->Name = $Nombre;
			$this->Level = $Nivel;
			$this->Points_Next_Level = $Points_Next_Level;
			$this->Xp = $Xp;
		}
		
		public function perfil_recuadro(){
			//return "<span class='Span-Faction' id='".$this->Color[$this->Name]."'>".$this->Name."</span>";
			return $this->Level.' '.$this->Name;
		}
		
		public function xp_actual(){
			return $this->Xp;	
		}
		
		public function xp_next_level(){
			return $this->Points_Next_Level;
		}
		
		public function barra(){
			//return $this->Xp;
			return ( $this->Xp * 570 ) / $this->Points_Next_Level;	
		}
		
		public function barra_chiquita(){
			//return $this->Xp;
			return ( $this->Xp * 122 ) / $this->Points_Next_Level;	
		}
	}
?>