<?php
	include 'menu.php'
?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 page-title">
                    <h2>Minha Conta</h1>
                    <hr>
                </div>
            </div>
            <div class="user-data">
                <div class="row">
                    <div class="col-lg-5">
                        <form>
                            <div class="form-group">
                                <label for="inputName">Nome</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Nome" value="" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputAtuacao">Área de Atuação</label>
                                <select name="atuacao" id="inputAtuacao" class="form-control">
                                    <option selected>
                                            Área de Atuação
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control" id="inputEmail" placeholder="E-mail" value="">
                            </div>
                                <button type="submit" class="btn btn-default">Salvar Mudanças</button>
                                <hr>
                            <div class="form-group">
                                <label for="inputNewPass">Alterar Senha</label>
                                <input type="password" class="form-control" id="inputNewPass" placeholder="Digite a nova senha" value="">
                            </div>    
                            <div class="form-group">
                                <label for="inputNewPass">Digite Novamente</label>
                                <input type="password" class="form-control" id="inputNewPass" placeholder="Digite novamente" value="">
                            </div>
                                <button type="submit" class="btn btn-default">Alterar Senha</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <form>
                            <div class="form-group">
                                <label for="adcComp">Adicionar Competência</label>
                                <select id="adcComp" class="form-control">
                                    <option selected>Competência</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Adicionar</button>
                            </div>
                            <div class="form-group">
                                <label for="compList">Lista de Competências</label>
                                <select multiple id="compList" class="form-control" readonly>
                                    <option></option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


</body>  
</html>
