<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Página Inicial - Painel de Controle">
    <meta name="author" content="Marcielli Oliveira">
    <title>Pagina Inicial - ADM</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>        
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="pagina_inicial.php">Início </a></li>
          <li><a href="edit_quemsomos.php">Quem Somos</a></li>
          <li><a href="#">Cardápio</a></li>
          <li><a href="#">Promoções</a></li>
          <li><a href="#">Cliente Feliz</a></li>
          <li><a href="#">Contato</a></li>     
          <li><a href="logout.php">Sair</a></li>     
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
      
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

    <div class="jumbotron bgCor">

    <?php           

      session_start();
      $email = $_SESSION['email']; 

      switch($email) {

        case "elida@gmail.com":
          echo "<h1>Olá Elida</h1>";
          echo "<br>";
          echo "Você está logada como: $email";
          break;
        case "di@gmail.com":
           echo "<h1>Olá Di</h1>";
           echo "<br>";
           echo "Você está logado como: $email";
           break;
        case "ma@gmail.com":
           echo "<h1>Olá Marcielli</h1>";
           echo "<br>";
           echo "Você está logado como: $email";
           break;
        default:
          echo "Erro";
          break;
      }      
    ?>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
