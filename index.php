<?php 
/* -----------------------------   БЛОК 1 - УРОК 2   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 1 - УРОК 1   ------------------------------------- </strong><br/><br/>";
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
echo "<br/>";
echo "<br/>";


/* -----------------------------   БЛОК 1 - УРОК 2   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 1 - УРОК 2   ------------------------------------- </strong><br/><br/>";

/* Работа с массивами */
echo "<strong> Работа с массивами </strong><br/>";
$arr = ['a', 'b', 'c'];
var_dump($arr);
echo "<br/>";

echo $arr[0];
echo "<br/>";
echo $arr[1];
echo "<br/>";
echo $arr[2];
echo "<br/>";

$arr = ['a', 'b', 'c', 'd'];
echo $arr[0]. "+" . $arr[1] ."," . $arr[2] . "+" . $arr[3];
echo "<br/>";

$arr = ['2', '5', '3', '9'];
echo $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo "<br/>";

$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
echo "<br/>";
echo "<br/>";

/* Ассоциативные массивы */
echo "<strong> Ассоциативные массивы </strong><br/>";

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'];
echo "<br/>";

$arr = [
        'a' => 1,
        'b' => 2,
        'c' => 3
];
echo $arr['a'] + $arr['b'] + $arr['c'];
echo "<br/>";

$arr = [
        'Коля' => '1000$',
        'Вася' => '500$',
        'Петя' => '200$'
];

echo $arr['Петя'] . " / " . $arr['Коля'];
echo "<br/>";

$arr = [
        1 => "Понедельник",
              "Вторник",
              "Среда",
              "Четверг",
              "Пятница",
              "Суббота",
              "Воскресенье"
];
echo $arr[1];
echo "<br/>";


echo " <strong> Не понимаю задание: </strong> Пусть теперь номер дня недели хранится в переменной $day...";
echo "<br/>";
echo "<br/>";



/* Многомерные массивы */
echo "<strong> Многомерные массивы </strong><br/>";

$arr = [
        'cms' => [
                  'joomla',
                  'wordpress',
                  'drupal'],
        'colors' => [
                     'blue'=>'голубой',
                     'red'=>'красный',
                     'green'=>'зеленый']
];

echo $arr['cms'][0] . ", " . $arr['cms'][2] . ", " . $arr['colors']['green'] . ", " . $arr['colors']['red']; 
echo "<br/>";
echo "<br/>";

$arr = [ $lang =
        'ru' => [ 1 => 
                  "Понедельник",
                  "Вторник",
                  "Среда",
                  "Четверг",
                  "Пятница",
                  "Суббота",
                  "Воскресенье"
                ],
        'en' => [ 1 =>
                  "Monday",
                  "Tuesday",
                  "Wednesday",
                  "Thursday",
                  "Friday",
                  "Saturday",
                  "Sunday"
                ]
];
echo $arr['ru'][1] . ", " . $arr['en'][3];
echo "<br/>";
echo "<br/>";

$lang = ['ru', 'en'];
$day = [1, 2, 3, 4, 5, 6, 7];