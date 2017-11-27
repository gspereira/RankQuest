  <?php

  			session_start();
			include('conecta.php');
			

    $sql = $mysqli->prepare('UPDATE usuario set senha= ? where id = ?');
    $sql->bind_param('si',$_POST['senha'],$_SESSION['id']);
    $sql->execute();
  


    if($sql->error){
    echo "<h5>Erro no cadastro: $sql->error</h5>";
    $sql->close();
}else{

echo "<div class='alert alert-success'>
                    <strong>Success!</strong> Indicates a successful or positive action.
                </div>";

}
  $sql->close();
?>




