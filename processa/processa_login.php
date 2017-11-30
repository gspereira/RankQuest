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

        if($tipo='A'){

$status = 'A';
$sql = $mysqli->prepare('SELECT a.xp,a.level,u.id,u.tipo from aluno as a ,usuario as u where u.login = ? and u.senha = ? and ind_status = ? and a.usuario_id = u.id ');
    $sql->bind_param('sss',$_POST['login'],$_POST['senha'],$status);
    $sql->execute();
    $sql->bind_result($xp,$level,$id,$tipo);
    $sql->store_result();
    $sql->fetch();
    if(($sql->num_rows()) > 0){
        
        
        $_SESSION['xp'] = $xp;
        $_SESSION['level'] = $level;
        $_SESSION['pont_max'] = (($_SESSION['level'] * 1.5) * 150);
        $_SESSION['pont_bar'] = intval(($_SESSION['xp'] /$_SESSION['pont_max']) * 100 );


    }

}

if($_SESSION['tipo'] == 'A')echo '<script>top.location.href="../buscaquiz.php";</script>';
        

elseif($_SESSION['tipo'] == 'P')echo '<script>top.location.href="../cadastraquiz.php";</script>';

elseif($_SESSION['tipo'] == 'E')echo '<script>top.location.href="../cadastravaga.php";</script>';

elseif($_SESSION['tipo'] == 'S')echo '<script>top.location.href="../dashboard.php";</script>';


} else{
    
echo "<div class='alert alert-danger'>
                   Usuário ou senha incorretos, tente novamente.
                </div>";

}


       
       

		
?>