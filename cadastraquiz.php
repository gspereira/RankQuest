<?php
include "navbar.php";
include  "processa/conecta.php";
  $sql1 = $mysqli->prepare('select id,descricao from categoria');
  $sql1->execute();
  $sql1->bind_result($id,$descricao); 
  $sql1->store_result();

  $sql2 = $mysqli->prepare('select id,descricao from categoria');
  $sql2->execute();
  $sql2->bind_result($id,$descricao); 
  $sql2->store_result();


  $sql3 = $mysqli->prepare('select id,descricao from categoria');
  $sql3->execute();
  $sql3->bind_result($id,$descricao); 
  $sql3->store_result();



  $sql4 = $mysqli->prepare('select id,descricao from dificuldade');
  $sql4->execute();
  $sql4->bind_result($id,$descricao); 
  $sql4->store_result();

  $sql5 = $mysqli->prepare('select id,descricao from dificuldade');
  $sql5->execute();
  $sql5->bind_result($id,$descricao); 
  $sql5->store_result();

  $sql6 = $mysqli->prepare('select p.id,SUBSTRING(p.enunciado, 1, 150),p.enunciado,c.descricao as categoria,a.descricao as assunto,d.descricao as dificuldade,u.nome as autor from dificuldade as d,pergunta as p,assunto as a,categoria as c , usuario as u where p.categoria_id = c.id and p.assunto_id = a.id and p.autor_id = u.id and p.dificuldade_id = d.id order by id limit 5');
  $sql6->execute();
  $sql6->bind_result($id,$enunciado,$enunciado_c,$categoria,$assunto,$dificuldade,$autor);  
  $sql6->store_result();

?>
   
<div style="height: 1000px" class="content-wrapper">


<div class="container-fluid">


  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="tab_pergunta" data-toggle="tab" href="#cadastro_pergunta" role="tab" aria-controls="profile" aria-selected="true">Pergunta</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " id="tab_quiz" data-toggle="tab" href="#cadastro_quiz" role="tab" aria-controls="cadastro_quiz" aria-selected="false">Questionário</a>
    </li>
  </ul>


  <div class="tab-content" id="myTabContent">



    <div class="tab-pane fade show active" id="cadastro_pergunta" role="tabpanel" aria-labelledby="tab_pergunta">
  <form id=form_pergunta>
<br>
      <h3>Cadastro de Perguntas</h3>
<br>
      <div class="col-lg-10">
        <div id="combo_perguntas" class="form-group">
          
          <select class="custom-select"   id='combo_categorias' type='text' name='combo_categorias' required>

            <option value=''>Selecione uma categoria </option>
            <?php while ($sql1->fetch()){
                      echo  "<option value='$id'>$descricao </option>" ;
                    } 
                ?>  
           </select>


          <select class="custom-select"  id='combo_assunto' type='text' name='combo_assunto' required>
            <option value="">Selecione o assunto </option>
           </select>

           <select class="custom-select"   id='combo_dificuldade' type='text' name='combo_dificuldade' required>
          <option value="">Selecione a dificuldade </option>
              <?php while ($sql4->fetch()){
                      echo  "<option value='$id'>$descricao </option>" ;
                    } 
                ?>  
           </select>


      </div>


      

        </div>

         <div class="form-group col-lg-6">

        <label for="title">Enunciado:</label>
        <textarea rows='3' name='enunciado' id='enunciado' type="text" class="form-control" required></textarea>
        <label for="title">Alternativas:</label><br>
        <label for="title">Lembre-se de indicar a alternativa correta:</label><br>




    <div class='input-group quiz-group'>
    <span class='input-group-addon'>
    <input type='radio' id='ind_correta' name='ind_correta' value='a1'>
    </span>
    <textarea placeholder="Alternativa A" class='form-control' id='a1' name='a1'></textarea>
    </div><br>


    <div class='input-group quiz-group'>
    <span class='input-group-addon'>
    <input type='radio' id='ind_correta' name='ind_correta' value='a2'>
    </span>
    <textarea placeholder="Alternativa B" class='form-control' id='a2' name='a2'></textarea>
    </div><br>


    <div class='input-group quiz-group'>
    <span class='input-group-addon'>
    <input type='radio' id='ind_correta' name='ind_correta' value='a3'>
    </span>
    <textarea placeholder="Alternativa C" class='form-control' id='a3' name='a3'></textarea>
    </div><br>
    

    <div class='input-group quiz-group'>
    <span class='input-group-addon'>
    <input type='radio' id='ind_correta' name='ind_correta' value='a4'>
    </span>
    <textarea placeholder="Alternativa D" class='form-control' id='a4' name='a4'></textarea>
    </div><br>


    <div class='input-group quiz-group'>
    <span class='input-group-addon'>
    <input type='radio' id='ind_correta' name='ind_correta' value='a5'>
    </span>
    <textarea placeholder="Alternativa E" class='form-control' id='a5' name='a5'></textarea>
    </div><br>


         <input name='funcao' type="hidden" class="form-control" id="tipo" value="cadastro_pergunta" required>
          <input name='autor_id' type="hidden" class="form-control" id="tipo" value="<?php echo $_SESSION['id'];?>" required>



      
      </div>
        <button id="cadastrar_pergunta" class="btn btn-primary">Cadastrar Pergunta</button>
      <div class='form-group col-lg-4' id="resultado"></div>
  </form>
  </div>




  <!--   QUIZZZZ   -->

    <div class="tab-pane fade " id="cadastro_quiz" role="tabpanel" aria-labelledby="tab_quiz">
      <form id='form-quiz'>
