<html lang="pt-br">
<head>
  <title>RankQuest</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../css/rankquest.css" rel="stylesheet">
  <link rel="stylesheet" href="../addons/fa/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     <script src='../js/jquery-3.2.1.min.js'></script>
  	<script src='../js/ajaxrq.js'></script>
  	<script src='../js/rankquest.js'></script>


<!--LINKS PARA A TAB-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>

	<div class="container-fluid">
	




<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#tab_aluno">Cadastro de alunos</a></li>
    <li><a data-toggle="tab" href="#tab_professor">Cadastro de professores</a></li>
    <li><a data-toggle="tab" href="#tab_empresa">Cadastro de empresas</a></li>
   
  </ul>






<div class="tab-content">
<div id="tab_aluno" class="tab-pane fade in active">

		<div class="row">
			<div class="col-lg-10 page-title">
				<h2>Cadastro de alunos</h2>
				<hr>
			</div>
		</div>
		<div class="user-data">
			<div class="row">
				<div class="col-lg-5">

					<form id='aluno'>

						<div class="form-group">
							<input name='nome' type="text" class="form-control" id="nome" placeholder="Nome" required>
							<input name='cpf' type="text" class="form-control" id="cpf" placeholder="Cpf" required>
							<input name='dt_nascimento' type="text" class="form-control" id="dt_nascimento" placeholder="Data de nascimento" onfocus="(this.type='date')" required>
							<input name='telefone' type="text" class="form-control" id="telefone" placeholder="Telefone (opcional)">
							<input name='celular' type="text" class="form-control" id="celular" placeholder="Celular" required>
							<input name='email' type="email" class="form-control" id="email" placeholder="Email">
							<input name='login' type="text" class="form-control" id="login" placeholder="Login" required>
							<input name='senha' type="password" class="form-control" id="senha" placeholder="Senha">
							<input name='conf_senha' type="password" class="form-control" id="conf_senha" placeholder="Confirma senha">
							<input name='tipo' type="hidden" class="form-control" id="tipo" value="A" >
							<input name='funcao' type="hidden" class="form-control" id="tipo" value="cadastro_usuario" >
<hr>
						<button id="cadastrar_aluno" class="btn btn-default">Cadastrar</button>


						
							
						</div>
					</form>
				</div> 
			</div>
		</div>


	</div>



<div id="tab_professor" class="tab-pane fade">

		<div class="row">
			<div class="col-lg-10 page-title">
				<h2>Cadastro de professores</h2>
				<hr>
			</div>
		</div>

		<div class="user-data">
			<div class="row">
				<div class="col-lg-5">

					<form  id='professor'>

						<div class="form-group">
							<input name='nome' type="text" class="form-control" id="nome" placeholder="Nome" required>
							<input name='cpf' type="text" class="form-control" id="cpf" placeholder="Cpf" required>
							<input name='dt_nascimento' type="text" class="form-control" id="dt_nascimento" placeholder="Data de nascimento" onfocus="(this.type='date')" required>
							<input name='telefone' type="text" class="form-control" id="telefone" placeholder="Telefone (opcional)">
							<input name='celular' type="text" class="form-control" id="celular" placeholder="Celular" required>
							<input name='email' type="email" class="form-control" id="email" placeholder="Email">
							<input name='login' type="text" class="form-control" id="login" placeholder="Login" required>
							<input name='senha' type="password" class="form-control" id="senha" placeholder="Senha">
							<input name='conf_senha' type="password" class="form-control" id="conf_senha" placeholder="Confirma senha">
							<input name='tipo' type="hidden" class="form-control" id="tipo" value="P" >
							<input name='funcao' type="hidden" class="form-control" id="tipo" value="cadastro_usuario" >
<hr>
						<button id="cadastrar_professor" class="btn btn-default">Cadastrar</button>


					
						</div>
					</form>
				</div> 
			</div>
		</div>


	</div>



<div id="tab_empresa" class="tab-pane fade">

		<div class="row">
			<div class="col-lg-10 page-title">
				<h2>Cadastro de empresas</h2>
				<hr>
			</div>
		</div>

		<div class="user-data">
			<div class="row">
				<div class="col-lg-5">

					<form id='empresa'>

						<div class="form-group">
							<input name='nome' type="text" class="form-control" id="nome" placeholder="Nome" required>
							<input name='cnpj' type="text" class="form-control" id="cnpj" placeholder="cnpj" required>
							<input name='responsavel' type="text" class="form-control" id="responsavel" placeholder="Responsável">
							<input name='telefone' type="text" class="form-control" id="telefone" placeholder="Telefone (opcional)">
							<input name='celular' type="text" class="form-control" id="celular" placeholder="Celular" required>
							<input name='email' type="email" class="form-control" id="email" placeholder="Email">
							<input name='login' type="text" class="form-control" id="login" placeholder="Login" required>
							<input name='senha' type="password" class="form-control" id="senha" placeholder="Senha">
							<input name='conf_senha' type="password" class="form-control" id="conf_senha" placeholder="Confirma senha">
							<input name='tipo' type="hidden" class="form-control" id="tipo" value="E" >
							<input name='funcao' type="hidden" class="form-control" id="tipo" value="cadastro_usuario" >
<hr>
						<button id="cadastrar_empresa" class="btn btn-default">Cadastrar</button>


						</div>
					</form>
				</div> 
			</div>
		</div>


	</div>


	<div id="resultado">
							


						</div>

</div>
</div>



























	</div>    

</body>
</html>