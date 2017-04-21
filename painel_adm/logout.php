<?php
  session_start();
  session_destroy();
  echo "<script>
        alert ('Você está fora do sistema.');
		document.location.href=('index.php');
		</script>";
?>