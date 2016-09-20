<?php 
	class MysqlDb{

		public $servidor;
		public $usuario;
		public $senha;

		public function __construct(){

			$this->servidor="10.107.134.30";
			$this->usuario="root";
			$this->senha="bcd127";
		}

		public  function Conectar(){

			if($this->conexao=mysql_connect($this->servidor, $this->usuario, 
				$this->senha)){

				mysql_select_db("csoptcc");

			}else{
				echo("ERRO na conexão com o banco de dados".mysql_error());
				die();
			}
		}

		public function Desconectar(){
			mysql_close($this->conexao);
		}
	}
 ?>