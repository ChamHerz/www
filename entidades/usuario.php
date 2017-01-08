<?php
	class Usuario {
		private $_id_user = '';
		private $_nick = '';
		private $_url = '';
		
		public function __construct ($iduser,$nombre,$url)
    	{
		$this->_id_user = $iduser;
        $this->_nick = $nombre;
		$this->_url = $url;
    	}
		public function __toString()
    	{
        	return $this->_nick;
    	}
		public function get_id_user()
		{
			return $this->_id_user;
		}
		public function get_nick()
		{
			return $this->_nick;
		}
		public function get_avatar()
		{
			return $this->_url;
		}
	}
?>