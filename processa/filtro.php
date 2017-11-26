<?php
include('conecta.php');


if(!isset($_POST['titulo'])){
	$_POST['titulo'] = '';
}
else{

$_POST['titulo'] = '%' . $_POST['titulo'] . '%';


}

if(!isset($_POST['combo_categorias']))$_POST['combo_categorias'] = '';;
if(!isset($_POST['combo_assunto']))$_POST['combo_assunto'] = '';;
if(!isset($_POST['combo_dificuldade']))$_POST['combo_dificuldade'] = '';





if($_POST['titulo'] != '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] != '' && $_POST['combo_dificuldade']!= ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.titulo = ? and q.categoria_id = ? and q.assunto_id = ? and q.dificuldade_id = ? )  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');

   $sql->bind_param('siii',$_POST['titulo'],$_POST['combo_categorias'],$_POST['combo_assunto'],$_POST['combo_dificuldade']);


}

elseif($_POST['titulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] != '' && $_POST['combo_dificuldade']!= ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ? and q.assunto_id = ? and q.dificuldade_id = ? ) order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');


 	   $sql->bind_param('iii',$_POST['combo_categorias'],$_POST['combo_assunto'],$_POST['combo_dificuldade']);

}

elseif($_POST['titulo'] != '' && $_POST['combo_categorias'] == '' && $_POST['combo_assunto'] == '' && $_POST['combo_dificuldade']== ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.titulo like ? or q.descricao like ? ) order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');


 	   $sql->bind_param('ss',$_POST['titulo'],$_POST['titulo']);

}


elseif($_POST['titulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] == '' && $_POST['combo_dificuldade']== ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ?)  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');

 	   $sql->bind_param('i',$_POST['combo_categorias']);

}

elseif($_POST['titulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] != '' && $_POST['combo_dificuldade']== ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ? and q.assunto_id = ?)  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');

 	   $sql->bind_param('ii',$_POST['combo_categorias'],$_POST['combo_assunto']);
 	   
}

elseif($_POST['titulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] == '' && $_POST['combo_dificuldade'] != ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ? and q.dificuldade_id = ?) order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');
$sql->bind_param('ii',$_POST['combo_categorias'],$_POST['combo_dificuldade']);
 	   
}
 
    $sql->execute();
    $sql->bind_result($id,$titulo,$descricao,$categoria,$assunto,$autor,$dificuldade);


 

		while($sql->fetch()){

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




       }


		
?>