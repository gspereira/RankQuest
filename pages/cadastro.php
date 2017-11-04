<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link href="../css/rankquest.css" rel="stylesheet">
	<link rel="stylesheet" href="../addons/fa/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<form class="form-horizontal">
			<fieldset>

				<!-- Form Name -->
				<legend>Cadastro de Usuário</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="nome">Nome:</label>  
					<div class="col-md-4">
						<input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="email">E-mail:</label>  
					<div class="col-md-4">
						<input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="sexo">Sexo:</label>
					<div class="col-md-4">
						<select id="sexo" name="sexo" class="form-control">
							<option value="Não informado">Não informado</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select>
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="user">Você é:</label>
					<div class="col-md-4">
						<select id="user" name="user" class="form-control">
							<option value="Não informado">Não informado</option>
							<option value="Aluno">Aluno</option>
							<option value="Empresa">Empresa</option>
						</select>
					</div>
				</div>
				<!-- Password input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="senha">Senha:</label>
					<div class="col-md-4">
						<input id="senha" name="senha" type="password" placeholder="" class="form-control input-md">

					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="cadastrar"></label>
					<div class="col-md-4">
						<button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>

</body>
</html>