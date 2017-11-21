<?php
include('conecta.php');



if(isset($_POST['funcao']) && $_POST['funcao'] == 'cadastro_usuario'){



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



if(isset($_POST['funcao']) && $_POST['funcao'] == 'cadastro_pergunta'){



	$sql = $mysqli->prepare('INSERT INTO pergunta(enunciado,categoria_id,assunto_id,dificuldade_id,autor_id)
	    VALUES(?,?,?,?,?)');

	$sql->bind_param('siiii',$_POST['enunciado'] ,$_POST['combo_categorias'] ,$_POST['combo_assunto'],$_POST['combo_dificuldade'],$_POST['autor_id']);
	$mysqli->autocommit(FALSE);
	$sql->execute();

	if($sql->error){
	    echo "<h5>Erro no cadastro: $sql->error</h5>";
	    $sql->close();
	}
	else{

		$sql = $mysqli->prepare('select LAST_INSERT_ID()');
		$sql->execute();
		$sql->bind_result($last_id);	
		$sql->store_result();
		$sql->fetch();

		$erro = '0';

		for($i='1';$i<='5';$i++){

		 if($_POST["a$i"] != ''){

		 


			$ind_correta = '';
 			if("a$i" == $_POST['ind_correta']){
		        $ind_correta = 'S';
		     }
		    $sql = $mysqli->prepare('INSERT INTO alternativa(pergunta_id,descricao,ind_correta)VALUES(?,?,?)');
		    $sql->bind_param('iss',$last_id,$_POST["a$i"],$ind_correta);
		    $sql->execute();

			if($sql->error){


       			 echo "<h5>Erro dso cadastro: $sql->error</h5>";
       			 $sql->close();
       			 $erro = '1';
    		}
    	}
	}

	if($erro != '1'){
		
		
		echo "<h5>Cadastrado com sucesso!!";
		 $mysqli->commit();
		$sql->close();
	}


		}







}


?>


