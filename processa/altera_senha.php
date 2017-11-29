  <?php

  			session_start();
			include('conecta.php');
			

    $sql = $mysqli->prepare('UPDATE usuario set senha= ? where id = ?');
    $sql->bind_param('si',$_POST['senha'],$_SESSION['id']);
    $sql->execute();
  


 
    if($sql->error){
    
echo "<div class='alert alert-success'>
                    <strong>Error!</strong> Erro ao alterar a senha, tente novamente.
                </div>";
}else{

echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Senha alterada!
                </div>";

}
  $sql->close();
  $sql->close();
?>




