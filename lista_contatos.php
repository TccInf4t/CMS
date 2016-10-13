<?php 
	require_once('bd/conexao.php');
	Conectar();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$oid_motivo = $_POST['id'];
		
		$sql="select c.*, mc.nome as motivo from contato as c
		inner join motivocontato as mc on(c.oid_motivocontato = mc.oid_motivocontato)
		where c.oid_motivocontato = ". $oid_motivo .";";
		
		//echo($sql . "<br />");
		//variável $select para receber os registros do bando de dado //
		$select= mysql_query($sql);
		
		// $rs == Record Set == objeto de retorno de dados// 
		// converter $select que foi retornado pelo BD e transformar em um array(matriz)//
		//A matriz é guardada na variavel $rs
			
		$cont=0;
		while($rs=mysql_fetch_array($select))
		{
			if($cont%2==0)
			{
				$cor="#9999999";
			}
			else
			{
				$cor="#FFFFFF";
			}
				
?>
<tr class="itemcontato">
	<td><?php echo ($rs['motivo']); ?></td>
	<td><?php echo ($rs['nome']); ?></td>
	<td>
		<a href="#janelaDetalhes" rel="modal" id="<?php echo($rs['oid_contato']); ?>">
			<div class="opcoesRegistro" id="tabelaDetalhes"></div>
		</a>
	</td>
	<td>
	
		<!-- Botão de excluir da pagina contato-->
		<a href="contato.php?modo=excluir&oid_contato=<?php echo($rs['oid_contato'])?>">
			<div class="opcoesRegistro" id="tabelaDeletar"></div>
		</a>
	</td>
</tr>

<?php
			$cont++;
		} 
		
	}else{	
		$sql="select c.*, mc.nome as motivo from contato as c
			inner join motivocontato as mc on(c.oid_motivocontato = mc.oid_motivocontato);";

		//variável $select para receber os registros do bando de dado //
		$select= mysql_query($sql);

		$cont=0;
		while($rs=mysql_fetch_array($select))
		{
			if($cont%2==0)
			{
				$cor="#9999999";
			}
			else
			{
				$cor="#FFFFFF";
			}
				
?>
<tr class="itemcontato">
	<td><?php echo ($rs['motivo']); ?></td>
	<td><?php echo ($rs['nome']); ?></td>
	<td>
		<a href="#janelaDetalhes" rel="modal" id="<?php echo($rs['oid_contato']); ?>">
			<div class="opcoesRegistro" id="tabelaDetalhes"></div>
		</a>
	</td>
	<td>
	
		<!-- Botão de excluir da pagina contato-->
		<a href="contato.php?modo=excluir&oid_contato=<?php echo($rs['oid_contato'])?>">
			<div class="opcoesRegistro" id="tabelaDeletar"></div>
		</a>
	</td>
</tr>

<?php
			$cont++;
		} 
	}
?>