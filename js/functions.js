$(function(){
	/*Funções que ocultam e mostram a lista de usuários do sexo feminino da página lista_usuarios.php*/
	$('input[name=hide-users-feminino]').click(function(){
		$('#users-feminino').hide();
		$('input[name=hide-users-feminino]').hide();
		$('input[name=show-users-feminino]').css('display','inline-block');
	})

	$('input[name=show-users-feminino]').click(function(){
		$('#users-feminino').show();
		$('input[name=show-users-feminino]').hide();
		$('input[name=hide-users-feminino]').css('display','inline-block');
	})

	/*Funções que ocultam e mostram a lista de usuários do sexo masculino da página lista_usuarios.php*/
	$('input[name=hide-users-masculino]').click(function(){
		$('#users-masculino').hide();
		$('input[name=hide-users-masculino]').hide();
		$('input[name=show-users-masculino]').css('display','inline-block');
	})

	$('input[name=show-users-masculino]').click(function(){
		$('#users-masculino').show();
		$('input[name=show-users-masculino]').hide();
		$('input[name=hide-users-masculino]').css('display','inline-block');
	})

	/*Máscaras para os campos de formulário*/
	$('input[name=contato]').mask('(99) 99999-9999');
	$('input[name=altura]').mask('9.99');
	$('input[name=mensagem_data_nascimento]').mask('99/99/9999');
	$('input[name=mensagem_contato]').mask('(99) 99999-9999');

})