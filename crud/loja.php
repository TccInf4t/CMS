<?php
	
	require_once("bd/conexao.php");
	Conectar();

	if(isset($_GET['excluir'])){

		$sql="delete from conteudosite where oid_conteudosite=".$_GET['excluir'];

		mysql_query($sql);

		echo('<script>
			alert("Deletado com sucesso");
			</script>');

		header("location:loja.php");

	}

	function selecionarEstado($oid){

		$sql="select * from estado where oid_estado=".$oid;
		$select=mysql_query($sql);

		return mysql_fetch_array($select);

	}

	function selecionarCidade($oid){

		$sql="select * from cidade where oid_cidade=".$oid;
		$select=mysql_query($sql);

		return mysql_fetch_array($select);

	}

	if(isset($_POST['btnSalvar'])){

		$cidade=selecionarCidade($_POST['cbCidade']);
		$estado=selecionarEstado($cidade['oid_estado']);
		

		$enderecoCompleto=$_POST['txtLogradouro'].",".$_POST['txtNumero'].",".$_POST['txtComplemento'].",".$_POST['txtBairro']."-".$_POST['txtCep']."-".$cidade['nome']."-".$estado['nome'];

		$sql="insert into endereco (oid_cidade,logradouro,complemento,numero,cep,bairro,classname,enderecocompleto) values(".$_POST['cbCidade'].",'".$_POST['txtLogradouro']."','".$_POST['txtComplemento']."',".$_POST['txtNumero'].",'".$_POST['txtCep']."','".$_POST['txtBairro']."','TLoja','".$enderecoCompleto."')";

		mysql_query($sql);

		$sql="insert into telefone (telefone) values('".$_POST['txtTelefone']."')";
		mysql_query($sql);

		$sql="select * from telefone order by oid_telefone desc";
		$select=mysql_query($sql);

		$telefone=mysql_fetch_array($select);

		$sql1="select oid_endereco from endereco order by oid_endereco desc limit 1";
		$select1=mysql_query($sql1);

		$endereco=mysql_fetch_array($select1);

		$sql2="insert into conteudosite(titulo,datacriacao,oid_endereco,classname,oid_telefone) values('".$_POST['txtNome']."',NOW(),".$endereco['oid_endereco'].",'TLoja',".$telefone['oid_telefone'].")";


		echo('<script>
		alert("inserido com sucesso");
		</script>');
		    
		mysql_query($sql2);
				
		}

		if(isset($_POST['btnEditar'])){

			$cidade=selecionarCidade($_POST['cbCidade']);
			$estado=selecionarEstado($cidade['oid_estado']);

			$enderecoCompleto=$_POST['txtLogradouro'].",".$_POST['txtNumero'].",".$_POST['txtComplemento'].",".$_POST['txtBairro']."-".$_POST['txtCep']."-".$cidade['nome']."-".$estado['nome'];

			$sql="update endereco set oid_cidade=".$_POST['cbCidade'].",logradouro='".$_POST['txtLogradouro']."',complemento='".$_POST['txtComplemento']."',numero='".$_POST['txtNumero']."',cep='".$_POST['txtCep']."',bairro='".$_POST['txtBairro']."',enderecocompleto='".$enderecoCompleto."' where oid_endereco = ".$_GET['endereco'];


			mysql_query($sql);

			$sql="update conteudosite set titulo='".$_POST['txtNome']."',datacriacao = NOW() where oid_conteudosite=".$_GET['editar'];

			mysql_query($sql);

			$sql="update telefone set telefone='".$_POST['txtTelefone']."' where oid_telefone = ".$_GET['telefone'];

			mysql_query($sql);

			header("location:loja.php");


		}
?>