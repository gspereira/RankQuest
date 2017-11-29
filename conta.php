<?php
include 'navbar.php';
include 'processa/conecta.php';



  $sql = $mysqli->prepare('SELECT U.NOME,U.CELULAR,U.TELEFONE,U.EMAIL,U.LOGIN,U.SENHA FROM USUARIO U,ALUNO A WHERE U.ID = A.USUARIO_ID AND U.ID = ?');
  $sql->bind_param('i',$_SESSION['id']);
  $sql->execute();
  $sql->bind_result($nome,$celular,$telefone,$email,$login,$senha); 
  $sql->store_result();
$sql->fetch();


?>
<title>RankQuest - Minha conta</title>
<div style="height: 1000px" class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 page-title">
                <h3>Minha Conta</h3>
                <hr>
            </div>
        </div>
        <div class="user-data">
            <div class="row">
              <div class="col-lg-5">
                <form id='minhaconta'>
                    <div class="form-group">
                        <label for="inputName">Nome</label>
                        <input name='nome' type="text" class="form-control" id="nome" placeholder="Nome" value='<?php echo $nome ?>' readonly>
                    </div>
                     <div class="form-group">
                        <label for="inputName">Login</label>
                        <input name='login' type="text" class="form-control" id="login" placeholder="Login" value='<?php echo $login ?>' readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input name='email' type="email" class="form-control" id="email" placeholder="E-mail" value='<?php echo $email ?>'>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">Telefone</label>
                        <input name='telefone' value='<?php echo $telefone ?>' type="text" class="form-control" placeholder="Telefone">
                    </div>
                        <div class="form-group">
                        <label for="inputPhone">Celular</label>
                        <input name='celular' value='<?php echo $celular ?>' type="text" class="form-control" id="celular" placeholder="Celular">
                    </div>
            
                    <button id='salvar' class="btn btn-default">Salvar Mudanças</button>
                     </form>
                    <form id='alterasenha'>
                    <hr>
                    <div class="form-group">
                        <label for="inputNewPass">Alterar Senha</label>
                        <input name='senha' type="password" class="form-control" id="senha" placeholder="Digite a nova senha" value=''>
                    </div>    
                    <div class="form-group">
                        <label for="inputNewPass">Digite Novamente</label>
                        <input type="password" class="form-control" id="inputNewPass" placeholder="Digite novamente" value="">
                    </div>
                    <button id='salvar2' class="btn btn-default">Alterar Senha</button>
               </form>

                <div id='resultado'></div>
              
    
              

            </div>
    
        </div>
    </div>
</div>
</div>

<script language="JavaScript" type="text/javascript" src="../js.validateMask.js"></script>




</body>  
</html>