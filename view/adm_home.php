<!DOCTYPE html>
<html>
<head>
	<title>Adm - Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style-padrao.css">
	<link rel="stylesheet" type="text/css" href="../style/style-conteudo.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/preview.js"></script>
	<link rel="icon" href="img/favicon.png" type="image/gif"> 
</head>
<body>
	<!-- div para cobrir o corpo efeito modal java script -->
	<div id="mascara">
	</div>
	<div id="faixa">
	</div>
	<div id="corpo">
		<header>
			<!--DIV DA JANELA MODAL EFEITO JAVA SCRIPT-->
			<div class="window" id="janela">
				<a href="#" class="fechar"><div id="close"></div></a>
				<h2>Sair do CMS</h2>
				<p class="text-sair">Tem certeza que você deseja sair do sistema?</p>
					<form action="sair.php" name="" method="post">
						<input type="submit" value="Sim" name="btnsair" class="btn-logoff" id="sim">
						<a href="#" class="cancelar">
						<input type="submit" value="Não" name="" class="btn-logoff" id="nao">
						</a>
					</form>
			</div>
			<!--FIM DA JANELA MODAL-->
			<a href="#janela" rel="modal">
				<div class="logoff">
				<p class="text-logoff">Logoff</p>
				</div>
			</a>
			<a href="index.php">
				<div class="logoff">
					<p class="text-logoff">Ir para o site</p>
				</div>
			</a>
			<div id="logo">
				<!--<img src="img/logo.png">-->
			</div>
			<div id="div-info">
				<p class="desc-info">Usuário:</p>
				<span class="text-info">Lucas Augusto</span>
				<p class="desc-info">Nível de usuário:</p>
				<span class="text-info">Administrador Geral</span>
			</div>	
		</header>
		<div id="conteudo">
			<?php 
				require_once('menu.php');
				require_once('adm_home/admHomeView.php');
			 ?>
			
		</div>
		<footer>
			<h3>OnPeças ©</h3>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>