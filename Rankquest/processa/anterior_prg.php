<?php
include('conecta.php');
session_start();

$array_perguntas = $_SESSION['array_perguntas'];


if(isset($_POST['resposta'])){
  
  $resposta = $_POST['resposta'];
  $_SESSION['array_respostas'][$_SESSION['contador']] = $resposta;

}else{
  
  $_SESSION['array_respostas'][$_SESSION['contador']] = '0';



}







$_SESSION['contador']--;



if(($_SESSION['contador'] <1) || ($_SESSION['contador'] > count($_SESSION['array_perguntas']))){
  
  $_SESSION['contador']++;
  
}


if(count($_SESSION['array_respostas']) > $_SESSION['contador']){
  $alternativa_select = $_SESSION['array_respostas'][$_SESSION['contador']];

  switch ($alternativa_select) {
    case '1':
    echo "<script>$('#1').prop('checked', true)</script>";
    break;
    case '2':
    echo "<script>$('#2').prop('checked', true)</script>";
    break;
    case '3':
    echo "<script>$('#3').prop('checked', true)</script>";
    break;
    case '4':
    echo "<script>$('#4').prop('checked', true)</script>";
    break;	

    case '5':
    echo "<script>$('#5').prop('checked', true)</script>";
    break;	
    

  }
  
}





$enunciado = $array_perguntas[$_SESSION['contador']]['enunciado'];
$numero = $_SESSION['contador'];
echo " <h4>$_SESSION[titulo]</h4>
<form>
<h5>$numero)$enunciado</h5>";


for($j='1';$j<=count($array_perguntas[$_SESSION['contador']]['alternativa']);$j++){
  $alt = $j;
  $alternativa = $array_perguntas[$_SESSION['contador']]['alternativa'][$j]['descricao'];
  $ind_correta = $array_perguntas[$_SESSION['contador']]['alternativa'][$j]['ind_correta'];


  echo "
        <div class='input-group quiz-group'>
        <span class='input-group-addon'>
        <input type='radio' '$alt' name='resposta' value='$alt'>
        </span>
        <textarea readonly class='form-control' name='a$j'>$alternativa</textarea>
        </div>";;  }
  echo"


  


  <input  style='width:100px; float: left; margin-top: 7px;' id='anterior' type='button'  class='btn btn-success btn-block' name='anterior' value='Anterior'>
  <input style='width:100px; float: left; margin-left: 20px' id='proxima' type='button'  class='btn btn-success btn-block' name='proxima' value='Proxima'>
  <input style='width:100px; margin-left: 240px; ' id='finalizar' type='button'  class='btn btn-success btn-block' name='finalizar' value='Finalizar'>";
  
  ?>