<br>
        <h3>Cadastro de questionário</h3>
<br>        
        <div class="col-lg-6">
          <div class="form-group">
            
            <select class="custom-select"  id='combo_categorias2' type='text' name='combo_categorias'>
              <option selected>Selecione uma categoria</option>
              <?php    while ($sql2->fetch()){
                      echo  "<option value='$id'>$descricao </option>" ;
                    } 
                ?>
             </select>
            <select class="custom-select"   id='combo_assunto2' type='text' name='combo_assunto'>
              <option value="">Selecione o assunto </option>
             </select>
          </div>
        </div>


        <div class="form-group col-lg-6">

          <label for="title">Título do Quiz:</label>
          <input name='titulo' id='titulo' type="text" class="form-control">
          <label for="comment">Descrição do Quiz:</label>
          <textarea name='descricao' class="form-control" rows="5" id="descricao"></textarea>

        </div>



     <!-- BARRA DE FILTRO   -->
       <div class="row">
        <div class="col-lg-10 col-md-8">
          <!-- Barra de procura -->
          <div class="input-group">

            <input type="text" placeholder="Busque a pergunta" class="form-control">

            <div class="input-group-btn">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filtros">
                <i class="fa fa-filter"></i>
               </button>
            </div>   

            <button type="button" id='pesquisar' name='pesquisar' class="btn btn-secondary">
                  <i class="fa fa-search" aria-hidden="true"></i>
                 </button>
               </div> 


          <div class="modal fade" id="filtros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filtros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                
              
                 <div >
                    <label for="searchCurso" class="col-sm-4 col-form-label">Categoria</label>
                    <div class="col-sm-10">
                      <select class="custom-select" id="combo_categorias3" name='combo_categorias'>
                        <option selected>Selecione uma categoria</option>
                        <?php while ($sql3->fetch()){
                      echo  "<option value='$id'>$descricao </option>" ;
                    } 
                        ?>
                      </select>
                    </div>
                  
               
                    <label for="searchAssunto" class="col-sm-4 col-form-label">Assunto</label>
                    <div class="col-sm-10">
                      <select name='combo_assunto' class="custom-select" id="combo_assunto3">
                        <option selected>Selecione um assunto</option>
                        <option></option>
                      </select>
                    </div>
                   
                   
                    <label for="searchNivel" class="col-sm-4 col-form-label">Dificuldade</label>
                    <div class="col-sm-10">
                      <select class="custom-select" id="combo_dificuldade" name='combo_dificuldade'>

                         <option selected>Selecione uma dificuldade</option>
                        <?php   while ($sql5->fetch()){
                      echo  "<option value='$id'>$descricao </option>" ;
                    } 
                ?>  
                      </select>
                    </div>
                  </div>




                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aplicar</button>
                 
                </div>
              </div>
              </div>
          </div>









          </div>
       </div>
        <!-- BARRA DE FILTRO   -->


<div class="col-lg-10">
  



   <table  class="table">
          <thead>
            <tr>
              <th>#</th>
               <th>Enunciado</th>
              <th>Categoria</th>
              <th>Assunto</th>
              <th>Autor</th>
            </tr>
          </thead>

          <div id='resultado'>  
          <tbody>
             
      <?php    while ($sql6->fetch()){
                      echo  "<tr title='$enunciado_c' >
                            <td><input type='checkbox' name='id_pergunta' value='$id'></td>
                            <td>$enunciado</td>
                            <td>$categoria</td>
                            <td>$assunto</td>
                            <td>$autor</td>
                          </tr>" ;
                    } 
                ?>
             
          </tbody>
        </div>
        </table>
</div>
    
        <button id="cadastrar_quiz" class="btn btn-primary">Cadastrar Quiz</button>



      </form>
    </div>
  </div>  
</div>
</div>

</body>
</html>