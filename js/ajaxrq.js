$(document).ready(function(){

        
    $('#cadastrar_aluno').click(function(){
        $('form#aluno').off();
        $('form#aluno').submit(function(e){
            e.preventDefault();
            var dados = $('form#aluno').serialize();
            $.ajax({
                url:'processa/processa_cadastros.php',
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
                url:'processa/processa_cadastros.php',
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
                url:'processa/processa_cadastros.php',
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
	        	url:'processa/processa_login.php',
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
                url:'processa/processa_cadastros.php',
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
                url:'processa/processa_cadastros.php',
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
            url:'processa/processa_combo.php',
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
            url:'processa/processa_combo.php',
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
            url:'processa/processa_combo.php',
            type:'POST',
            dataType:'html',
            data: categoria,
            success: function(data){
          
                $('#combo_assunto3').empty().html(data);
            }   
        });
    });


 $(document).on("click","#anterior",function(){
    var dados = $('form').serialize();
        $.ajax({
            url:'processa/anterior_prg.php',
            type:'POST',
            dataType:'html',
            data: dados,
            success: function(data){
                
                $('#resultado').empty().html(data);
            }   
        });
    });
    
     $(document).on("click","#proxima",function(){
        
        var dados = $('form').serialize();
        $.ajax({
            url:'processa/proxima_prg.php',
            type:'POST',
            dataType:'html',
            data: dados,
            success: function(data){
                
                $('#resultado').empty().html(data);
            }   
        });
    });
    
    
    $(document).on("click","#finalizar",function(){
          var confirmacao = confirm("Tem certeza que deseja finalizar?");
          if (confirmacao == true){
        var dados = $('form').serialize();
        $.ajax({
            url:'processa/grava_resultado.php',
            type:'POST',
            dataType:'html',
            data: dados,
            success: function(data){


        $('#modal').empty().html(data);
        $('#btnTrigger').click();
                
                
            }   
        });
    }});

    $(document).on("click","#close",function(){
        
        top.location.href="dashboard.php"
    
    });


  $('#combo_categorias').click(function(){
        
        var categoria = $('#combo_categorias').serialize();

        $.ajax({
            url:'processa/processa_combo.php',
            type:'POST',
            dataType:'html',
            data: categoria,
            success: function(data){
          
                $('#combo_assunto').empty().html(data);
            }   
        });
    });




   $(document).on("click","#aplicar_filtro",function(){

        $('form#filtros').off();
        $('form#filtros').submit(function(e){
            e.preventDefault();
            var dados = $('form#filtros').serialize();
            $.ajax({
                url:'processa/filtro.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    });

   $(document).on("keyup","#titulo",function(){
        
            var dados = $('#titulo').serialize();
            $.ajax({
                url:'processa/filtro.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    

       $(document).on("click","#salvar",function(){

        $('form#minhaconta').off();
        $('form#minhaconta').submit(function(e){
            e.preventDefault();
            var dados = $('form#minhaconta').serialize();
            $.ajax({
                url:'processa/altera_cadastro.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
        
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    });

             $(document).on("click","#salvar2",function(){

        $('form#alterasenha').off();
        $('form#alterasenha').submit(function(e){
            e.preventDefault();
            var dados = $('form#alterasenha').serialize();
            $.ajax({
                url:'processa/altera_senha.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
      
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    });

        $(document).on("click","#cadastra_vaga",function(){

        $('form#vaga').off();
        $('form#vaga').submit(function(e){
            e.preventDefault();
            var dados = $('form#vaga').serialize();
            $.ajax({
                url:'processa/cadastra_vaga.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
      
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    });


   $(document).on("click","#myquizaplicar_filtro",function(){

        $('form#myquiz').off();
        $('form#myquiz').submit(function(e){
            e.preventDefault();
            var dados = $('form#myquiz').serialize();
            $.ajax({
                url:'processa/filtro_myquiz.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    });

   $(document).on("keyup","#myquiztitulo",function(){
        
            var dados = $('#myquiztitulo').serialize();
            $.ajax({
                url:'processa/filtro_myquiz.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });

   $(document).on("keyup","#filtro_vaga",function(){
        
            var dados = $('#filtro_vaga').serialize();
            $.ajax({
                url:'processa/filtro_vagas.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });







 
});
