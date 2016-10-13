<?php
	session_start();

	function VerificarLogin($login,$senha){

		$sql="select * from usuariosistema where login='".$login."' and senha='".$senha."';";
		$select=mysql_query($sql);

		if(mysql_num_rows($select) == 1){

			$rs=mysql_fetch_array($select);

			$sql="select p.acs_cms,g.nome from permissao p inner join grupousuario g on(p.oid_permissao = g.oid_permissao) where g.oid_grupo = ".$rs['oid_grupo'];
			$select=mysql_query($sql);

			$rsp=mysql_fetch_array($select);

			if($rsp['acs_cms'] == 1){

				$_SESSION['nome']=$rs['nomecompleto'];
				$_SESSION['grupo']=$rsp['nome'];

				return 2;

			}else{

				return 1;

			}

		}else{

			return 0;

		}

	}

?>