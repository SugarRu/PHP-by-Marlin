<?php 
session_start();
setcookie('birthday', $_GET['birthday']);

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
echo "<br/><hr>";

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
echo "<strong> Альтернативный вариант </strong>" . '<br>';

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
echo "<br/>";
echo "<br/><hr>";

/* Основы работы с Сессией и Куки */
echo "<strong> Основы работы с Сессией и Куки </strong><br/>";
echo "<br/>";


/* Задание 1 */
echo "<strong> Задание 1 </strong><br/>";
echo "<br/>";

if ($_SESSION['refresh'] != 0) {

  echo 'Refreshed: ' .  $_SESSION['refresh'] . 'times';
  $_SESSION['refresh']++;
  
} else { 

  echo "Refresh the page";
  $_SESSION['refresh']++ ;
}

echo '<br>'; echo '<br>';
echo 'Для обнуления инициировать - $_SESSION = [];';

echo '<br>'; echo '<br>';


/* Задание 2 - 3 */
echo "<strong> Задание 2 - 3 </strong><br/>";
echo "<br/>";
?>
<form action="form.php" method="POST">
  <input type="text" name="age" placeholder="age">
  <input type="text" name="city" placeholder="city">
  <input type="submit" name="submit">
</form>

<?php 

echo '<br>'; echo '<br>';


/* Задание 4 */
echo "<strong> Задание 4 </strong><br/>";
echo "<br/>";

?>

<form action="" method="GET">
  <input type="text" name="birthday" placeholder="Birthday dd.mm.yyyy">
  <input type="submit" name="submit">
</form>

<?php 

if (!empty($_GET['birthday'])) {
  
  echo "Refresh or Come again" . "<br>";  
}

if (isset($_COOKIE['birthday'])){

  $arr = explode('.', $_COOKIE['birthday']);

  if ($_COOKIE['birthday'] == date('d.m.Y', time())) {

    echo "Happy birthday";
  } else {

    $date = floor((mktime(0,0,0,(int)$arr[1], (int)$arr[0], (int)$arr[2]) - time()) / 24 / 3600);
    
    if ($date < 0) {

      $date2 = ((mktime(0, 0, 0, 12, 31, (int)$arr[2]+1) - mktime(0,0,0,12,31,(int)$arr[2])) / 24 / 3600);      
      echo "Days till birthday: " . ($date2 + $date);

    } else {

      echo "Days till birthday: " . $date;
    }             
  }
}
echo '<br> У меня идет сдвиг на 1 день, возможно из-за разницы во времени, другой причины не нашел' ;

