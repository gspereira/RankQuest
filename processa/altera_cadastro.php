  <?php

  			session_start();
			include('conecta.php');
			

    $sql = $mysqli->prepare('UPDATE usuario set nome = ? , login = ?, email =? ,telefone = ? , celular = ? where id = ?');
    $sql->bind_param('sssiii',$_POST['nome'],$_POST['login'],$_POST['email'],$_POST['telefone'],$_POST['celular'],$_SESSION['id']);
    $sql->execute();
  


    if($sql->error){
    echo "<h5>Erro no cadastro: $sql->error</h5>";
    $sql->close();
}else{

echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Dados alterados.
                </div>";

}
  $sql->close();
?>









  