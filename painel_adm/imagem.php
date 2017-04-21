<?php
	
 	
  $conectar=new PDO('mysql:host=127.0.0.1;port=3306;dbname=cebolinha_lanches', 'root', '');
  $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dados=$conectar->query("SELECT * FROM quem_somos");
 # $query = "SELECT * FROM quem_somos order by id desc limit 1";

	 



?>

