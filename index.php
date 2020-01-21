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