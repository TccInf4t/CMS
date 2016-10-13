<?php

	session_start();
	if($_SESSION['logado'] != 1){

		header("location:login.php");

	}

	if(isset($_POST['btnSair'])){

		$_SESSION['logado'] = 0;
		header('location:login.php');

	}

?>
			<div class="window" id="janela">
				<a href="#" class="fechar">
					<div id="close"></div>
				</a>
				<h1>Sair do CMS</h1>
				<span class="textSair">
				Tem certeza que você deseja sair do sistema?
				</span>
					<form action="" name="formularioSair" method="post">
						<input type="submit" value="Sim" name="btnSair" class="btnLogoff" id="sim">
						<a href="#" class="cancelar">
						<input type="submit" value="Não" name="" class="btnLogoff" id="nao">
						</a>
					</form>
			</div>
			<!--FIM DA JANELA MODAL-->
			<a href="#janela" rel="modal">
				<div class="logoff">
				<span class="textLogoff">Logoff</span>
				</div>
			</a>
			<a href=".." target="blank">
				<div class="logoff">
					<span class="textLogoff">Ir para o site</span>
				</div>
			</a>
			<div id="logo">
			</div>
			<div id="caixaInfo">
				<span class="descInfo">Usuário:</span>
				<span class="textInfo"><?php echo($_SESSION['nome']); ?></span>
				<span class="descInfo">Grupo de usuário:</span>
				<span class="textInfo"><?php echo($_SESSION['grupo']); ?></span>
			</div>	