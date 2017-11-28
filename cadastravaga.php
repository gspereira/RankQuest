<?php
include 'navbar.php';
 include 'processa/conecta.php';
  $sql = $mysqli->prepare('select q.id,q.titulo from empresa as e,questionario as q where e.usuario_id = q.autor_id and e.usuario_id = ? order by q.titulo');
  $sql->bind_param('i',$_SESSION['id']);
  $sql->execute();
  $sql->bind_result($id,$titulo); 
  $sql->store_result();















?>
<div style="height: 1000px" class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 page-title">
        <h4>Cadastro de Vagas</h4>
        <hr>
      </div>
    </div>
    <div class="user-data">
      <div class="row">
        <div class="col-lg-5">
        <form id='vaga'>
          
   <div class="form-group">
   <label for="inputName">Descrição</label>
  <textarea placeholder="Descrição da vaga" class='form-control' id='descricao' name='descricao'></textarea>
  </div>
           <div class="form-group">
            <label for="inputName">Data de inicio</label>
            <input name='dtinicio' type="text" class="form-control" id="dtinicio" onfocus="(this.type='date')" placeholder="Data de Inicio" >
          </div>
           <div class="form-group">
            <label for="inputName">Data de termino</label>
            <input name='dtfim' type="text" class="form-control" id="dtinicio" onfocus="(this.type='date')" placeholder="Data de termino" >
          </div>
             <div class="form-group">
            <label for="inputName">Vincule a um questionário(opcional)</label><br>
             <select class="custom-select"  id='questionario' type='text' name='questionario'>
        						<option value='' selected>Selecione um questionário</option>
        				<?php    while ($sql->fetch()){
                      echo  "<option value='$id'>$titulo(#$id) </option>" ;
                    } 
                ?>




       </select>
       
      </div>
         <button id='cadastra_vaga' class="btn btn-default">Cadastrar</button>
        <div id='resultado'></div>
      
         </form>
      </div>
 
    </div>
  </div>
</div>
</div>

</body>
</html>