<?php include("includes/header.php"); ?>

<div class="jumbotron bgCor">

		<div class="container">

			<h4 class="titulo">Cardápio</h4>

			<p class="texto">O Cebolinha Lanches oferece a você um cardápio cheio de variedades.</p>
			
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#lanches" aria-controls="lanches" role="tab" data-toggle="tab">Lanches</a></li>
			    <li role="presentation"><a href="#bebidas" aria-controls="bebidas" role="tab" data-toggle="tab">Bebidas</a></li>
			    <li role="presentation"><a href="#sobremesas" aria-controls="sobremesas" role="tab" data-toggle="tab">Sobremesas</a></li>
			
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="lanches">

			    	<?php include("includes/cardapio-lanches.php"); ?>

			    </div>
			    <div role="tabpanel" class="tab-pane" id="bebidas">

			    	<?php include("includes/cardapio-bebidas.php"); ?>

			    </div>
			    <div role="tabpanel" class="tab-pane" id="sobremesas">
			    	
			    <?php include("includes/cardapio-sobremesas.php"); ?>

			    </div>
		
			  </div>

			</div>

		</div>
		
	</div>

<?php include("includes/footer.php"); ?>