<?php
include('conecta.php');


if(isset($_POST['funcao']) && $_POST['funcao'] == 'cadastro_usuario'){

echo 'TESTE';

$sql = $mysqli->prepare('INSERT INTO usuario(nome,email,telefone,celular,login,senha,tipo)
  VALUES(?,?,?,?,?,?,?)');

$sql->bind_param('sssssss',$_POST['nome'] ,$_POST['email'] ,$_POST['telefone'] ,$_POST['celular'],$_POST['login'],$_POST['senha'],$_POST['tipo']);
$mysqli->autocommit(FALSE);

$sql->execute();

if($sql->error){
  echo "<h5>Erro no cadastro: $sql->error</h5>";
  $sql->close();
}
else{


if($_POST['tipo'] == 'A'){


  $sql = $mysqli->prepare('INSERT INTO aluno(usuario_id,cpf,data_nascimento)
    VALUES(LAST_INSERT_ID(),?,?)');
  $sql->bind_param('ss',$_POST['cpf'] ,$_POST['dt_nascimento']);
  $sql->execute();

  if($sql->error){
    echo "<h5>Erro no cadastro: $sql->error</h5>";
     
    $sql->close();
  }
  else{

    echo "<h5>Cadastrado com sucesso!!";
    $mysqli->commit();
    $sql->close();
  }
}

elseif($_POST['tipo'] == 'P'){


  $sql = $mysqli->prepare('INSERT INTO professor(usuario_id,area_atuacao,cpf,data_nascimento)
    VALUES(LAST_INSERT_ID(),?,?,?)');
  $sql->bind_param('sss',$_POST['area_atuacao'],$_POST['cpf'] ,$_POST['dt_nascimento']);
  $sql->execute();
  if($sql->error){
    echo "<h5>Erro no cadastro: $sql->error</h5>";
     
    $sql->close();
  }
  else{
    echo "<h5>Cadastrado com sucesso!!";
    $mysqli->commit();
    $sql->close();
  }
}



else{



  $sql = $mysqli->prepare('INSERT INTO empresa(usuario_id,cnpj,responsavel)
    VALUES(LAST_INSERT_ID(),?,?)');
  $sql->bind_param('ss',$_POST['cnpj'],$_POST['responsavel']) ;
  $sql->execute();

  if($sql->error){
    echo "<h5>Erro no cadastro: $sql->error</h5>";
     
    $sql->close();
  }
  else{
  	echo $sql->error;
    echo "<h5>Cadastrado com sucesso!!";
    $mysqli->commit();
    $sql->close();
  }




    }
  }

}

?>
