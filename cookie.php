<?php 
ob_start();

/* Задание 5 - 6 */

if (isset($_COOKIE['visits'])) {

  $count = $_COOKIE['visits'] + 1;

} else {

  $count = 1;

}

setcookie("visits", $count);

echo "<p> Вы посещали эту страницу <b>". $count ."</b> раз</p>";
?>

<form action="" method="POST">
  <input type="submit" name="save" value="Save">
  <input type="submit" name="delete" value="Delete">
  <input type="submit" name="edit" value="Edit">
  <input type="text" name="value">
</form>

<?php

if (!empty($_POST['save'])) {
  save();
}

if (isset($_POST['delete'])) {
  delete();
}

if (!empty($_POST['edit'])) {
  edit();
}

function save() {  
  $cookie_count = $_COOKIE['visits'];
  echo "Saved: " . $cookie_count;  
}

function delete() {
  unset($_COOKIE['visits']);
  setcookie('visits', 0); 
}

function edit() {
 
  if (isset($_POST['value'])) {
  unset($_COOKIE['visits']);
  setcookie('visits',  $_POST['value']);    
  }
}

ob_flush();