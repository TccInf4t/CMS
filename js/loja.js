$(function(){
	$("#cbEstado").change(function(){
		var id = $(this).val();

		$.get("cidades.php", {id: id}, function(dados){
			$("#cbCidade").html(dados);
		});
	});

});

$(function(){
		var id = $("#cbEstado").val();

		$.get("cidades.php", {id: id}, function(dados){
			$("#cbCidade").html(dados);
		});
});

