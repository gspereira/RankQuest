<?php
include 'navbar.php';
include 'processa/conecta.php';
    $sql1 = $mysqli->prepare('SELECT u.id,u.nome,a.level,sum(r.pontuacao)as pontuacao from aluno as a , resultado as r,usuario as u where a.usuario_id = r.aluno_id and a.usuario_id = u.id GROUP by u.nome order by pontuacao DESC');
    $sql1->execute();
    $sql1->bind_result($id,$nome,$level,$pontuacao); 
    $sql1->store_result();

$i=0;


?>



<div style="height: 1000px" class="content-wrapper">
	<div class="container-fluid">


	<h3>Ranking</h3>



	<ul class="nav nav-tabs" id="myTab" role="tablist">
	 	<li class="nav-item">
	    	<a class="nav-link active" id="tab_geral" data-toggle="tab" href="#geral" role="tab" aria-controls="profile" aria-selected="true">Geral</a>
		</li>
	 <!--<li class="nav-item">
	    	<a class="nav-link " id="tab_materia" data-toggle="tab" href="#materia" role="tab" aria-controls="profile" aria-selected="false">Por Quiz</a>
	  </li>-->
	</ul>




	
	<div class="tab-content">

		<div class="tab-pane fade show active " id="geral" role="tabpanel" aria-labelledby="tab_geral">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Level</th>
						<th>Pontuação total</th>
					</tr>
				</thead>
				<tbody>
					<?php  while($sql1->fetch()){
							$i++;
				echo"<tr>
						<td>$i</td>
						<td>$nome</td>
						<td>$level</td>
						<td>$pontuacao</td>
					</tr>
";


					}    ?>
				
					</tbo
				</tbody>
			</table>
		</div>
	
	</body>
	</html>