<?php
include "menu.php";
?>

<div class="container-fluid">
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
						<form class="form-horizontal" role="form">
							<label for="filter">Filtros</label>
							<hr>
							<div class="form-group row">
								<label for="searchCurso" class="col-sm-2 col-form-label">Curso</label>
								<div class="col-sm-10">
									<select class="custom-select" id="searchCurso">
										<option selected>Escolha um curso</option>
										<option></option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="searchAssunto" class="col-sm-2 col-form-label">Assunto</label>
								<div class="col-sm-10">
									<select class="custom-select" id="searchAssunto">
										<option selected>Escolha um tema</option>
										<option></option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="searchNivel" class="col-sm-2 col-form-label">Nível</label>
								<div class="col-sm-10">
									<select class="custom-select" id="searchNivel">
										<option selected>Escolha um nível</option>
										<option></option>
									</select>
								</div>
							</div>
							<hr>
							<button type="submit" class="btn btn-primary pull-right">Aplicar</button>
						</form>
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
</div><br><br>
<div class="container-fluid">
	<h2>Cadastrar Quiz</h2><br>
	<div class="col-lg-3">

		<form class="form-signin well">
			<div class="form-group">
				<select class="form-control" id='combo_categorias' type='text' name='combo_categorias'>
					<option value="">Selecione a categoria </option>
				</select>
			</div>
		</form>
	</div>
	<div id="float-right" class="col-lg-3">

		<form class="form-signin well">
			<div class="form-group">
				<select class="form-control" id='combo_categorias' type='text' name='combo_categorias'>
					<option value="">Selecione a categoria </option>
				</select>
			</div>
		</form>
	</div>
	<div class="form-group">
		<label for="title">Título do Quiz:</label>
		<input type="text" class="form-control" id="title">
	</div>
	<div class="form-group">
		<label for="comment">Descrição do Quiz:</label>
		<textarea class="form-control" rows="5" id="comment"></textarea>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Perguntas</th>
				<th>Dificuldade</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">  <div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
					</label>
				</div></th>
				<td data-toggle="tooltip" data-placemente="top" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non natus enim ea inventore tempore quasi saepe culpa totam nihil pariatur quidem doloremque corporis vitae at suscipit quibusdam ex, optio. Porro?">Mark</td>
				<td data-toggle="tooltip" data-placemente="top" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non natus enim ea inventore tempore quasi saepe culpa totam nihil pariatur quidem doloremque corporis vitae at suscipit quibusdam ex, optio. Porro?">Otto</td>
			</tr>
			<tr>
				<th scope="row">  <div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
					</label>
				</div></th>
				<td>Jacob</td>
				<td>Thornton</td>
			</tr>
			<tr>
				<th scope="row">  <div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
					</label>
				</div></th>
				<td>Larry</td>
				<td>the Bird</td>
			</tr>
		</tbody>
	</table>
</body>
</html>