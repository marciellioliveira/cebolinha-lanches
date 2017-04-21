<?php
session_start();
$user=$_POST['email'];
$pass=$_POST['senha'];
try {
   $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=cebolinha_lanches', 'root', '');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
   $consulta = $conn->query("SELECT * FROM usuarios WHERE email='$user' AND senha='$pass'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
   if ($linha>0)
   {   
   $_SESSION['email']=$user;
	 $_SESSION['valida']='1';
     header('location: consultapdo.php');
   }
   else
   {
     echo "<script>
	       alert('Dados incorretos');
		   document.location.href=('login.php');
		   </script>";
   }
   
 } // fecha try
 catch(PDOException $e)
 {
   echo 'ERRO: ' . $e->getMessage();
 }
?>