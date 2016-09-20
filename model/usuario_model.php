<?php 

	Class UsuarioSistema{

		public $login;
		public $nome;
		public $senha;
		public $grupo;

		public function SelectAll(){

			$sql="select * from usuariosistema";

			$select=mysql_query($sql);

			$cont=0;

			while($rs=mysql_fetch_array($select)){

				$listUsuario[] = new UsuarioSistema();
				
				$listUsuario[$cont]->login=$rs['login'];
				$listUsuario[$cont]->senha=$rs['senha'];
				$listUsuario[$cont]->nome=$rs['nomecompleto'];
				$listUsuario[$cont]->grupo=$rs['oid_grupo'];

				$cont=$cont+1;

				return $listUsuario;
				
			}

		}

	}

 ?>