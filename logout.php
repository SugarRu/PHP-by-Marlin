<?php 

session_start();

unset($_SESSION['age']);
unset($_SESSION['city']);
?>

<form action="index.php">
  <input type="submit" value="Home">
</form>