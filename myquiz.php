<?php
include 'navbar.php';

  include 'processa/conecta.php';
  $sql1 = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and q.autor_id = ? order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');

  $sql1->bind_param('i',$_SESSION['id']);
  $sql1->execute();
  $sql1->bind_result($id,$titulo,$descricao,$categoria,$assunto,$autor,$dificuldade); 
  $sql1->store_result();

  $sql2 = $mysqli->prepare('select id,descricao from categoria');
  $sql2->execute();
  $sql2->bind_result($id,$descricao); 
  $sql2->store_result();


  $sql4 = $mysqli->prepare('select id,descricao from dificuldade');
  $sql4->execute();
  $sql4->bind_result($id,$descricao); 
  $sql4->store_result();


?>
<div style="height: 1000px" class="content-wrapper">




<div class="container-fluid">

	 <div class="row">
        <div class="col-lg-12 col-sm-10 col-xs-1">
          <!-- Barra de procura -->
          <div class="input-group">
            <input id='myquiztitulo' name='myquiztitulo' type="text" class="form-control" placeholder="Busca de questionário">
            <div class="dropdown dropdown-lg">
              <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-filter"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right" role="menu">
                <form id='myquiz' class="form-horizontal" role="form">
                  <label for="filter">Filtros</label>
                  <hr>
                  <div class="form-group row">
                    <label for="searchCurso" class="col-sm-2 col-form-label">Categoria</label>
                    <div class="col-sm-10">
            



                 <select id='combo_categorias'  name='combo_categorias' class='custom-select' >
                          <option value=''>Escolha uma categoria</option>
                    
  <?php while($sql2->fetch()){

                        	echo" <option value='$id'>$descricao </option>";}?>

                      </select>
                    </div>
                  </div>
                  <div class='form-group row'>
                    <label for='searchAssunto' class='col-sm-2 col-form-label'>Assunto</label>
                    <div class="col-sm-10">
           <select name='combo_assunto' class='custom-select' id='combo_assunto'>
                        <option value=''>Escolha um assunto</option>
                    

                      </select>
                  

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="searchNivel" class="col-sm-2 col-form-label">Dificuldade</label>
                    <div class="col-sm-10">
                       <select  name='combo_dificuldade' class='custom-select' id='searchNivel'>
                        <option value='' selected>Escolha uma dificuldade</option>
                       <?php while($sql4->fetch()){echo" <option value='$id'>$descricao </option>"   ; }?>
                      </select>
                    </div>
                  </div>
                  <hr>
                  <button id='myquizaplicar_filtro' name='aplicar_filtro' class="btn btn-primary pull-right">Aplicar</button>
                  <input name='funcao' type="hidden" class="form-control" value='filtrar-questionarios'>
                </form>
              </div>
            </div>
            
       </div>
     </div>
   
</div>


<div id='resultado' class="row">
  

<?php while($sql1->fetch()){


  echo "
   
    <div id='div-quiz' class='col-lg-3 col-xs-12 col-sm-5'>
    <div style='height:150px;'> 
      <h4>$titulo
      <h5>$descricao</h5>
      
   </div>
    <h6>$categoria/$assunto - $dificuldade</h6>
     <h6>Autor: $autor</h6>

      <a href=quiz.php?id=$id&titulo=$titulo class='btn btn-success btn-block'>Iniciar</a>
      </div>

   
";

}?>

</div>

</div>




</body>  
</html>