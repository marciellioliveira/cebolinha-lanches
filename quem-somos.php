<?php include("includes/header.php"); ?>

	<div class="jumbotron bgCor">

		<div class="container">

			<h4 class="titulo">Quem Somos</h4>

			<div class="row">
			  <div class="col-xs-12 col-md-12 col-lg-6">
			    <a href="contato.php" class="thumbnail img">
			     <!-- <img src="imagens/carrinho-exemplo.jpg" alt="...">
			     <img src="imagem.php?cod_imagem=1" />-->
			     <?php

			    	  $conectar=new PDO('mysql:host=127.0.0.1;port=3306;dbname=cebolinha_lanches', 'root', '');
					  $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					  $dados=$conectar->query("SELECT * FROM quem_somos ORDER BY id")->fetchAll();

					  $count=count($dados);
					  //print $count;			

					  foreach ($dados as $linha) {
					  	
					  	 $id1=$linha['id'];
 
					  }	 

					  if($id1 == $count) {

					  	$dados1=$conectar->query("SELECT * FROM quem_somos WHERE id=".$count);

					  		foreach ($dados1 as $linha1) {
					  			$caminho_img=$linha1['foto'];
					  			$texto_sobre=$linha1['texto'];
					  		}



					  	echo '<img src="painel_adm/imagens/quem_somos/'.$caminho_img.'" />';

					  	
					  }else {
					  	echo "not ok";
					  }
			     ?>				

			    </a>
			  </div>	

			  <div class="col-xs-12 col-md-12 col-lg-6">	
				<p class="texto">
				Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. Proin in tellus sit amet nibh dignissim sagittis. Vivamus luctus egestas leo. Maecenas sollicitudin. 
				<br><br>
			    Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi quis velit. Integer in sapien. Fusce tellus odio, dapibus id, fermentum quis, suscipit id, erat. Fusce aliquam vestibulum ipsum. Aliquam erat volutpat. Pellentesque sapien. Cras elementum. Nulla pulvinar eleifend sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque porta. Vivamus porttitor turpis ac leo. </p>
			  </div>  
			</div>

		</div>
		
	</div>

<?php include("includes/footer.php"); ?>