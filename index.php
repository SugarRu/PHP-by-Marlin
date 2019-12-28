<?php 

/* Работа с переменными */
echo "<strong> Работа с переменными </strong><br/>";
$a = 3;
echo $a;
echo "<br/>";

$a = 10;
$b = 2;
echo $a + $b, " / ", $a-$b, " / ", $a * $b, " / ", $a / $b; 
echo "<br/>";

$c = 15;
$d = 2;
echo $result = $c + $d;
echo "<br/>";

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
echo $result = $c + $d;
echo "<br/>";
echo "<br/>";

/* Работа со строками */
echo "<strong> Работа  со строками </strong><br/>";
$text = "Привет, Мир!";
echo $text;
echo "<br/>";

$text1 = "Привет,";
$text2 = "Мир!";
echo $text1 . " " . $text2;
echo "<br/>";

$name = "Andrey";
echo "Привет, ".$name;
echo "<br/>";

$age = 29;
echo "Мне ". $age . " лет";
echo "<br/>";
echo "<br/>";

/* Обращение к символам строки */
echo "<strong> Обращение к символам строки </strong><br/>";
$text = "abcde";
echo $text[0], $text[2], $text[4];
echo "<br/>";
$text[0] = "!";
echo $text;
echo "<br/>";

$num ="12345";

for ($i = $num[0]; $i <= $num[4]; $i++) { 
  $j += $i;  
}
echo $j;
echo "<br/>";
echo "<br/>";

/* Практика*/
echo "<strong> Практика </strong><br/>";

function seconds($hour, $day, $month) {

  $hour_to_seconds = $hour * 3600;
  $day_to_seconds = $day * 24 * 3600;
  $month_to_seconds = $month * 30 *24 * 3600; 

  echo $hour_to_seconds;
  echo "<br/>";

  echo $day_to_seconds;
  echo "<br/>";

  echo $month_to_seconds;
  echo "<br/>";
};

seconds(1,1,1);

$hour = 22;
$minute = 15;
$second = 42;

echo "мое время - " . $hour . ":" . $minute . ":" . $second;
echo "<br/>";

$a = 2;
echo $a *= $a;
echo "<br/>";
echo "через pow: " . pow($a, 1); 
echo "<br/>";
echo "<br/>";

/* Работа с присваиванием и декрементами*/
echo "<strong> Работа с присваиванием и декрементами</strong><br/>";

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . "<br/>";

$text = 'Я';
$text .=' хочу';
$text .=' знать';
$text .=' PHP!';
echo $text. "<br/>";

$var = 10;
$var++;
$var++;
$var--;
echo $var. "<br/>";

$var = 10;
$var += 7;
$var += 1;
$var--;
$var += 12;
$var *=7;
$var -= 15;
echo $var;