<?php
include ('conecta.php');




//Carrega combo categorias


	$campo =  $_POST['combo_categorias'];
	$sql = $mysqli->prepare('SELECT id,descricao from assunto where categoria_id like ? ');
	$sql->bind_param("i",$campo);
	$sql->execute();
	$sql->bind_result($id,$descricao);
	
	echo "<option value=''>Selecione o assunto </option>	";
		while ($sql->fetch()){
			echo "
					<option value='$id'>$descricao </option>
			
				 ";
		   
		}

		
?>