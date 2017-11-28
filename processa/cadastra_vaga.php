<?php 
include('conecta.php');
	session_start();



if(!isset($_POST['questionario']))$_POST['questionario'] = '';

$sql = $mysqli->prepare('INSERT INTO vaga (empresa_id,questionario_id,descricao,dt_ini,dt_fim)
    VALUES(?,?,?,?,?)');

$sql->bind_param('iisss',$_SESSION['id'] ,$_POST['questionario'],$_POST['descricao'] ,$_POST['dtinicio'] ,$_POST['dtfim']);
$sql->execute();

 if($sql->error){
    echo "<h5>Erro no cadastro: $sql->error</h5>";
 
}else{

echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Vaga cadastrada.
                </div>";

}
  $sql->close();
?>