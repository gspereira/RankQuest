<?php
include('conecta.php');
session_start();

if(!isset($_POST['filtro_vaga'])){
	$_POST['filtro_vaga'] = '';
}
else{

$_POST['filtro_vaga'] = '%' . $_POST['filtro_vaga'] . '%';


}

 	$sql = $mysqli->prepare('select v.id,u.nome,e.responsavel,v.descricao,v.questionario_id,q.titulo,v.dt_cad,v.dt_ini,v.dt_fim from vaga as v,usuario as u,empresa as e,questionario as q where v.empresa_id = e.usuario_id and e.usuario_id = u.id and q.id = v.questionario_id and( v.descricao like ? or u.nome like ?) ');

   $sql->bind_param('ss',$_POST['filtro_vaga'],$_POST['filtro_vaga']);




    $sql->execute();
   $sql->bind_result($id,$nome,$responsavel,$descricao,$questionario,$titulo,$dt_cadastro,$dt_inicio,$dt_fim); 


 
while($sql->fetch()){


  echo "
   
    <div id='div-quiz' class='col-lg-3 col-xs-12 col-sm-5'>
    <div style='height:135px;'> 
      <h4>$nome
      <h5>$descricao</h5>
      </div>
    <h6>Périodo: $dt_inicio ate $dt_fim</h6>
     <h6>Contato:$responsavel</h6>
     <a href=quiz.php?id=$questionario&titulo=$titulo class='btn btn-success btn-block'>Iniciar questionario/Candidatar</a>
      </div>

   
";

}?>




