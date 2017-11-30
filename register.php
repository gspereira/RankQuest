<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>RankQuest - Resgistrar Conta</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar - RankQuest</div>
      <div class="card-body">
        <h2>Você é ...</h2>
        <ul class="nav nav-tabs">
          <li class="active" style="margin-right: 10px"><a data-toggle="tab" href="#tab_aluno">Aluno</a></li>
          <li style="margin-right: 10px"><a data-toggle="tab" href="#tab_professor">Professor</a></li>
          <li><a data-toggle="tab" href="#tab_empresa">Empresa</a></li>

      </ul>

      <div class="tab-content">
          <div id="tab_aluno" class="tab-pane fade in active">
            <form id="aluno">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="exampleInputName">Nome</label>
                    <input name="nome" class="form-control" id="nome" type="text" aria-describedby="nameHelp" placeholder="Nome" required>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputLastName">CPF</label>
                    <input name="cpf" class="form-control" id="cpf" type="number" aria-describedby="nameHelp" placeholder="CPF" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputEmail1">Email</label>
              <input name="email" class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Digite seu email" required>
          </div>
          <div class="col-md-6">
             <label for="exampleInputName">Data de Nascimento</label>
             <input name="dt_nascimento" class="form-control" id="dt_nascimento" type="date" aria-describedby="nameHelp" placeholder="" onfocus="(this.type='date')" required>
         </div>
     </div>
     <div class="form-row">
      <div class="col-md-6">
        <label for="exampleInputName">Telefone (Opcional)</label>
        <input name="telefone" class="form-control" id="telefone" type="number" aria-describedby="nameHelp" placeholder="" required>
    </div>
    <div class="col-md-6">
        <label for="exampleInputLastName">Celular</label>
        <input name="celular" class="form-control" id="celular" type="number" aria-describedby="nameHelp" placeholder="" required>
    </div>
</div>
<div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputPassword1">Login</label>
      <input name="login" class="form-control" id="login" type="text" placeholder="Login" required>
  </div>
</div>
</div>
<div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputPassword1">Senha</label>
      <input name="senha" class="form-control" id="senha" type="password" placeholder="Digite sua senha">
  </div>
  <div class="col-md-6">
      <label for="exampleConfirmPassword">Confirme sua senha</label>
      <input name="conf_senha" class="form-control" id="conf_senha" type="password" placeholder="Digite sua senha">
  </div>
</div>
</div>
<a class="btn btn-primary btn-block" href="login.php">Resgistrar</a>

<div class="text-center">
  <a class="d-block small mt-3" href="landing.php">Fazer login</a>
</div>
</div>
<div id="tab_empresa" class="tab-pane fade">
    <form id="empresa">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputName">Nome</label>
            <input name="nome" class="form-control" id="nome" type="text" aria-describedby="nameHelp" placeholder="Nome" required>
        </div>
        <div class="col-md-6">
            <label for="exampleInputLastName">CNPJ</label>
            <input name="cpf" class="form-control" id="cnpj" type="number" aria-describedby="nameHelp" placeholder="CNPJ" required>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputEmail1">Email</label>
      <input name="email" class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Digite seu email" required>
  </div>
  <div class="col-md-6">
     <label for="exampleInputName">Data de Nascimento</label>
     <input name="dt_nascimento" class="form-control" id="dt_nascimento" type="date" aria-describedby="nameHelp" placeholder=""onfocus="(this.type='date')" required>
 </div>
</div>
<div class="form-row">
  <div class="col-md-6">
    <label for="exampleInputName">Telefone (Opcional)</label>
    <input name="telefone" class="form-control" id="telefone" type="number" aria-describedby="nameHelp" placeholder="" required>
</div>
<div class="col-md-6">
    <label for="exampleInputLastName">Celular</label>
    <input name="celular" class="form-control" id="celular" type="number" aria-describedby="nameHelp" placeholder="" required>
</div>
</div>
<div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputPassword1">Login</label>
      <input name="login" class="form-control" id="login" type="text" placeholder="Login" required>
  </div>
</div>
</div>
<div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputPassword1">Senha</label>
      <input name="senha" class="form-control" id="senha" type="password" placeholder="Digite sua senha">
  </div>
  <div class="col-md-6">
      <label for="exampleConfirmPassword">Confirme sua senha</label>
      <input name="conf_senha" class="form-control" id="conf_senha" type="password" placeholder="Digite sua senha">
  </div>
</div>
</div>
<a class="btn btn-primary btn-block" href="login.php">Resgistrar</a>

<div class="text-center">
  <a class="d-block small mt-3" href="landing.php">Fazer login</a>
</div>
</div>
<div id="tab_professor" class="tab-pane fade">
    <form id="professor">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputName">Nome</label>
            <input name="nome" class="form-control" id="nome" type="text" aria-describedby="nameHelp" placeholder="Nome" required>
        </div>
        <div class="col-md-6">
            <label for="exampleInputLastName">CPF</label>
            <input name="cpf" class="form-control" id="cpf" type="number" aria-describedby="nameHelp" placeholder="CPF" required>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputEmail1">Email</label>
      <input name="email" class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Digite seu email" required>
  </div>
  <div class="col-md-6">
     <label for="exampleInputName">Data de Nascimento</label>
     <input name="dt_nascimento" class="form-control" id="dt_nascimento" type="date" aria-describedby="nameHelp" placeholder="" onfocus="(this.type='date')" required>
 </div>
</div>
<div class="form-row">
  <div class="col-md-6">
    <label for="exampleInputName">Telefone (Opcional)</label>
    <input name="telefone" class="form-control" id="telefone" type="number" aria-describedby="nameHelp" placeholder="" required>
</div>
<div class="col-md-6">
    <label for="exampleInputLastName">Celular</label>
    <input name="celular" class="form-control" id="celular" type="number" aria-describedby="nameHelp" placeholder="" required>
</div>
</div>
<div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputPassword1">Login</label>
      <input name="login" class="form-control" id="login" type="text" placeholder="Login" required>
  </div>
</div>
</div>
<div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <label for="exampleInputPassword1">Senha</label>
      <input name="senha" class="form-control" id="senha" type="password" placeholder="Digite sua senha">
  </div>
  <div class="col-md-6">
      <label for="exampleConfirmPassword">Confirme sua senha</label>
      <input name="conf_senha" class="form-control" id="conf_senha" type="password" placeholder="Digite sua senha">
  </div>
</div>
</div>
<a class="btn btn-primary btn-block" href="login.php">Resgistrar</a>

<div class="text-center">
  <a class="d-block small mt-3" href="landing.php">Fazer login</a>
</div>
</div>
</form> 
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>