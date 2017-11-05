<?php
include('conecta.php');
session_start();

    $sql = $mysqli->prepare('SELECT id,login,tipo from usuario where login= ? and senha = ?  ');
    $sql->bind_param('ss',$_POST['login'],$_POST['senha']);
    $sql->execute();
    $sql->bind_result($id,$login,$tipo);
    $sql->store_result();
    $sql->fetch();
    if(($sql->num_rows()) > 0){
        
        $_SESSION['id'] = $id;
        $_SESSION['login'] = $login;
        $_SESSION['tipo'] = $tipo;

		if($tipo == 'A'){

			$sql = $mysqli->prepare('SELECT level,xp from aluno where usuario_id= ?');
		    $sql->bind_param('s',$id);
		    $sql->execute();
		    $sql->bind_result($level,$xp);
		    $sql->store_result();
		    $sql->fetch();
			$_SESSION['level'] = $level;
		    $_SESSION['xp'] = $xp;
		}
    
   		echo '<script>top.location.href="dashboard.php";</script>';
    }
    else echo "<h5>Dados Invalidos</h5>";
?>