<?php 

   $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=cebolinha_lanches', 'root', '');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Página Inicial - Painel de Controle">
    <meta name="author" content="Marcielli Oliveira">
    <title>Editar - Quem Somos</title>

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
    <h3>Editar Página - Quem Somos</h3>
      <br>
    <div class="container">    

      <div class="col-sm-4"></div>
      <div class="col-sm-4 " >
       
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data" >  <!-- Login -->               
      
        <div class="field-wrap">
       <!-- <h4 class="estiloH3 ">Upload Foto</h4>-->
        <input type="file" class="form-control" name="uploadfoto1"/>
        </div>  
        <br>
        <div class="field-wrap">
        <h4 class="estiloH3 ">Sobre a Empresa</h4>
        <textarea name="sobreEmpr" rows="10" cols="60" wrap="virtual"></textarea>
        </div>           
          
          <button type="submit" value="submit" class="btn btn-default">Enviar</button>

        </form>
      </div>
      <div class="col-sm-4"></div>  
    

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php 



  $arq_name=$_FILES['uploadfoto1']['name']; //O nome do ficheiro
  $arq_size=$_FILES['uploadfoto1']['size']; //o tamanho do ficheiro
  $arq_tmp=$_FILES['uploadfoto1']['tmp_name']; //o tamanho temporário do arquivo

  $sobre=$_POST['sobreEmpr'];

  $conecta=new PDO('mysql:host=127.0.0.1;port=3306;dbname=cebolinha_lanches','root','');
  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //grava
  $textoSQL="INSERT INTO quem_somos(foto, texto) VALUES ('".$arq_name."','".$sobre."')";  
  move_uploaded_file($arq_tmp, "imagens/quem_somos/".$arq_name);
  $conecta->exec($textoSQL);

?>