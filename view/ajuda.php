<!DOCTYPE html>
<html>
<head>
	<title>Ajuda ?</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/style-padrao.css">
	<link rel="stylesheet" type="text/css" href="../style/style-conteudo.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/acordion.js"></script>
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
				<!--<img src="img/logo.png">
			--></div>
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
			 ?>
			 	<div class="accordion">
				    <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-1">
				        	Campos Obrigatórios
				        </a>
				        <div id="accordion-1" class="accordion-section-content">
				            <p class="text-ajuda">
				            	Em todos os formularios existem campos que são importantes e se não forem preenchidos corretamente o CMS pode acusar um erro
				            </p>
				            <p class="text-ajuda">
				            	Os campos que estão marcados com um * na frente são obrigatórios para um cadastro com sucesso
				            </p>
				        </div>
				    </div>
				    <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-2">
				        	Esqueci minha senha
				        </a>
				        <div id="accordion-2" class="accordion-section-content">
				            <p class="text-ajuda">
				            	No CMS não é possível redifinir ou recuperar a senha do usuário,apenas no software Desktop.
				            	Entrar em contato com o suporte da Onpeças 
				            </p>
				        </div>
				    </div>
				    <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-3">
				        	Como sair do CMS?
				        </a>
				        <div id="accordion-3" class="accordion-section-content">
				            <p class="text-ajuda">
				            	Clicar no botão logogff no canto superior direito da tela

				            </p>
				        </div>
				    </div>
				    <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-4">
				        	Como cadastrar um novo usuário?
				        </a>
				        <div id="accordion-4" class="accordion-section-content">
				            <p class="text-ajuda">
				            	No CMS não é possível,apenas no software Desktop.
				            	Entrar em contato com o suporte da Onpeças 
				            </p>
				        </div>
				    </div>
				    <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-5">
				        	Tabela de Registros
				        </a>
				        <div id="accordion-5" class="accordion-section-content">
				            <p class="text-ajuda">
				            	Icones que representas as ações de detalhes,excluir e editar

				            </p>
				        </div>
				    </div>
				     <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-6">
				        	Não consigo visualizar os registros completos
				        </a>
				        <div id="accordion-6" class="accordion-section-content">
				            <p class="text-ajuda">
				            	icone de de detalhes para visualizar o registro com todas as informações completas

				            </p>
				        </div>
				    </div>
				    <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-7">
				        	Erro ao cadastrar imagem
				        </a>
				        <div id="accordion-7" class="accordion-section-content">
				            <p class="text-ajuda">
				            	tamanho da imagem, verificar a extensão do arquivo

				            </p>
				        </div>
				    </div>
				</div>
		</div>
		<footer>
			<h3>OnPeças ©</h3>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>