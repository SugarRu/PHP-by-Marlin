<?php 
/* -----------------------------   Основы синтаксиса PHP   --------------------------------------*/
echo "<strong> -----------------------------   Основы синтаксиса PHP   ------------------------------------- </strong><br/><br/>";

/* Суперглобальный массив $_GET */
echo "<strong> Суперглобальный массив \$_GET </strong><br/>";
echo "<br/>";


/* Задание 1 */
echo "<strong> Задание 1 </strong><br/>";
echo "<br/>";

if (isset($_GET['num'])) {
  if ($_GET['num'] == 1) {
    echo "Привет";
  } else if ($_GET['num'] == 2) {
    echo "Пока";
  }
}
/* http://marlinphp/?num=2 */

echo "<br/>";
echo "<br/>";

/* Задание 2 */
echo "<strong> Задание 2 </strong><br/>";
echo "<br/>";

$arr = range (1, 5, 1);

foreach ($arr as $key => $value) {
  
  echo '<a href=http://marlinphp/?num=' . $value . '> http://marlinphp/?num=' . $value . '</a>' . '<br>';
}

if (isset($_GET['num'])) {
  echo 'Было переданно: ' . $_GET['num'];
}
echo "<br/>";
echo "<br/>";

/* Суперглобальный массив $_POST */
echo "<strong> Суперглобальный массив \$_POST </strong><br/>";
echo "<br/>";


/* Задание 1 */
echo "<strong> Задание 1 </strong><br/>";
echo "<br/>";

?>
<form action="" method="POST">
  <input type="text" name="name" placeholder="name">
  <br>
  <input type="text" name="age" placeholder="age">
  <br>
  <textarea name="comment" placeholder="message"></textarea>
  <br>
  <input type="submit" name="submit">
</form>

<?php 

if (isset($_POST['submit'])) {
  foreach ($_POST as $key => $value) {
    if ($value != 'Отправить') {
      echo $value . '<br>';
    } else break;    
  }
}
echo '<hr>' . '<br>';

if (isset($_POST['submit'])) {
  echo 'Your name: ' . $_POST['name'] . '<br>';
  echo 'Your age: ' . $_POST['age']. '<br>';
  echo 'Your message: ' . $_POST['comment']. '<br>';
}
echo "<br/>";


/* Задание 2 */
echo "<strong> Задание 2 </strong><br/>";
echo "<br/>";

$login = 'login';
$pass = 'pass';
?>

<form action="" method="POST">
  <input type="text" name="login" placeholder="Login">
  <input type="text" name="pass"  placeholder="Password">
  <input type="submit" name="submit">
</form>

<?php 
  if (isset($_POST['submit'])) {
    echo ($_POST['login'] == $login && $_POST['pass'] == $pass) 
    ?  "Access granted" 
    :  "Access denied";
  }