<?php include("includes/header.php"); ?>

  <!-- Primeiro Slide de Imagens da Página -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagens/produtos/lanches/lanches.jpg" alt="1">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="imagens/produtos/lanches/lanches.jpg" alt="2">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left icon-success" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right icon-success" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  <br>
  </div>
   <!-- Fim do primeiro slide de imagens -->

  <div class="jumbotron">
    <div class="container">
    <a href="cardapio-cebolinha-lanches.php" class="cardapio">CARDÁPIO</a>
    <p class="info-cardapio">Confira os tradicionais, saborosos e inconfundíveis lanches do Cebolinha Lanche.</p>
    
    </div>
  </div>

  <div class="container">
    <p class="info-hashtag">Use a hashtag <a href="cliente-feliz.php">#cebolinhalanches</a> e apareça aqui também!</p>  
  </div>

    <!-- 4 Imagens de clientes satisfeitos -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="row">
        <div class="col-xs-6 col-md-3">         
          <a class="thumbnail">
            <img src="imagens/produtos/lanches/lanches.jpg" alt="...">            
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="imagens/produtos/lanches/lanches.jpg" alt="...">            
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="imagens/produtos/lanches/lanches.jpg" alt="...">            
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="imagens/produtos/lanches/lanches.jpg" alt="...">            
          </a>
        </div>    
      </div>
      
        <div class="carousel-caption">
        </div>
      </div>
      
      </div>
    </div>

   
  <br>
  </div>
  <!-- Fim do segundo slide de imagens -->
<?php include("includes/footer.php"); ?>