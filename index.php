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

$a = 3;
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
echo "<br/>";
echo "<br/>";



/* -----------------------------   БЛОК 1 - УРОК 3   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 1 - УРОК 3   ------------------------------------- </strong><br/><br/>";

/* Работа с if-else */
echo "<strong> Работа с if-else </strong><br/>";

$a = 0;
if ($a == 0) {
        echo "Верно";
} else {
        echo "Неверно";
};
echo "<br/>";
echo "<br/>";

$a = 1;
if ($a > 0) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = -1;
if ($a < 0) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = 0;
if ($a >= 0) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = 0;
if ($a <= 0) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = 1;
if ($a != 0) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = "test";
if ($a == "test") echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = 1;
if ($a === 1) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

/* Работа с empty и isset */
echo "<strong> Работа с empty и isset </strong><br/>";

$a = null;
if (empty($a)) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = 1;
if (!empty($a)) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = 3;
if (isset($a)) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = null;
if (!isset($a)) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

/* Работа с логическими переменными */
echo "<strong> Работа с логическими переменными </strong><br/>";

$var = true;
if ($var == true) echo "Верно"; else "Неверно";
echo "<br/>";
echo "<br/>";

if ($var == true){
        echo "Верно";
} else {
        echo "Неверно";
};
echo "<br/>";
echo "<br/>";

$var = false;
if ($var != true) echo "Верно"; else "Неверно";
echo "<br/>";
echo "<br/>";

if ($var != true){
        echo "Верно";
} else {
        echo "Неверно";
};
echo "<br/>";
echo "<br/>";

/* Работа с OR и AND */
echo "<strong> Работа с OR и AND </strong><br/>";

$a = 2;
if ($a > 0 && $a < 5) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

$a = 5;
if ($a == 0 || $a == 2) {
        echo $a += 7;        
} else {
        echo $a /= 10;
}
echo "<br/>";
echo "<br/>";

$a = 1; 
$b = 3;
if ($a <= 1 && $b >= 3) {
        echo $a + $b;
} else {
        echo $a - $b;
}
echo "<br/>";
echo "<br/>";

$a = 3; $b = 5;
if ($a > 2 && $a < 11 || $b >= 5 && $b < 14) echo "Верно"; else echo "Неверно";
echo "<br/>";
echo "<br/>";

/* На switch-case */
echo "<strong> На switch-case </strong><br/>";

$num = 1;
switch ($num) {
        case '1':
                $result = "зима";
        break;
        case '2':
                $result = "весна";
        break; 
        case '3':
                $result =  "лето";
        break;
        case '4':
                $result = "осень";
        break;
        default:
                $result = "ошибка";
        break;
}
echo $result;
echo "<br/>";
echo "<br/>";

/* Задачи */
echo "<strong> Задачи </strong><br/>";

$day = 30;
if ($day >= 1 && $day <= 10) {
        echo "Декада 1";
} elseif ($day >= 11 && $day <= 20) {
        echo "Декада 2";
} else echo "Декада 3"; // При условии, что значения только от 1 до 31.
echo "<br/>";
echo "<br/>";

$month = 12;
if ($month == 12 || $month >= 1 && $month < 3) {
        echo "зима";
} elseif ($month >= 3 && $month <= 5) {
        echo "весна";
} elseif ($month >= 6 && $month <= 8) {
        echo "лето";
} else echo "осень"; // При условии, что значения только от 1 до 12.
echo "<br/>";
echo "<br/>";

$year = 2020;
if ($year % 4 == 0  && $year % 100 != 0 || $year % 400 == 0) {
        echo "високосный";
} else echo "не вискокосный";
echo "<br/>";
echo "<br/>";

$str = 'abcde';
if ($str[0] === 'a') echo "да"; else echo "нет";
echo "<br/>";
echo "<br/>";

$str = '12345';
if ($str[0] == 1 || $str[0] == 2 || $srt[0] == 3) echo "да"; else echo "нет";
echo "<br/>";
echo "<br/>";

$str = [1,2,3];
foreach ($str as $num) {
        $num += $num;        
}
echo $num;
// решается сложением вручную, но мне хотелось применить foreach, поэтому [1,2,3], а не '123'
echo "<br/>";
echo "<br/>";

$str = '123456';
if (($str[0]+$str[1]+$str[2]) == ($str[3]+$str[4]+$str[5])) echo 'Да'; else echo 'Нет';
echo "<br/>";
echo "<br/>";	

/* -----------------------------   БЛОК 1 - УРОК 4   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 1 - УРОК 4   ------------------------------------- </strong><br/><br/>";

/* Работа с foreach */
echo "<strong> Работа с foreach </strong><br/>";

$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem) {
        echo $elem.'<br>';
}

echo "<br/>";
		

$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $key) {
        $result += $key;
}
echo $result;
echo "<br/>";
echo "<br/>";		

$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $key) {
        $result += pow($key, 2);       
}
echo $result;
echo "<br/>";
echo "<br/>";	

