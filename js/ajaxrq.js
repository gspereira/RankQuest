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




    $('#cadastrar_pergunta').click(function(){
        $('form#form_pergunta').off();
        $('form#form_pergunta').submit(function(e){
            e.preventDefault();
            var dados = $('form#form_pergunta').serialize();
            
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





    $('#cadastrar_quiz').click(function(){
        $('form#form_quiz').off();
        $('form#form-quiz').submit(function(e){
            e.preventDefault();
            var dados = $('form#form-quiz').serialize();
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



    $('#combo_categorias').click(function(){
        
        var categoria = $('#combo_categorias').serialize();

        $.ajax({
            url:'../processa/processa_combo.php',
            type:'POST',
            dataType:'html',
            data: categoria,
            success: function(data){
          
                $('#combo_assunto').empty().html(data);
            }   
        });
    });


     $('#combo_categorias2').click(function(){
        
        var categoria = $('#combo_categorias2').serialize();

        $.ajax({
            url:'../processa/processa_combo.php',
            type:'POST',
            dataType:'html',
            data: categoria,
            success: function(data){
          
                $('#combo_assunto2').empty().html(data);
            }   
        });
    });

 $('#combo_categorias3').click(function(){
        
        var categoria = $('#combo_categorias3').serialize();

        $.ajax({
            url:'../processa/processa_combo.php',
            type:'POST',
            dataType:'html',
            data: categoria,
            success: function(data){
          
                $('#combo_assunto3').empty().html(data);
            }   
        });
    });




});
