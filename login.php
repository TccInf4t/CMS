
<!DOCTYPE html>
<html>
<?php
	require_once('bd/conexao.php');
	require_once('crud/login.php');
	Conectar();

	if(isset($_POST['btnlogar'])){


		$verificacao=VerificarLogin($_POST['txtusuario'],$_POST['txtsenha']);

		if($verificacao == 2){

			header("location:index.php");

			$_SESSION['logado'] = 1;


		}else if($verificacao == 1){

			echo('<script type="text/javascript">
					alert("acesso negado!");
				</script>');

			$_SESSION['logado'] = 0;

		}else{

			echo('<script type="text/javascript">
					alert("Usuário inválido!");
				</script>');

			$_SESSION['logado'] = 0;

		}

	}

	
 ?>
	<head>
		<title>Entrar CMS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style/styleLogin.css">
		<link rel="icon" href="img/favicon.png" type="image/gif"> 
	</head>
	<body>
		<div id="mascara">
		</div>
		<div id="div-login">
			<h2>Sistema de Gerenciamento de Site</h2>
			<form action="#" method="post" name="formulario cms">
	<label>Usuário:</label>
		<input type="text" name="txtusuario" class="txtLogin" placeholder="Digite o nome do usuário" id="user" required="required">
	<label>Senha:</label>
		<input type="password" name="txtsenha" class="txtLogin" placeholder="Digite sua senha" id="senha" required="required">
		<input type="submit" name="btnlogar" id="btnEntrar" value="Entrar">
</form>	
		</div>
	</body>
</html>