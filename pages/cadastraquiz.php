<?php
include "menu.php";
include  "../processa/conecta.php";
	$sql1 = $mysqli->prepare('select id,descricao from categoria');
	$sql1->execute();
	$sql1->bind_result($id,$descricao);	
	$sql1->store_result();


	$sql2 = $mysqli->prepare('select id,descricao from dificuldade');
	$sql2->execute();
	$sql2->bind_result($id,$descricao);	
	$sql2->store_result();


?>
   

<div class="container-fluid">


	<ul class="nav nav-tabs" id="myTab" role="tablist">
	 	<li class="nav-item">
	    	<a class="nav-link active" id="tab_pergunta" data-toggle="tab" href="#cadastro_pergunta" role="tab" aria-controls="profile" aria-selected="true">Cadastro de pergunta</a>
		</li>
	  <li class="nav-item">
	    	<a class="nav-link " id="tab_quiz" data-toggle="tab" href="#cadastro_quiz" role="tab" aria-controls="cadastro_quiz" aria-selected="false">Cadastro de quiz</a>
	  </li>
	</ul>


	<div class="tab-content" id="myTabContent">



  		<div class="tab-pane fade show active" id="cadastro_pergunta" role="tabpanel" aria-labelledby="tab_pergunta">
  	<form id=form_pergunta>

  			<h2>Cadastrar Perguntas</h2>
		    <div class="col-lg-10">
				<div id="combo_perguntas" class="form-group">
					
		            <select  id='combo_categorias' type='text' name='combo_categorias' required>

		            	<option value=''>Selecione uma categoria </option>
		            	<?php 	while ($sql1->fetch()){
											echo	"<option value='$id'>$descricao </option>" ;
										}	
								?>	
		           </select>


				 	<select  id='combo_assunto' type='text' name='combo_assunto' required>
		           		<option value="">Selecione o assunto </option>
		           </select>

		           <select  id='combo_dificuldade' type='text' name='combo_dificuldade' required>
		           	<option value="">Selecione a dificuldade </option>
		           			<?php 	while ($sql2->fetch()){
											echo	"<option value='$id'>$descricao </option>" ;
										}	
								?>	
		           </select>


		    </div>


			

		        </div>

		         <div class="form-group col-lg-6">

		        <label for="title">Enunciado:</label>
		        <textarea rows='3' name='enunciado' id='enunciado' type="text" class="form-control" required></textarea>
		        <label for="title">Alternativas:</label><br>
		        <label for="title">Lembre-se de indicar a alternativa correta:</label><br>


		        <input name='ind_correta' type='radio' value='a1' required>
		 		<input name='a1' id='a1' type="text" class="form-control" placeholder="Alternativa A" required>
		 		<input name='ind_correta' type='radio' value='a2' required>
		        <input name='a2' id='a2' type="text" class="form-control" placeholder="Alternativa B" required>
		        <input name='ind_correta' type='radio' value='a3' required>
		        <input name='a3' id='a3' type="text" class="form-control" placeholder="Alternativa C" required>
		        <input name='ind_correta' type='radio' value='a4' required>
		        <input name='a4' id='a4' type="text" class="form-control" placeholder="Alternativa D" required>
		        <input name='ind_correta' type='radio' value='a5' required>
		        <input name='a5' id='a5' type="text" class="form-control" placeholder="Alternativa E" required>
 				 <input name='funcao' type="hidden" class="form-control" id="tipo" value="cadastro_pergunta" required>
 				  <input name='autor_id' type="hidden" class="form-control" id="tipo" value="<?php echo $_SESSION['id'];?>" required>



			
		    </div>
		      <button id="cadastrar_pergunta" class="btn btn-primary">Cadastrar Pergunta</button>
			<div class='form-group col-lg-4' id="resultado"></div>
	</form>
	</div>




	<!--   QUIZZZZ   -->

		<div class="tab-pane fade " id="cadastro_quiz" role="tabpanel" aria-labelledby="tab_quiz">
		  	<form id='form-quiz'>

			    <h2>Cadastrar Quiz</h2>
			    <div class="col-lg-6">
					<div class="form-group">
						
			            <select  id='combo_categofdrias' type='text' name='combo_categorias'>
			            	<option value="">Selecione a categoria </option>
			           </select>
					 	<select  id='combo_assufdnto' type='text' name='combo_assunto'>
			           		<option value="">Selecione o assunto </option>
			           </select>
			        </div>
			    </div>


			    <div class="form-group col-lg-6">

			        <label for="title">Título do Quiz:</label>
			        <input name='titulo' id='titulo' type="text" class="form-control">
					<label for="comment">Descrição do Quiz:</label>
			        <textarea name='descricao' class="form-control" rows="5" id="descricao"></textarea>

			    </div>



		 <!-- BARRA DE FILTRO   -->
			<div class="row">
			        <div class="col-lg-10">
			            <!-- Barra de procura -->
			            <div class="input-group">
			                <input type="text" class="form-control">
			                <div class="dropdown dropdown-lg">
			                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			                        <i class="fa fa-filter"></i>
			                    </button>
			                    <div class="dropdown-menu dropdown-menu-right" role="menu">
			                       
			                            <label for="filter">Filtros</label>
			                            <hr>
			                            <div class="form-group row">
			                            
			                                <div class="col-sm-6">
			                                    <select class="custom-select" >
			                                        <option selected>Categoria</option>
			                                        <option></option>
			                                    </select>
			                                </div>
			                            </div>
			                            <div class="form-group row">
			                        
			                                <div class="col-sm-4">
			                                    <select class="custom-select" name='filtro_assunto' ">
			                                        <option selected>Assunto</option>
			                                        <option></option>
			                                    </select>
			                                </div>
			                            </div>
			                            <div class="form-group row">
			                        
			                                <div class="col-sm-6">
			                                    <select class="custom-select" name='filtro_dificuldade'">
			                                        <option selected>Dificuldade</option>
			                                        <option></option>
			                                    </select>
			                                </div>
			                            </div>
			                            <hr>
			                            <button type="submit" class="btn btn-primary pull-right">Aplicar</button>
			                        
			                    </div>
			                </div>
			                <div class="input-group-btn">
			                    <button type="button" class="btn btn-secondary">
			                        <i class="fa fa-search" aria-hidden="true"></i>
			                    </button>
			                </div>
			            </div>
			        </div>
			    </div>
			    <!-- BARRA DE FILTRO   -->



		 <table id=table_perguntas class="table">
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Perguntas</th>
			                <th>Dificuldade</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                
							<td><input type='checkbox'></td>
							<td data-toggle="tooltip" data-placemente="top" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non natus enim ea inventore tempore quasi saepe culpa totam nihil pariatur quidem doloremque corporis vitae at suscipit quibusdam ex, optio. Porro?">Mark</td>
							<td data-toggle="tooltip" data-placemente="top" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non natus enim ea inventore tempore quasi saepe culpa totam nihil pariatur quidem doloremque corporis vitae at suscipit quibusdam ex, optio. Porro?">Otto</td>

			                
			            </tr>
			           
			        </tbody>
			    </table>
			    <button id="cadastrar_quiz" class="btn btn-primary">Cadastrar Quiz</button>



			</form>
  		</div>
	</div>	
</div>

</body>
</html>