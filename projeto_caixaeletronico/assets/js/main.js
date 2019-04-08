$(document).ready(function(){
	//VALIDAÇÃO DO LOGIN
	$("#agencia").mask("0000"); // campo agencia é obrigado ter no máximo 4 digitos
	$('#conta').mask("00000");
	$('#senha').mask("AAAAAAAAAAAAAAA");

	$('#senha').keyup(function(event){
		if (event.getModifierState("CapsLock")) {
			$('#senhaCaps').show();
		}else{
			$('#senhaCaps').hide();
		}
	});

	$("#loginForm").validate({
		rules:{
			agencia:{
				required:true, // o campo agencia é obrigado a ser preenchido 
				minlength:4  //o campo agencia é obrigado a ter 4 digitos preenchido. 
				},
			conta:{
				required: true,
				minlength:5
				},
			senha:{
				required:true,
				minlength:3
				}			
			},
		messages:{
			agencia:{
				required:"Campo obrigatório", // mensagem do campo agencia quando não é preenchido
				minlength:"Digite 4 dígitos"  // // mensagem do campo agencia quando tem menos de 4 digitos
				},
			conta:{
				required:"Campo obrigatório",
				minlength:"Digite 5 dígitos"
				},
			senha:{
				required:"Campo obrigatório",
				minlength:"Digite pelo menos 3 caracteres"
				}
			}
		});

});

