<?php
include 'navbar.php';

  include 'processa/conecta.php';
  $sql1 = $mysqli->prepare('select v.id,u.nome,e.responsavel,v.descricao,v.questionario_id,q.titulo,v.dt_cad,v.dt_ini,v.dt_fim from vaga as v,usuario as u,empresa as e,questionario as q where v.empresa_id = e.usuario_id and e.usuario_id = u.id and q.autor_id = v.empresa_id and v.empresa_id = ?  ');
  $sql1->bind_param('i',$_SESSION['id']);
  $sql1->execute();


  $sql1->bind_result($id,$nome,$responsavel,$descricao,$questionario,$titulo,$dt_cadastro,$dt_inicio,$dt_fim); 
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
            <input placeholder='Pesquise sua vaga' id='barra_filtro' name='filtro' type="text" class="form-control">
          
            <div class="input-group-btn">
       
              
              </button>
            </div>
       </div>
     </div>
   
</div>


<div id='resultado' class="row">
  

<?php while($sql1->fetch()){


  echo "
   
    <div id='div-quiz' class='col-lg-3 col-xs-12 col-sm-5'>
    <div style='height:135px;'> 
      <h4>$nome
      <h5>$descricao</h5>
      </div>
    <h6>Périodo: $dt_inicio ate $dt_fim</h6>
     <h6>Contato:$responsavel</h6>

";


if($questionario_id == 0){

echo "

<a href=# class='btn btn-success btn-block'>Candidatar</a>
</div>



";


}else{

echo"

  <a href=quiz.php?id=$questionario&titulo=$titulo class='btn btn-success btn-block'>Iniciar questionario/Candidatar</a>
</div>
";



}


     
      
   


}?>

</div>

</div>




</body>  
</html>