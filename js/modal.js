$(document).ready(function(){
	$("a[rel=modal]").click( function(ev){
		ev.preventDefault();
		console.log($(this).attr("id"));
		var id = $(this).attr("href");
 
		var alturaTela = $(document).height();
		var larguraTela = $(window).width();
	 
		//colocando o fundo preto
		$('#mascara').css({'width':larguraTela,'height':alturaTela});
		$('#mascara').fadeIn(1000); 
		$('#mascara').fadeTo("slow",0.8);
 
		var left = ($(window).width() /2) - ( $(id).width() / 2 );
		var top = ($(window).height() / 2) - ( $(id).height() / 2 );
	 
		$(id).css({'top':top,'left':left});
		$(id).show();
		
		$.get("crud/contato_detalhe.php", {id_contato: $(this).attr("id")}, function(dados){
			var json = $.parseJSON(dados)[0];
			
			$("#nomeJs").text(json.nome);
			$("#emailJs").text(json.email);
			$("#telJs").text(json.telefone);
			$("#motivoJs").text(json.motivo);
			$("#dhJs").text(json.dt);
			$("#comentarioJs").text(json.comentario);
			$("#apagar").attr("href", "?modo=excluir&oid_contato=" + json.oid_contato);
			
		});
	});
	
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
	
	$('.cancelar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
});