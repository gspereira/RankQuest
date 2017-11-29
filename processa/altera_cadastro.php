  <?php

  			session_start();
			include('conecta.php');
			

    $sql = $mysqli->prepare('UPDATE usuario set nome = ? , login = ?, email =? ,telefone = ? , celular = ? where id = ?');
    $sql->bind_param('sssiii',$_POST['nome'],$_POST['login'],$_POST['email'],$_POST['telefone'],$_POST['celular'],$_SESSION['id']);
    $sql->execute();
  


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao atualizar dados, tente novamente.
                </div>";
}else{

echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Dados alterados.
                </div>";

}
  $sql->close();
?>









  