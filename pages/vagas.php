<?php
include 'menu.php'
?>
<div id="page-content-wrapper">
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
				<!-- Fim da barra de procura -->
			</body>
			</html>