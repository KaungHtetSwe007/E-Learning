<form action="" method="post"> 
  <input type="submit" value="Logout"> 
</form> 
<?php 
  session_start(); 
  session_destroy(); 
  echo "<script type='text/javascript'>
				alert('You have successfully logout.');
				window.location.href = 'home.php';
</script>";
?> 