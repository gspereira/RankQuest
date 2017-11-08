
<?php
include "menu.php";
include "../processa/conecta.php"; 
    $_SESSION['quest_id'] = $_GET['id'];
    $quest_id = $_SESSION['quest_id'];
    $_SESSION['titulo'] = $_GET['titulo'];
    $_SESSION['contador'] = '0';



    $sql = $mysqli->prepare('select p.id,p.enunciado from pergunta as p ,pergunta_questionario as pq where pq.questionario_id= ? and pq.pergunta_id = p.id ');
    $sql->bind_param('i',$quest_id);
    $sql->execute();
    $sql->bind_result($pergunta_id,$enunciado);
    $sql->store_result();
    $contador= '0';


    while($sql->fetch()){



        $sql1 = $mysqli->prepare('select id,descricao,ind_correta from alternativa where pergunta_id = ? ');
        $sql1->bind_param('i',$pergunta_id);
        $sql1->execute();
        $sql1->bind_result($alternativa_id,$descricao,$ind_correta);
        $sql1->store_result();


            $array_perguntas[$contador] = array(

            'id' => $pergunta_id,
            'enunciado' => $enunciado);

        while($sql1->fetch()){


        $array_perguntas[$contador]['alternativa'][] = array(
            'id' => $alternativa_id,
            'descricao' => $descricao,
            'ind_correta' => $ind_correta);
   
                
         }


     $contador++;

    
    }
   
    $_SESSION['array_perguntas'] = $array_perguntas;
 

?>




<div class="container-fluid">
<div class="row">
    <form>
    <div id='resultado'  class="col-lg-12 col-sm-10 col-xs-1">
     
   <?php     


        $enunciado = $array_perguntas[$_SESSION['contador']]['enunciado'];
        $numero = $_SESSION['contador'] + 1;
            echo " <h4>$_SESSION[titulo]</h4>
                    <form>
                    <h5>$numero)$enunciado</h5>";
  

   for($j='0';$j<count($array_perguntas[$_SESSION['contador']]['alternativa']);$j++){
          $alt = $j+1;
            $alternativa = $array_perguntas[$_SESSION['contador']]['alternativa'][$j]['descricao'];
             $ind_correta = $array_perguntas[$_SESSION['contador']]['alternativa'][$j]['ind_correta'];


             echo "
                 <input id='$alt'   name='resposta' type='radio' value='$alt'></input>
                    <input readonly class='form-control' name='a$j' type='text' value='$alternativa'></input>";
        }





?>
<input  style='width:100px' id='anterior' type='button'  class='btn btn-success btn-block' name='anterior' value='Anterior'>
      <input style='width:100px' id='proxima' type='button'  class='btn btn-success btn-block' name='proxima' value='Proxima'>
       <input style='width:100px' id='finalizar' type='button'  class='btn btn-success btn-block' name='finalizar' value='Finalizar'>

    </div>
</form>
</div>
</div>
</body>

</html>
    


