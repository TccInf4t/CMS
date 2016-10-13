<?php
	require_once("../bd/conexao.php");
	
	Conectar();
	
	$id = $_GET['id_contato'];
	
	$query = "select c.* , mc.nome as motivo from contato as c inner join motivocontato as mc on(c.oid_motivocontato = mc.oid_motivocontato) where oid_contato = ". $id .";";
	$exec = mysql_query($query);
	
	$lista = array();
	
	while($rs = mysql_fetch_array($exec)){
		$lista[] = $rs;
	}
	
	$json = json_encode($lista);
	echo($json);
?>