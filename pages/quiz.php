
<?php
include "menu.php";
include "../processa/conecta.php"; 
$_SESSION['quest_id'] = $_GET['id'];
$quest_id = $_SESSION['quest_id'];
$_SESSION['titulo'] = $_GET['titulo'];
$_SESSION['contador'] = '1';



$sql = $mysqli->prepare('select p.id,p.enunciado from pergunta as p ,pergunta_questionario as pq where pq.questionario_id= ? and pq.pergunta_id = p.id ');
$sql->bind_param('i',$quest_id);
$sql->execute();
$sql->bind_result($pergunta_id,$enunciado);
$sql->store_result();
$contador= '1';
$contador2= '1';


while($sql->fetch()){

  $contador2='1';

  $sql1 = $mysqli->prepare('select id,descricao,ind_correta from alternativa where pergunta_id = ? ');
  $sql1->bind_param('i',$pergunta_id);
  $sql1->execute();
  $sql1->bind_result($alternativa_id,$descricao,$ind_correta);
  $sql1->store_result();


  $array_perguntas[$contador] = array(

    'id' => $pergunta_id,
    'enunciado' => $enunciado);

  while($sql1->fetch()){


    $array_perguntas[$contador]['alternativa'][$contador2] = array(
      'id' => $alternativa_id,
      'descricao' => $descricao,
      'ind_correta' => $ind_correta);

    $contador2++;
  }


  $contador++;


}

$_SESSION['array_perguntas'] = $array_perguntas;


?>




<div class="container-fluid">
  <div class="row">
    <form>
      <div id='resultado'  class="col-lg-10 col-sm-8 col-xs-1">

       <?php     


       $enunciado = $array_perguntas[$_SESSION['contador']]['enunciado'];
       $numero = $_SESSION['contador'] ;
       echo " 
       <h5>$numero)$enunciado</h5>";


       for($j='1';$j <= count($array_perguntas[$_SESSION['contador']]['alternativa']);$j++){
        $alt = $j;
        $alternativa = $array_perguntas[$_SESSION['contador']]['alternativa'][$j]['descricao'];
        $ind_correta = $array_perguntas[$_SESSION['contador']]['alternativa'][$j]['ind_correta'];


        echo "
        <div class='input-group quiz-group'>
        <span class='input-group-addon'>
        <input type='radio' '$alt' name='resposta' value='$alt'>
        </span>
        <textarea readonly class='form-control' name='a$j'>$alternativa</textarea>
        </div>";
      }





      ?>
      <input  style='width:100px; float: left; margin-top: 7px;' id='anterior' type='button'  class='btn btn-success btn-block' name='anterior' value='Anterior'>
      <input style='width:100px; float: left; margin-left: 20px' id='proxima' type='button'  class='btn btn-success btn-block' name='proxima' value='Proxima'>
      <input style='width:100px; margin-left: 240px; ' id='finalizar' type='button'  class='btn btn-success btn-block' name='finalizar' value='Finalizar'>

    </div>


  </form>



  <div id='modal'></div>















</div>


</div>




</body>

</html>



