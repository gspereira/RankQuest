$(document).ready(function(){

        
    $('#cadastrar_aluno').click(function(){
        $('form#aluno').off();
        $('form#aluno').submit(function(e){
            e.preventDefault();
            var dados = $('form#aluno').serialize();
            $.ajax({
                url:'../processa/processa_cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
        });

    });

    $('#cadastrar_professor').click(function(){
        $('form#professor').off();
        $('form#professor').submit(function(e){
            e.preventDefault();
            var dados = $('form#professor').serialize();
            $.ajax({
                url:'../processa/processa_cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
        });
    });
    $('#cadastrar_empresa').click(function(){
        $('form#empresa').off();
        $('form#empresa').submit(function(e){
            e.preventDefault();
            var dados = $('form#empresa').serialize();
            $.ajax({
                url:'../processa/processa_cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
        });
    });

    $('#envia_login').click(function(){
    	$('form#login-form').off();
    	$('form#login-form').submit(function(e){
        	e.preventDefault();
        	var dados = $('form#login-form').serialize();
        	$.ajax({
	        	url:'../processa/processa_login.php',
	        	type:'POST',
	        	dataType:'html',
	        	data: dados,
		        success: function(data){
	        	$('#resultado').empty().html(data);

	        	}
    		});
  		});
	});

});