/* Работа с ключами */
echo "<strong> Работа с ключами </strong><br/>";

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

foreach ($arr as $key => $color) {
        echo $key . ' - ' . $color . '<br>';
}
echo "<br/>";
echo "<br/>";	

$arr = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400];
foreach ($arr as $key => $value) {
        echo $key . ' - зарплата ' . $value . ' долларов' . '<br>';
}
echo "<br/>";
echo "<br/>";

/* Циклы while и for */
echo "<strong> Циклы while и for </strong><br/>";

$a = 1;
while ($a <= 100) {
        echo $a . PHP_EOL;
        $a++;
}
echo "<br/>";
echo "<br/>";	

for ($i=1; $i < 101 ; $i++) { 
        echo $i . PHP_EOL;       
}
echo "<br/>";
echo "<br/>";	

$a = 11;
while ($a <= 33) {
        echo $a . PHP_EOL;
        $a++;
}
echo "<br/>";
echo "<br/>";	

for ($i=11; $i <= 33 ; $i++) { 
        echo $i . PHP_EOL;       
}
echo "<br/>";
echo "<br/>";

$a = 0;
while ($a <= 98) {
        echo $a + 2 . PHP_EOL;
        $a = $a +2;
}
echo "<br/>";
echo "<br/>";	

for ($i=2; $i <= 100 ; $i = $i +2) { 
        echo $i . PHP_EOL;       
}
echo "<br/>";
echo "<br/>";

$a = 1;
$b = 0;
while ($a <= 100) {
     $b = $b + $a;
     $a++;     
}
echo $b;
echo "<br/>";
echo "<br/>";	

$b = 0;
for ($i = 1; $i <= 100 ; $i++) { 
        $b = $b + $i;       
}
echo $b;
echo "<br/>";
echo "<br/>";

/* Задачи */
echo "<strong> Задачи </strong><br/>";

$arr = [2, 5, 9, 15, 0 , 4];
foreach ($arr as $value ) {
        if ($value > 3 && $value < 10) {
                echo $value . PHP_EOL;
        }
}
echo "<br/>";
echo "<br/>";

$arr = [1, 2, -2, -5, -7, 3, 9];
$sum = 0;
foreach ($arr as $value ) {
        if ($value > 0) {
                $sum = $sum + $value;
        }
}
echo $sum;
echo "<br/>";
echo "<br/>";

$arr = [ 1, 2, 5, 9, 4, 13, 4, 10];
foreach ($arr as $value) {
        if ($value == 4) {
                echo "Есть";
        break;
        }
}
echo "<br/>";
echo "<br/>";

$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $value) {
        if ($value[0] == 1 || $value[0] == 2 || $value[0] == 5) {
                echo $value . PHP_EOL;
        }
}
echo "<br/>";
echo "<br/>";

$arr = []; // заполняю массив через цикл
$a = 0;
while ($a < 9) {
        $arr[$a] = $a + 1;
        $a++;        
}
// хитрый способ
foreach ($arr as $value ) {
        echo '-' . $value;
}
echo '-'; 
echo "<br/>";
echo "<br/>";

// честный способ
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $key => $elem) {
        if ($key == 0) {
                echo '-' . $elem . '-';
        } else {
                echo $elem . '-';
        }
}
echo "<br/>";
echo "<br/>";

$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
foreach ($week as $key => $value) {
        if ($key >4) {
                echo "<strong>" . $value . "</strong>" . PHP_EOL;
        } else {
                echo $value . PHP_EOL;
        }
}
echo "<br/>";
echo "<br/>";

$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$day = 'Sat';
foreach ($week as $key => $value) {
        if ($value == $day) {
                echo "<em>" . $value . "</em>" . PHP_EOL;
        } else {
                echo $value . PHP_EOL;
        }
}
echo "<br/>";
echo "<br/>";

/* Задачи посложнее */
echo "<strong> Задачи посложнее </strong><br/>";
        
$arr = [0];
for ($i=0; $i < 100 ; $i++) { 
        $arr[$i] = $i + 1;
}

foreach ($arr as $key => $value) {
        echo $value . PHP_EOL;
}
echo "<br/>";
echo "<br/>";

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en = [];
$ru = [];
foreach ($arr as $key => $value) {
        $en[] = $key;
        $ru[] = $value;
}
foreach ($en as $key => $value) {
        echo $value . PHP_EOL;
}
echo "<br/>";
foreach ($ru as $key => $value) {
        echo $value . PHP_EOL;
}
echo "<br/>";
echo "<br/>";

$num = 1000;
$count = 0;
while ($num >= 50) {
        $num = $num / 2;
        $count++;
}
echo $count;
echo "<br/>";
echo "<br/>";

$num = 1000;
$count = 0;
for ($i = $num; $i > 50 ; $i = $i / 2) { 
        $count++;
}
echo $count;
echo "<br/>";
echo "<br/>";