<?php
    include 'menu.php';
    include '../processa/conecta.php';
    $sql1 = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id order by q.id ');
    $sql1->execute();
    $sql1->bind_result($id,$titulo,$descricao,$categoria,$assunto,$autor,$dificuldade); 
    $sql1->store_result();



?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-10 col-xs-1">
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
                                        <label for="searchCurso" class="col-sm-2 col-form-label">Categoria</label>
                                        <div class="col-sm-10">
                                            <select name='combo_categoria' class="custom-select" id="searchCurso">
                                                <option selected>Escolha uma categoria</option>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="searchAssunto" class="col-sm-2 col-form-label">Assunto</label>
                                        <div class="col-sm-10">
                                            <select name='combo_assunto' class="custom-select" id="searchAssunto">
                                                <option selected>Escolha um tema</option>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="searchNivel" class="col-sm-2 col-form-label">Dificuldade</label>
                                        <div class="col-sm-10">
                                            <select name='combo_dificuldade' class="custom-select" id="searchNivel">
                                                <option selected>Escolha uma dificuldade</option>
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


<div class="row">
    

<?php while($sql1->fetch()){
    echo "
   
        <div id='div-quiz' class='col-lg-3 col-xs-12 col-sm-5'>
        <div style='height:200px;'> 
            <h4>$titulo
            <h5>$descricao</h5>
            <h6>$categoria/$assunto</h6>
         <h6>Autor: $autor</h6>
        </div>

            <a href=quiz.php?id=$id&titulo=$titulo class='btn btn-success btn-block'>Iniciar</a>
            </div>

   
";

}?>

</div>

</div>




</body>  
</html>