$(function(){
      //recebera sómente numeros
       $('#telefone').mask('(99) 9999-9999');
             
      //recebera somente numeros com a respectiva regra
      $('#cpf').mask('999.999.999-99');
      $('#cep').mask('99999-999');
      $('#cnpj').mask('99.999.999/9999-99');

      $("#data").mask("99/99/9999");
 
      $("#hora").mask("99:99");

      //recebera sómente letras max 8 digitos
       $('#nome').mask('aaaaaaaa');
 
      //recebera letras e numeros e no maximo 8 digitos           
      $('#apelido').mask('********');
});
