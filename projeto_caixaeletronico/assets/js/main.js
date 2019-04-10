$(document).ready(function(){
	//VALIDAÇÃO DO LOGIN
	$("#agencia").mask("0000"); // campo agencia é obrigado ter no máximo 4 digitos
	$('#conta').mask("00000");
	$('#senha').mask("AAAAAAAAAAAAAAA");

function verificarCapslock(){ //funçao que verifica o estado do capslock
		$('#senha').keyup(function(event){
		if (event.originalEvent.getModifierState("CapsLock")) { 
			$('#senhaCaps').show();
		}else{
			$('#senhaCaps').hide();
		}
	});
}

$('#senha').focus(verificarCapslock()); //chamando a funçao de verificar o capslock

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


$('.alert').delay(1900).fadeOut(); // alert de ERRO senha do login desaparecer com o tempo


// JS INDEX NAV
$('#btn-mob').click(function(){
	$('.sidebar').show().css('width','100%');
});

$('#btn-close').click(function(){
	$('.sidebar').hide().css('width','0%');
});


});

