<?php 
session_start();

if(!isset($_SESSION['login'])){//não está logado
  echo '<script>top.location.href="landing.php";</script>';

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- Bootstrap core CSS-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src='js/jquery-3.2.1.min.js'></script>
  <script src='js/ajaxrq.js'></script>
  <script src='js/rankquest.js'></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <!-- Toggle between fixed and static navbar-->

  <style>
  #myProgress {
    width: 100%;
    background-color: #ddd;
    margin-left: 10px;
    margin-bottom: 20px;
  }

  #myBar {

    height: 18px;
    background-color: #4CAF50;
  }
</style>   

</head>

<body class="fixed-nav bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">RankQuest</a>

      <!-- BARRA DE PROGRESSO! 

      <a style='color:white; margin:7px; text-align: center;'>Bem vindo <?php echo $_SESSION['login']?></a><br>

      <a style='width:200px;'><?php echo  "<a style='color:white; text-align:center'>Level:$_SESSION[level] <br> XP:$_SESSION[xp] / $_SESSION[pont_max]</a>
      <div id='myProgress'>

      <div style='width:$_SESSION[pont_bar]%' id='myBar'></div>

    </div>";?>

  -->






  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">

    <?php if($_SESSION['tipo'] == 'A'){

      echo'

      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">


      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Busca Quiz">
      <a class="nav-link" href="buscaquiz.php">
      <i class="fa fa-fw fa-table"></i>
      <span class="nav-link-text">Buscar Quiz</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ranking">
      <a class="nav-link" href="ranking.php">
      <i class="fa fa-fw fa-area-chart"></i>
      <span class="nav-link-text">Ranking</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vagas">
      <a class="nav-link" data-toggle="tooltip" href="vagas.php" data-parent="#exampleAccordion">
      <i class="fa fa-handshake-o"></i>
      <span class="nav-link-text">Vagas</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="conta.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Minha conta</span>
      </a>
      </li>

      </ul>

      <!-- Navbar Search -->
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-fw fa-sign-out"></i>Sair</a>
      </li>
      </ul>


      ';
    }



    elseif($_SESSION['tipo'] == 'P'){

      echo'


      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="cadastraquiz.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Cadastro de questionário</span>
      </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="myquiz.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Meus questionarios</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ranking">
      <a class="nav-link" href="ranking.php">
      <i class="fa fa-fw fa-area-chart"></i>
      <span class="nav-link-text">Ranking</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="conta.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Minha conta</span>
      </a>
      </li>

      </ul>

      <!-- Navbar Search -->
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-fw fa-sign-out"></i>Sair</a>
      </li>
      </ul>








      ';
    }



    elseif($_SESSION['tipo'] == 'E'){

      echo'


      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">


      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="cadastravaga.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Cadastro de vaga</span>
      </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="cadastraquiz.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Cadastro de questionário</span>
      </a>
      </li>


      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="minhasvagas.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Minhas vagas</span>
      </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="myquiz.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Meus questionarios</span>
      </a>
      </li>

       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="conta.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Minha conta</span>
      </a>
      </li>


      </ul>

      <!-- Navbar Search -->
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-fw fa-sign-out"></i>Sair</a>
      </li>
      </ul>



      ';
    }




    elseif($_SESSION['tipo'] == 'S'){

      echo'




      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
      <a class="nav-link" href="dashboard.php">
      <i class="fa fa-fw fa-dashboard"></i>
      <span class="nav-link-text">Dashboard</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ranking">
      <a class="nav-link" href="ranking.php">
      <i class="fa fa-fw fa-area-chart"></i>
      <span class="nav-link-text">Ranking</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Busca Quiz">
      <a class="nav-link" href="buscaquiz.php">
      <i class="fa fa-fw fa-table"></i>
      <span class="nav-link-text">Buscar Quiz</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vagas">
      <a class="nav-link" data-toggle="tooltip" href="vagas.php" data-parent="#exampleAccordion">
      <i class="fa fa-handshake-o"></i>
      <span class="nav-link-text">Vagas</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="conta.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Minha conta</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="cadastraquiz.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Cadastro de quiz</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="cadastravaga.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Cadastro de vaga</span>
      </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="myquiz.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Meus questionarios</span>
      </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Minha Conta">
      <a class="nav-link" data-toggle="tooltip" href="minhasvagas.php" data-parent="#exampleAccordion">
      <i class="fa fa-address-card-o"></i>
      <span class="nav-link-text">Minhas vagas</span>
      </a>
      </li>
      </ul>

      <!-- Navbar Search -->
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-fw fa-sign-out"></i>Sair</a>
      </li>
      </ul>





      ';
    }

    ?>
  </div>
</nav>

<!-- Scroll to Top Button-->

<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="processa/processa_logout.php">Sair</a>
      </div>
    </div>
  </div>
</div>