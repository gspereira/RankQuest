<?php
include('conecta.php');
session_start();

if(!isset($_POST['myquiztitulo'])){
	$_POST['myquiztitulo'] = '';
}
else{

$_POST['myquiztitulo'] = '%' . $_POST['myquiztitulo'] . '%';


}

if(!isset($_POST['combo_categorias']))$_POST['combo_categorias'] = '';;
if(!isset($_POST['combo_assunto']))$_POST['combo_assunto'] = '';;
if(!isset($_POST['combo_dificuldade']))$_POST['combo_dificuldade'] = '';





if($_POST['myquiztitulo'] != '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] != '' && $_POST['combo_dificuldade']!= ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and((q.titulo = ? or q.descricao = ? )and q.categoria_id = ? and q.assunto_id = ? and q.dificuldade_id = ? ) and q.autor_id = ?  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');

   $sql->bind_param('ssiiii',$_POST['myquiztitulo'],$_POST['myquiztitulo'],$_POST['combo_categorias'],$_POST['combo_assunto'],$_POST['combo_dificuldade'],$_SESSION['id']);


}

elseif($_POST['myquiztitulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] != '' && $_POST['combo_dificuldade']!= ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ? and q.assunto_id = ? and q.dificuldade_id = ? )and q.autor_id = ?  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');



 	   $sql->bind_param('iiii',$_POST['combo_categorias'],$_POST['combo_assunto'],$_POST['combo_dificuldade'],$_SESSION['id']);

}

elseif($_POST['myquiztitulo'] != '' && $_POST['combo_categorias'] == '' && $_POST['combo_assunto'] == '' && $_POST['combo_dificuldade']== ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.titulo like ? or q.descricao like ? )and q.autor_id = ?  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');



 	   $sql->bind_param('ssi',$_POST['myquiztitulo'],$_POST['myquiztitulo'],$_SESSION['id']);

}


elseif($_POST['myquiztitulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] == '' && $_POST['combo_dificuldade']== ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ?) and q.autor_id = ?  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');


 	   $sql->bind_param('ii',$_POST['combo_categorias'],$_SESSION['id']);

}

elseif($_POST['myquiztitulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] != '' && $_POST['combo_dificuldade']== ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ? and q.assunto_id = ?) and q.autor_id = ?  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');


 	   $sql->bind_param('iii',$_POST['combo_categorias'],$_POST['combo_assunto'],$_SESSION['id']);
 	   
}

elseif($_POST['myquiztitulo'] == '' && $_POST['combo_categorias'] != '' && $_POST['combo_assunto'] == '' && $_POST['combo_dificuldade'] != ''){

 	$sql = $mysqli->prepare('select q.id,q.titulo,q.descricao,c.descricao,a.descricao,u.nome,d.descricao from questionario as q,usuario as u,categoria as c,assunto as a,dificuldade as d where q.autor_id = u.id and q.categoria_id = c.id and q.assunto_id = a.id and q.dificuldade_id = d.id and(q.categoria_id = ? and q.dificuldade_id = ?) and q.autor_id = ?  order by c.descricao,a.descricao,d.descricao,q.titulo limit 10 ');

$sql->bind_param('iii',$_POST['combo_categorias'],$_POST['combo_dificuldade'],$_SESSION['id']);
 	   
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