<?php
include 'navbar.php';

?>
<div style="height: 1000px" class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 page-title">
                <h2>Cadastro de Vagas</h2>
                <hr>
            </div>
        </div>
        <div class="user-data">
            <div class="row">
              <div class="col-lg-5">
                <form id='minhaconta'>
                    <div class="form-group">
                        <label for="inputName">Descrição da vaga</label>
                        <input name='nome' type="text" class="form-control" id="nome" placeholder="Nome" value='<?php echo $nome ?>' readonly>
                    </div>
                     <div class="form-group">
                        <label for="inputName">Data de inicio</label>
                        <input name='login' type="text" class="form-control" id="login" placeholder="Login" value='<?php echo $login ?>' readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Data fim</label>
                        <input name='email' type="email" class="form-control" id="email" placeholder="E-mail" value='<?php echo $email ?>'>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">Questionário</label>
                        <input name='telefone' value='<?php echo $telefone ?>' type="text" class="form-control" placeholder="Telefone">
                    </div>
                
            
                    <button id='salvar' class="btn btn-default">Salvar Mudanças</
                <div id='resultado'></div>
              
    
              

            </div>
    
        </div>
    </div>
</div>
</div>

</body>
</html>