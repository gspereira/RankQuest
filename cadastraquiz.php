<?php
include 'navbar.php'
?>
<div style="height: 1000px" class="content-wrapper">
	<div class="container-fluid">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="#cadastra_pergunta"  data-toggle="tab" role="tab" aria-controls="profile" aria-selected="true">Cadastro de Pergunta</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#cadastro_quiz"  data-toggle="tab" role="tab" aria-controls="cadastro_quiz" aria-selected="false">Cadastro de Quiz</a>
			</li>
		</ul>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="cadastra_pergunta" role="tabpanel" aria-labelledby="tab_pergunta">
			<select style="margin-top: 10px" class="selectpicker" data-style="btn-info">
				<option selected>Selecione uma categoria</option>
			</select>
			<select style="margin-top: 10px" class="selectpicker" data-style="btn-info">
				<option selected>Selecione uma assunto</option>
			</select>
			<select style="margin-top: 10px" class="selectpicker" data-style="btn-info">
				<option selected>Selecione a dificuldade</option>
			</select>
			<div class="form-group"> <!-- Message field -->
				<label class="control-label " for="message">Enunciado:</label>
				<textarea class="form-control" cols="40" id="message" name="message" rows="6"></textarea>
			</div>
			<label for="title">Alternativas:</label><br>
			<label for="title">Lembre-se de indicar a alternativa correta:</label><br>

			<input type="radio" name="reason" value=""><input type="text" name="other_reason" placeholder="Alternativa A" style="width: 80%; margin-left: 1%; margin-bottom: 10px"/><br>
			<input type="radio" name="reason" value=""><input type="text" name="other_reason" placeholder="Alternativa B" style="width: 80%; margin-left: 1%; margin-bottom: 10px"/><br>
			<input type="radio" name="reason" value=""><input type="text" name="other_reason" placeholder="Alternativa C" style="width: 80%; margin-left: 1%; margin-bottom: 10px"/><br>
			<input type="radio" name="reason" value=""><input type="text" name="other_reason" placeholder="Alternativa D" style="width: 80%; margin-left: 1%; margin-bottom: 10px"/><br>
			<input type="radio" name="reason" value=""><input type="text" name="other_reason" placeholder="Alternativa E" style="width: 80%; margin-left: 1%; margin-bottom: 10px"/><br>

			<button id="cadastrar_pergunta" class="btn btn-primary">Cadastrar Pergunta</button>
		</div>


		<div class="tab-pane fade" id="cadastro_quiz" role="tabpanel" aria-labelledby="tab_quiz">
			<select style="margin-top: 10px" class="selectpicker" data-style="btn-info">
				<option selected>Selecione uma categoria</option>
			</select>
			<select style="margin-top: 10px" class="selectpicker" data-style="btn-info">
				<option selected>Selecione uma assunto</option>
			</select>

			<div class="form-group">
				<label for="exampleTextarea">Título do Quiz:</label>
				<textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
			</div>
			<div class="form-group">
				<label for="exampleTextarea">Descrição do Quiz:</label>
				<textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
			</div>
			<div class="row">
				<div style=" margin-bottom: 15px;" class="col-lg-10 col-md-8">
					<input class="form-control" type="text" placeholder="Search">
				</div>
			</div>
			<div class="form-group">
				<table class="table table-bordered">
					<thead class="thead-inverse">
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
							<td>@mdo</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button id="cadastrar_pergunta" class="btn btn-primary">Cadastrar Pergunta</button>
		</div>
	</div>