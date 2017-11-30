<?php
include 'navbar.php';

  include 'processa/conecta.php';
  $sql1 = $mysqli->prepare('select u.id,u.nome,u.celular,u.telefone,u.email from usuario u,aluno a where a.usuario_id = u.id and u.id = ?');

  $sql1->bind_param('i',$_GET['id']);
  $sql1->execute();
  $sql1->bind_result($id,$nome,$celular,$telefone,$email); 
  $sql1->store_result();


?>

<div style="height: 1000px" class="content-wrapper">




<div class="container-fluid">


	<?php while($sql1->fetch()){

echo "

	<div id='div-quiz' class='col-lg-3 col-xs-12 col-sm-5'>
    <div style='height:150px;'> 
      <h4>$nome
      <h5>$telefone</h5>
      <h5>$celular</h5>
      <h5>$email</h5>      

   </div>

";




	}


	?>