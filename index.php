<!DOCTYPE html>
<html>
<head>
	<title>Ajuda</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/stylePadrao.css">
	<link rel="stylesheet" type="text/css" href="style/styleAjuda.css">

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/acordion.js"></script>

	<link rel="icon" href="img/favicon.png" type="image/gif"> 
</head>
<body>
<!-- div para cobrir o corpo 100% efeito modal java script -->  
	<div id="mascara">
	</div>
	<div id="faixa">
	</div>
	<div id="corpo">
		<header>
			<?php require_once('standard/header.php'); ?>
		</header>
		<div id="conteudo">
			<?php require_once('standard/menu.php'); ?>
			<h2>Guia de Ajuda ao Usuário</h2>
			<div class="accordion">
				    <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-1">
				        	Campos Obrigatórios
				        </a>
				        <div id="accordion-1" class="accordion-section-content">
				            <p>
				            	Em todos os formulários existem campos que são importantes que precisam ser preenchidos corretamente, caso contrário o CMS pode acusar algum erro.
				            	Os campos que estão marcados com um * na frente são obrigatórios para um cadastro com sucesso.
				            </p>
				            <p>
				            Exemplo:
				            </p>
				            	
				            <input type="text" name="txtTitulo" placeholder="Digite o título da da Dica" value="" class="inputAjuda">
				            <span class="obrigatorio">*</span>
				        </div>
				    </div>
				   <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-2">
				        	Esqueci minha senha
				        </a>
				        <div id="accordion-2" class="accordion-section-content">
				            <p class="text-ajuda">
				            	No CMS não é possível redifinir ou recuperar a senha do usuário,apenas no software Desktop.
				            	Entrar em contato com o suporte da Onpeças. 
				            </p>
				        </div>
				    </div>
				     <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-3">
				        	Como sair do CMS?
				        </a>
				        <div id="accordion-3" class="accordion-section-content">
				            <p class="text-ajuda">
				            	Clicar no botão logogff no canto superior direito da página.
				            </p>
				            <h1>Passo 1:</h1>
				            <img src="img/sair.png" alt="Imagem de como sair do CMS" title="Imagem de como sair do CMS" class="imgAjuda">
				             <h1>Passo 2:</h1>
				            <img src="img/sairCMS.png" alt="Imagem de como sair do CMS" title="Imagem de como sair do CMS" class="imgAjuda">
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
				        	Editar,visualizar detalhe e excluir um registro
				        </a>
				        <div id="accordion-5" class="accordion-section-content">
				            <p class="text-ajuda">
				            	Ícones que representam as ações de detalhes,excluir e editar:
				            </p>
				            <table>
				            	<tr>
				            		<td> <img src="icon/iconDeletar.png" class="iconesAjuda"></td>
				            		<td> Excluir/Apagar: Clicar no icone do registro</td>
				            	</tr>
				            	<tr>
				            		<td> <img src="icon/iconEditar.png" class="iconesAjuda"></td>
				            		<td> Editar/Atualizar: Clicar no icone do registro</td>
				            	</tr>
				            	<tr>
				            		<td> <img src="icon/iconDetalhes.png" class="iconesAjuda"></td>
				            		<td> Visualizar/Mostrar registro completo: Clicar no icone do registro</td>
				            	</tr>
				            </table>
				        </div>
				    </div>
				     <div class="accordion-section">
				        <a class="accordion-section-title" href="#accordion-6">
				        	Erro ao cadastrar imagem
				        </a>
				        <div id="accordion-6" class="accordion-section-content">
				            <p class="text-ajuda">
				            	O sistema aceita imagens com as seguintes extensões: PNG, JPG, JPEG e GIF.
				            </p>
				        </div>
				    </div>
				 	<div class="accordion-section">
				       <a class="accordion-section-title" href="#accordion-7">
				        	Não consigo visualizar os registros completos
				        </a>
				        <div id="accordion-7" class="accordion-section-content">
				        	<table>
				            	<tr>
				            		<td> <img src="icon/iconDetalhes.png" class="iconesAjuda"></td>
				            		<td> Ícone de detalhes para visualizar as informções completas do registro</td>
				            	</tr>
				            </table>

				             <img src="img/contatoAjuda.png" alt="Detalhes de um registro" title="Detalhes de um registro" class="imgAjuda">
				             <img src="img/contatoDetalhes.png" alt="Detalhes de um registro" title="Detalhes de um registro" class="imgAjuda">
				        </div>
				    </div>

				</div>
			
		</div>
		<footer>
			<h2>OnPeças ©</h2>
			<h3>Desenvolvido por Code Solution  2016</h3>
		</footer>
	</div>
</body>
</html>
