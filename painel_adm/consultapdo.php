<?php
  session_start();
  if(isset($_SESSION['valida']))
  {
  try{
  $conectar=new PDO('mysql:host=127.0.0.1;port=3306;dbname=cebolinha_lanches', 'root', '');
  $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dados=$conectar->query("SELECT * FROM usuarios");
  
  foreach($dados as $linha)
  {
	  #echo $linha['email']."----".$linha['senha'];
   
       
    header('Location: pagina_inicial.php');   

     }
  } // fecha try
  
  catch (PDOException $erro)
  {
    echo "Nao posso fazer a pesquisa";
  }
  }
  else
  {
    echo "<script>
	       alert('Dados incorretos');
		   document.location.href=('login.php');
		   </script>";
  }
 ?>
