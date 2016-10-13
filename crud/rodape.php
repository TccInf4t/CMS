<?php

	require_once('bd/conexao.php');
	Conectar();

	if(isset($_POST['btnSalvar'])){

		$sql="select * from rodape";
		$select=mysql_query($sql);

		if(mysql_num_rows($select) == 0){

			$sql="insert into rodape(nome,cnpj,telefone,email,oid_loja,facebook,twitter) values('".$_POST['txtNome']."','".$_POST['txtCnpj']."','".$_POST['txtTelefone']."','".$_POST['txtEmail']."',".$_POST['cbLoja'].",'".$_POST['txtFacebook']."','".$_POST['txtTwitter']."');";
			mysql_query($sql);


		}else{

			$sql="update rodape set nome='".$_POST['txtNome']."',cnpj='".$_POST['txtCnpj']."',telefone='".$_POST['txtTelefone']."',email='".$_POST['txtEmail']."',oid_loja=".$_POST['cbLoja'].",facebook='".$_POST['txtFacebook']."',twitter='".$_POST['txtTwitter']."' where oid_rodape=1";
			mysql_query($sql);

		}

	}

?>