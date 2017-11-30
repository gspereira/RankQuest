<?php
include 'conecta.php';
session_start();

$sql = $mysqli->prepare('SELECT u.id,u.nome,a.level,sum(r.pontuacao)as pontuacao from aluno as a , resultado as r,usuario as u where a.usuario_id = r.aluno_id and a.usuario_id = u.id and r.questionario_id = ? GROUP by u.nome order by pontuacao DESC
');
$sql->bind_param('i',$_POST['selquiz']);
$sql->execute();
$sql->bind_result($id,$nome,$level,$pontuacao); 
$i=0;

while($sql->fetch()){
						$i++;
						echo"

						<tr>
						<td>$i</td>
						<td>$nome</td>
						<td>$level</td>
						<td>$pontuacao</td>
						</tr>
						";


					}    ?>







