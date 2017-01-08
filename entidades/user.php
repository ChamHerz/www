<?php
	class User {
		private $Id_user;
		private $Nick;
		private $Avatar;
		private $Pais;
		private $Sexo;
		private $Lema;
		private $Faction;
		private $NroRango;
		private $Rango;
		private $Points_Next_Level;
		private $Xp;
		private $Gold;
		private $Post;
		private $View;
		private $Coment;
		private $Precedence;
		private $Old;
		private $Avg;

		public function __construct($Id_user,$Nick,$Avatar,$Faction,$Lema,$NroRango,$Rango,$Points_Next_Level,$Xp,$Gold,$Post,$View,$Coment,$Precedence,$Old,$Avg){
			$this->Id_user = $Id_user;
			$this->Nick = $Nick;
			$this->Avatar = $Avatar;
			$this->Faction = $Faction;
			$this->Lema = $Lema;
			$this->NroRango = $NroRango;
			$this->Rango = $Rango;
			$this->Points_Next_Level = $Points_Next_Level;
			$this->Xp = $Xp;
			$this->Gold = $Gold;
			$this->Post = $Post;
			$this->View = $View;
			$this->Coment = $Coment;
			$this->Precedence = $Precedence;
			$this->Old = $Old;
			$this->Avg = $Avg;
		}
		
		public function get_Id_user(){
			return $this->Id_user;
		}
		public function get_Nick(){
			return $this->Nick;
		}
		public function get_Avatar(){
			return $this->Avatar;
		}
		public function get_Faction(){
			return $this->Faction;
		}
		public function get_Lema(){
			return $this->Lema;
		}
		public function get_Range(){
			return $this->Rango;
		}
		public function get_NroRango(){
			return $this->NroRango;
		}
		public function get_Points_Next_Level(){
			return $this->Points_Next_Level;
		}
		public function get_Xp(){
			return $this->Xp;
		}
		public function get_Gold(){
			return $this->Gold;
		}
		public function get_Post(){
			return $this->Post;
		}
		public function get_View(){
			return $this->View;
		}
		public function get_Coment(){
			return $this->Coment;
		}
		public function get_Precedence(){
			return $this->Precedence;
		}
		public function get_Old(){
			return $this->Old;
		}
		public function get_Avg(){
			return $this->Avg;
		}
		
		public function irUser(){
			return 'http://localhost/ChamHerz/index.php?action=perfil&user='.$this->Nick;
		}
		
		public function get_Nro_Range(){
			return $this->NroRango.' '.$this->get_Range();	
		}
	}
?>