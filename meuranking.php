<?php
include 'navbar.php';
include 'processa/conecta.php';







if(isset($_GET['id_vaga'])){

$sql1 = $mysqli->prepare('SELECT u.id,u.nome,a.level,sum(r.pontuacao)as pontuacao from aluno as a , resultado as r,usuario as u where a.usuario_id = r.aluno_id and a.usuario_id = u.id and r.questionario_id = ? GROUP by u.nome order by pontuacao DESC');

$sql1->bind_param('i',$_GET['id_vaga']);
$sql1->execute();
$sql1->bind_result($id,$nome,$level,$pontuacao); 
$sql1->store_result();


}


if(isset($_GET['id_questionario'])){

$sql1 = $mysqli->prepare('SELECT u.id,u.nome,a.level,sum(r.pontuacao)as pontuacao from aluno as a , resultado as r,usuario as u where a.usuario_id = r.aluno_id and a.usuario_id = u.id and r.questionario_id = ? GROUP by u.nome order by pontuacao DESC');

$sql1->bind_param('i',$_GET['id_questionario']);
$sql1->execute();
$sql1->bind_result($id,$nome,$level,$pontuacao); 
$sql1->store_result();


}




$i=0;
?>
<title>RankQuest - Ranking</title>
<div style="height: 1000px" class="content-wrapper">
	<div class="container-fluid">


		<h3>Ranking - <?php echo $_GET['titulo'] ?></h3>


			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Level</th>
						<th>Pontos</th>
					</tr>
				</thead>
				<tbody>
					<?php  while($sql1->fetch()){
						$i++;
						echo"<tr>
						<td>$i</td>
						<td><a href=perfil.php?id=$id>$nome</a></td>
						<td>$level</td>
						<td>$pontuacao</td>
						</tr>
						";


					}    ?>

			</tbody>

			
			</table>
		</div>


		
</div>

	</body>
	</html>