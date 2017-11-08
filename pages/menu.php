<?php 
session_start();

if(!isset($_SESSION['login'])){//não está logado
	echo '<script>top.location.href="landing.php";</script>';

}

?>
<html lang="pt-br">
<head>
	<title>RankQuest</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src='../js/jquery-3.2.1.min.js'></script>
	<script src='../js/ajaxrq.js'></script>
	<script src='../js/rankquest.js'></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link href="../css/rankquest.css" rel="stylesheet">
	<link rel="stylesheet" href="../addons/fa/css/font-awesome.min.css">

	<style>
			#myProgress {
  width: 100%;
  background-color: #ddd;
  margin-left: 10px;
}

#myBar {
  
  height: 18px;
  background-color: #4CAF50;
}
 </style>   
</head>

<body>


	<ul class="sidebar-nav">
		<li class="sidebar-brand">
			<a class="logotip" href="#">
				<img src="../img/sblgw.png" alt="" class="img-responsive">
			</a>
		</li>

	<div id="wrapper">
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav" style="margin-left:0;">
				<li> <a href='dashboard.php' style="text-align: center;margin-left: -30px; color: white; font-size: 25px;">RankQuest</a>	</li>
				
		<h6 style='color:white;margin:20px;'>Bem vindo <?php echo $_SESSION['login']?></h6>
	</li>
		<li style='width:200px'><?php echo  "<h6 style='color:white;margin-left:55px;'>Level:$_SESSION[level] <br> XP:$_SESSION[xp] / $_SESSION[pont_max]</h6><div   id='myProgress'><div style='width:$_SESSION[pont_bar]%' id='myBar'></div></div>";?>
			

		</li>



		<?php

		if($_SESSION['tipo'] == 'A'){

			echo'
			<li>
			<a href="buscaquiz.php">Buscar Quiz</a>
			</li>
			<li>
			<a href="ranking.php">Ranking</a>
			</li>
			<li>
			<a href="vagas.php">Vagas</a>
			</li>
			<li>
			<a href="minhaconta.php">Minha Conta</a>
			</li>
			<li>
			<a href="../processa/processa_logout.php">Sair</a>
			</li>';
		}

		elseif($_SESSION['tipo'] == 'P'){

			echo'
			<li>
			<a href="buscaquiz.php">Buscar Quiz</a>
			</li>
			<li>
			<a href="ranking.php">Ranking</a>
			</li>
			<li>
			<a href="vagas.php">Vagas</a>
			</li>
			<li>
			<a href="cadastraquiz.php">Cadastrar Quiz</a>
			</li>
			<li>
			<a href="minhaconta.php">Minha Conta</a>
			</li>
			<li>
			<a href="../processa/processa_logout.php">Sair</a>
			</li> ';
		}



		elseif($_SESSION['tipo'] == 'E'){

			echo'
			<li>
			<a href="ranking.php">Ranking</a>
			</li>
			<li>
			<a href="cadastrovaga.php">Cadastrar Vaga</a>
			</li>
			<li>
			<a href="minhaconta.php">Minha Conta</a>
			</li>
			<li>
			<a href="../processa/processa_logout.php">Sair</a>
			</li> ';
		}




		elseif($_SESSION['tipo'] == 'S'){

			echo'
			
			<li>
			<a href="buscaquiz.php">Buscar Quiz</a>
			</li>
			<li>
			<a href="ranking.php">Ranking</a>
			</li>
			<li>
			<a href="vagas.php">Vagas</a>
			</li>
			<li>
			<a href="cadastraquiz.php">Cadastrar Quiz</a>
			</li>
			<li>
			<a href="cadastrovaga.php">Cadastrar vaga</a>
			</li>
			<li>
			<a href="minhaconta.php">Minha Conta</a>
			</li>
			<li>
			<a href="../processa/processa_logout.php">Sair</a>
			</li> ';
		}


		?>
	</ul>


</li>
</ul>
</div>
</div>
