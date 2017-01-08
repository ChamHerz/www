<?php
	class Post {
		private $Id_post;
        private $Id_user;
        private $Titulo;	
        private $Id_categoria;
		private $Categoria_name;
        private $Fecha;
        private $Body_post;	
        private $Puntos;
        private $Visitas;	
        private $Favoritos;	
        private $Comentarios;	
		
		public function __construct($Id_post,$Id_user,$Titulo,$Fecha,$Categoria_name,$Body_post,$Puntos,$Visitas,$Favoritos,$Comentarios){
			$this->Id_post = $Id_post;
			$this->Id_user = $Id_user;
			$this->Titulo = $Titulo;
			$this->Fecha = $Fecha;
			$this->Categoria_name = $Categoria_name;
			$this->Body_post = $Body_post;
			$this->Puntos = $Puntos;
			$this->Visitas = $Visitas;
			$this->Favoritos = $Favoritos;
			$this->Comentarios = $Comentarios;
		}
		public function get_Id_post(){
			return $this->Id_post;
		}
		public function get_Id_user(){
			return $this->Id_user;
		}
		public function get_Titulo(){
			return $this->Titulo;
		}
		public function get_Fecha(){
			return $this->Fecha;
		}
		public function get_Categoria_name(){
			return $this->Categoria_name;
		}
		public function get_Body_post(){
			return $this->Body_post;
		}
		public function get_Puntos(){
			return $this->Puntos;
		}
		public function get_Visitas(){
			return $this->Visitas;
		}
		public function get_Favoritos(){
			return $this->Favoritos;
		}
		public function get_Comentarios(){
			return $this->Comentarios;
		}
	}
?>