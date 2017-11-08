<?php
session_start();
include('conecta.php');


$acertos = 0;
$erros = 0;
$pontuacao = 0;


$array_perguntas = $_SESSION['array_perguntas'];

	
	if(isset($_POST['resposta'])){
		
		$resposta = $_POST['resposta'];
		$_SESSION['array_respostas'][$_SESSION['contador']] = $resposta;

	}else{

		$_SESSION['array_respostas'][$_SESSION['contador']] = '0';



	}

for($i=1;$i <= count($_SESSION['array_perguntas']);$i++){


   if(!isset($_SESSION['array_respostas'][$i])){
        
        $_SESSION['array_respostas'][$i] = '0';
        }

    

    $sql = $mysqli->prepare('SELECT d.descricao from dificuldade as d,pergunta as p WHERE (p.id= ?) and (p.dificuldade_id = d.id)');
    $sql->bind_param('i',$_SESSION['array_perguntas'][$i]['id']);
    $sql->execute();
    $sql->bind_result($dificuldade);
    $sql->fetch();
    $sql->close();
    
    
 



        if(isset($_SESSION['array_perguntas'][$i]['alternativa'][$_SESSION['array_respostas'][$i]]['ind_correta'])){


			if($_SESSION['array_perguntas'][$i]['alternativa'][$_SESSION['array_respostas'][$i]]['ind_correta'] == 'S'){
			           
			      
			           
			            $acertos++;         
			            switch ($dificuldade) {
			                case 'Basico':
			            $pontuacao = $pontuacao + '20';
			            break;
			            case 'Intermediario':
			    
			            $pontuacao = $pontuacao + '35';
			            break;
			            case 'Avancado':
			    
			            $pontuacao = $pontuacao + '50';
			            break;

			            }

 			}else $erros ++;



 		}else $erros ++;

}

        
     $xp = $_SESSION['xp']+ $pontuacao;
      $_SESSION['xp'] = $xp;
    $_SESSION['pont_bar'] = intval(($_SESSION['xp'] /$_SESSION['pont_max']) * 100 );

    $sql = $mysqli->prepare('INSERT INTO resultado(questionario_id ,aluno_id,acertos,erros,pontuacao)
            VALUES (?,?,?,?,?)');
    $sql->bind_param('iiiii',$_SESSION['quest_id'],$_SESSION['id'],$acertos,$erros,$pontuacao);
    $sql->execute();
    $sql->close();

 
    
   
    
    $sql = $mysqli->prepare('UPDATE aluno set xp = xp + ? where usuario_id = ?');
    $sql->bind_param('ii',$pontuacao,$_SESSION['id']);
    $sql->execute();
    $sql->close();
    
   
    
    if( $_SESSION['xp'] == $_SESSION['pont_max'] || $_SESSION['xp'] > $_SESSION['pont_max']){
        
        
        $_SESSION['level']++;
        $_SESSION['xp'] = $xp - $_SESSION['pont_max'];
        $_SESSION['pont_max'] = (($_SESSION['level'] * 1.5) * 150);
        $_SESSION['pont_bar'] = intval(($_SESSION['xp'] /$_SESSION['pont_max']) * 100 );
        $sql = $mysqli->prepare('UPDATE aluno set xp = ?,level = level +1 where usuario_id = ?');
        $sql->bind_param('ii',$_SESSION['xp'],$_SESSION['id']);
        $sql->execute();
        $sql->close();
        
    
    
        
    }
       
echo "

	<div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
      <!-- Modal content-->
	  
      <div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title'>Modal Header</h4>
        </div>
        <div class='modal-body'>
          <p>Você acertou $acertos questões e errou $erros.</p>
		  <p>Total: $pontuacao pontos.</p>
        </div>
        <div class='modal-footer'>
          <input style='width:100px' id='close' type='button'  class='btn btn-default' name='close' value='Concluir'>
        </div>
      </div>
      
    </div>
  </div>";




    unset($_SESSION['titulo_quiz'],$_SESSION['sql_perguntas'],$_SESSION['perguntas_array'],$_SESSION['contador'],$_SESSION['array_respostas']);unset($_SESSION['titulo_quiz'],$_SESSION['sql_perguntas'],$_SESSION['array_perguntas'],$_SESSION['contador'],$_SESSION['array_respostas']);







?>

