<?php 
session_start();

if (isset($_POST['submit'])) {
  $_SESSION['age'] = $_POST['age'];
  $_SESSION['city'] = $_POST['city'];
}
?>

<form action="logout.php" method="POST">
  <input type="text" name="name" placeholder="Name"> <br>
  <input type="text" name="age" value="<?php echo $_SESSION['age'] ?>"><br>
  <input type="text" name="city" value="<?php echo $_SESSION['city'] ?>"><br>
  <input type="submit" name="submit" value="Terminate session">
</form>
