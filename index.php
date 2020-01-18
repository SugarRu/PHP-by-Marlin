<?php 
/* -----------------------------   БЛОК 2 - УРОК 1   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 1   ------------------------------------- </strong><br/><br/>";

/* Приемы работы с флагами */
echo "<strong> Приемы работы с флагами </strong><br/>";
echo "<br/>";


/* Задача 1 */
echo "<strong> Задача 1</strong><br/>";
echo "<br/>";

function findFive($arr) 
{
       foreach ($arr as $key => $value) {
               if ($value == 5) {
                      return true; 
               }           
       }
        return false;     
}
$arr = range(1, 10);
echo findFive($arr);
echo "<br/>";
echo "<br/>";

/* Задача 2 */
echo "<strong> Задача 2 </strong><br/>";
echo "<br/>";


function division($num) {
        $arr = range(2, 30);

        foreach ($arr as $key => $value) {

                if ($num % $value == 0) {   
                        return "да";
                }
        }
        return "нет";   
}
echo division(31);
echo "<br/>";
echo "<br/>";

/* Задача 3 */
echo "<strong> Задача 3 </strong><br/>";
echo "<br/>";

$arr = [1, 1, 5];

function identical($arr) {
        $arr_count = count($arr);
        for ($i = 0; $i < $arr_count; $i++) { 

                if ($arr[$i] == $arr[$i + 1]) {
                        return "yes";
                } 
        }
        return "no";
}
echo identical($arr);
echo "<br/>";
echo "<br/>";


/* -----------------------------   БЛОК 2 - УРОК 2   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 2   ------------------------------------- </strong><br/><br/>";

/* Приемы работы с логическими значениями */
echo "<strong> Приемы работы с логическими значениями </strong> <br/>";
echo "<br/>";

/* Задача 1 */
echo "<strong> Задача 1</strong><br/>";
echo "<br/>";

function compare($a, $b) {
        return $a == $b;
}
var_dump(compare(2, 2));
echo "<br/>";
echo "<br/>";

/* Задача 2 */
echo "<strong> Задача 2</strong><br/>";
echo "<br/>";

function sumCompare($a, $b) {
        return $a + $b > 10;
}
var_dump(compare(5, 5)); // почему true, когда 10 !> 10, а 10 = 10? 
echo "<br/>";
echo "<br/>";

/* Задача 3 */
echo "<strong> Задача 3</strong><br/>";
echo "<br/>";

function negative($a){
        return $a < 0;
}
var_dump(negative(-1));
echo "<br/>";
echo "<br/>";


/* -----------------------------   БЛОК 2 - УРОК 3   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 3   ------------------------------------- </strong><br/><br/>";

/* Приемы работы с циклами */
echo "<strong> Приемы работы с циклами </strong> <br/>";
echo "<br/>";

/* Задача 1 */
echo "<strong> Задача 1</strong><br/>";
echo "<br/>";

$str;
for ($i = 1; $i < 10; $i++) { 
        $str = $str . $i;
}
echo $str;
echo "<br/>";
echo "<br/>";

/* Задача 2 */
echo "<strong> Задача 2 </strong><br/>";
echo "<br/>";

$str2;
for ($i = 9; $i > 0; $i--) { 
        $str2 = $str2 . $i;
}
echo $str2;
echo "<br/>";
echo "<br/>";

/* Задача 3 */
echo "<strong> Задача 3 </strong><br/>";
echo "<br/>";

$str3;
for ($i = 1; $i < 10; $i++) { 
        $str3 = $str3 . '-' . $i;
}
echo $str3 . '-';
echo "<br/>";
echo "<br/>";

/* Задача 4 */
echo "<strong> Задача 4 </strong><br/>";
echo "<br/>";

for ($i=1; $i < 21; $i++) { 
        for ($j=0; $j < $i; $j++) { 
               echo 'x';               
        }
        echo '<br>';
}
echo "<br/>";
echo "<br/>";

/* Задача 5 */
echo "<strong> Задача 5 </strong><br/>";
echo "<br/>";

for ($i=1; $i < 10; $i++) { 
        for ($j=0; $j < $i; $j++) { 
               echo $i;               
        }
        echo '<br>';
}
echo "<br/>";
echo "<br/>";

/* Задача 6 */
echo "<strong> Задача 6 </strong><br/>";
echo "<br/>";

for ($i=2; $i < 12; $i+=2) { 
        for ($j=0; $j < $i; $j++) { 
               echo 'x';               
        }
        echo '<br>';
}
echo "<br/>";
echo "<br/>";

/* -----------------------------   БЛОК 2 - УРОК 4   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 4   ------------------------------------- </strong><br/><br/>";

/* Приемы работы с массивами */
echo "<strong> Приемы работы с массивами </strong> <br/>";
echo "<br/>";

/* Задача 1 */
echo "<strong> Задача 1</strong><br/>";
echo "<br/>";

$arr = [];
for ($i = 0; $i < 5; $i++) {         
        $arr[$i] = $arr[$i-1] . 'x';
}
var_dump($arr);
echo "<br/>";
echo "<br/>";

/* Задача 2 */
echo "<strong> Задача 2 </strong><br/>";
echo "<br/>";

$arr = [];

for ($i = 1; $i < 6; $i++) {    
        for ($j=0; $j < $i; $j++) {                 
                $num .= $i;  
        }
        $arr[$i - 1] = $num;
        $num = '';
}
var_dump($arr);
echo "<br/>";
echo "<br/>";

/* Задача 3 */
echo "<strong> Задача 3 </strong><br/>";
echo "<br/>";

function arrayFill($a, $b) {
        $arr = [];
        for ($i = 0; $i < $b ; $i++) { 
                $arr[$i] = $arr[$i - 1] . $a; 
        }
        return $arr;
}
var_dump(arrayFill('x', 5));
echo "<br/>";
echo "<br/>";

/* Задача 4 */
echo "<strong> Задача 4 </strong><br/>";
echo "<br/>";

$arr = range(1, 5, 1);
$j = 0;
for ($i = 0; $j <= 10 ; $i++) { 
        $j += $arr[$i];
         
}
echo $i - 1; 
echo "<br/>";
echo "<br/>";

/* Многомерные массивы*/
echo "<strong> Многомерные массивы </strong><br/>";
echo "<br/>";

/* Задача 1 */
echo "<strong> Задача 1 </strong><br/>";
echo "<br/>";

$arr = [[1, 2, 3], [4, 5], [6]];
foreach ($arr as $elem) {
        foreach ($elem as $subElem) {
            $sum += $subElem;
        }
}
echo $sum;
echo "<br/>";
echo "<br/>";

/* Задача 2 */
echo "<strong> Задача 2 </strong><br/>";
echo "<br/>";

$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
foreach ($arr as $elem) {
        foreach ($elem as $subElem) {
            foreach ($subElem as $finalValue) {
                $sum += $finalValue;
            }
        }
}
echo $sum;
echo "<br/>";
echo "<br/>";

/* Задача 3 */
echo "<strong> Задача 3 </strong><br/>";
echo "<br/>";

$n = 1;
for($i = 0; $i < 3; $i++) {
        for($j = 0; $j < 3; $j++, $n++) {
                $arr[$i][$j] = $n;
        }
}
var_dump($arr);
echo "<br/>";
echo "<br/>";

/* -----------------------------   БЛОК 2 - УРОК 5   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 5   ------------------------------------- </strong><br/><br/>";

/* Правильное использование пользовательских функций */
echo "<strong> Правильное использование пользовательских функций </strong> <br/>";
echo "<br/>";

/* Задача 1 */
echo "<strong> Задача 1</strong><br/>";
echo "<br/>";


$arr = [12, 19, 28, 13, 14, 345];
$result = [];

foreach ($arr as $elem) {
        $sum = array_sum(str_split($elem, 1));
    if ($sum >= 1 and $sum <= 9) {
        $result[] = $elem;
    }
}
var_dump($result);
echo "<br/>";
echo "<br/>";

/* Задача 2 */
echo "<strong> Задача 2 </strong><br/>";
echo "<br/>";


$arr = [12, 19, 28, 13, 14, 345];
$sum = 0;

foreach ($arr as $elem) {
        $sum += array_sum(str_split($elem, 1));    
}
echo $sum;
echo "<br/>";
echo "<br/>";

/* Задача 3 */
echo "<strong> Задача 3 </strong><br/>";
echo "<br/>";

$arr = [12, -19, 28, -13, 14, -345];
$result = [];

function isPositive($num) {
        return $num > 0;
}

foreach ($arr as $value) {
        if (isPositive($value)) {     
                $result[] = $value;
        }
        
}
var_dump($result);
echo "<br/>";
echo "<br/>";

/* Задача 4 */
echo "<strong> Задача 4 </strong><br/>";
echo "<br/>";

function isNumberInRange($num) {
        return $num > 0 && $num < 10;
}
echo isNumberInRange(5);
echo "<br/>";
echo "<br/>";

/* Задача 5 */
echo "<strong> Задача 5 </strong><br/>";
echo "<br/>";

$arr = range (-5, 5, 1);
$result =[];
foreach ($arr as $value) {
        if (isNumberInRange($value)) {
                $result[] = $value;
        }
}
var_dump($result);
echo "<br/>";
echo "<br/>";

/* Задача 6 */
echo "<strong> Задача 6 </strong><br/>";
echo "<br/>";

function getDigitSum($num) {
       return array_sum(str_split($num));
}
echo getDigitSum(12345);

echo "<br/>";
echo "<br/>";

/* Задача 7 */
echo "<strong> Задача 7 </strong><br/>";
echo "<br/>";

$arr = range(1, 2020, 1);
foreach ($arr as $value) {
        if ((getDigitSum($value) == 13)) {
                $years[] = $value;
                $count++;
        }
}
echo $count;
/* var_dump($years); */
echo "<br/>";
echo "<br/>";

/* Задача 8 */
echo "<strong> Задача 8 </strong><br/>";
echo "<br/>";

function isEven($num) {
        return $num % 2 == 0;
}

echo "<br/>";
echo "<br/>";

/* Задача 9 */
echo "<strong> Задача 9 </strong><br/>";
echo "<br/>";

$arr = range(1, 10, 1);
$evens = [];
foreach ($arr as $value) {
        if (isEven($value)) {
                $evens[] = $value;
        }
        
}
var_dump($evens);
echo "<br/>";
echo "<br/>";

/* Задача 10 */
echo "<strong> Задача 10 </strong><br/>";
echo "<br/>";

function getDivisors($num) {
        $devisors = [];
        for ($i = 1; $i <= $num; $i++) { 
               if ($num % $i == 0) {
                       $devisors[] = $i;
               }
        }
        return $devisors;
}
var_dump(getDivisors(6));
echo "<br/>";
echo "<br/>";

/* Задача 11 */
echo "<strong> Задача 11 </strong><br/>";
echo "<br/>";


function getCommonDivisors($num1, $num2) {
       return array_intersect(getDivisors($num1), getDivisors($num2));      
}

var_dump(getCommonDivisors(5, 10));
echo "<br/>";
echo "<br/>";

/* -----------------------------   БЛОК 2 - УРОК 6   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 6   ------------------------------------- </strong><br/><br/>";

/* Практика на пользовательские функции */
echo "<strong> Практика на пользовательские функции </strong> <br/>";
echo "<br/>";

/* Задачу 1 - 2 - 4 пропустил*/
echo "<strong> Задачу 1 - 2 - 4 пропустил </strong><br/>";
echo "<br/>";

/* Задача 3 */
echo "<strong> Задача 3 </strong><br/>";
echo "<br/>";

function luckySum($num) {
        return array_sum(str_split($num, 1));
}

function luckyOrNot($num) {
        $num1 = substr($num, 0, 3);
        $num2 = substr($num, 3, 5);
        return (luckySum($num1) == luckySum($num2));      
}

echo luckyorNot(123321);
echo "<br/>";
echo "<br/>";

/* -----------------------------   БЛОК 2 - УРОК 7   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 7   ------------------------------------- </strong><br/><br/>";

/* Продвинутая работа с пользовательскими функциями */
echo "<strong> Продвинутая работа с пользовательскими функциями </strong> <br/>";
echo "<br/>";

/* Задачи для решения */
echo "<strong> Задачи для решения </strong> <br/>";
echo "<br/>";

function cut($string, $param = 10) {
        echo substr($string, 0, $param);
}

cut('This string is too long');
echo '<br>';
echo "<br/>";
cut('This string is too long', 15);
echo '<br>';
echo "<br/>";

/* Работа с рекурсией */
echo "<strong> Работа с рекурсией </strong> <br/>";
echo "<br/>";

$arr = range(1, 3, 1);

function first($arr) {
        echo array_shift($arr) . '<br>';
        if (!empty($arr)) {
                first($arr);
        }
}
first($arr);
echo '<br>';
echo "<br/>";

$num = 9999;

function sum($num) {
        $total = array_sum(str_split($num, 1));
        if ($total > 9) {
                $total = sum($total);
        } else {
                echo $total; 
        }
}

sum($num);
echo "<br/>";
echo "<br/>";

/* -----------------------------   БЛОК 2 - УРОК 8   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 8   ------------------------------------- </strong><br/><br/>";

/* Продвинутая работа с формами PHP */
echo "<strong> Продвинутая работа с формами PHP </strong> <br/>";
echo "<br/>";

/* Работа с checkbox */
echo "<strong> Работа с checkbox </strong> <br/>";
echo "<br/>";

?>

<form action="" method="GET">
    <input type="text" name="name" value="" placeholder="Ваше имя">   
    <input type="checkbox" name="checkbox" value="1">
    <input type="submit">
</form>

<?php
   if (isset($_REQUEST['name']) && $_REQUEST['checkbox'] == 1) {
           echo "Добро пожаловать," . $_REQUEST['name'];
   } else {
        echo "До свидания," . $_REQUEST['name'];
   }
echo "<br/>";
echo "<br/>";
?>
<hr>
<p> Какие языки программирования вы знаете" </p>
<form action="" method="GET">
    html<input type="checkbox" name="lang[]" value="html">
    css<input type="checkbox" name="lang[]" value="css">
    php<input type="checkbox" name="lang[]" value="php">
    javascript<input type="checkbox" name="lang[]" value="javascript">
    <input type="submit">
</form>

<?php
    if(isset($_REQUEST['lang']))
    {
        echo 'Вы знаете: ' . implode(', ', $_REQUEST['lang']);
    }
echo "<br/>";
echo "<br/>";

/* Работа с radio переключателями */
echo "<strong> Работа с radio переключателями </strong> <br/>";
echo "<br/>";

?>

<form action="" method="GET">
    Вы знаете PHP?
    да<input type="radio" name="php" value="1" checked>
    нет<input type="radio" name="php" value="0">
    <input type="submit">
</form>

<?php
    if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
        echo 'Вы не знаете PHP!';
    }

    if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
        echo 'Вы знаете PHP!';
    }
echo "<br/>";
echo "<br/>";
?>
<form action="" method="GET">
        Сколько вам лет? 
        <br>Менее 20 лет <input type="radio" name="age" value="Менее 20 лет" checked>
        20-25<input type="radio" name="age" value="20-25">
        26-30<input type="radio" name="age" value="2">
        более 30<input type="radio" name="age" value="3">
        <input type="submit">
</form>

<?php 
        if (isset($_REQUEST['age']) and $_REQUEST['age'] == 'Менее 20 лет') {
        echo 'Вам ' . $_REQUEST['age'];
        }

        if (isset($_REQUEST['age']) and $_REQUEST['age'] == '20-25') {
        echo $_REQUEST['age'];
        }
echo "<br/>";
echo "<br/>";

/* Select и multi-select */
echo "<strong> Select и multi-select </strong> <br/>";
echo "<br/>";
?>

<form action="" method="GET">
        Сколько вам лет? 
        <select name="age"> 
                <option value="менее 20" selected > менее 20 </option> 
                <option value="20 - 25 "> 20 - 25 </option>
                <option value="26 - 30"> 26 - 30 </option>
                <option value="более 30"> более 30 </option>
        </select>
        <input type="submit" name="submit">
</form>

<?php 
        if (isset($_REQUEST['submit'])) {
                echo "Вам " . $_REQUEST['age'] . " лет";                
        }     

echo "<br/>";
echo "<br/>";

/* -----------------------------   БЛОК 2 - УРОК 10   --------------------------------------*/
echo "<strong> -----------------------------   БЛОК 2 - УРОК 10   ------------------------------------- </strong><br/><br/>";

echo '1.' . PHP_EOL;
echo "До нового года осталось: " . floor((mktime(0, 0, 0, 12, 31) - time()) / 24 / 3600) . " дня";
echo "<br/>";
echo "<br/>";

echo '2.' . PHP_EOL;
?>
<form action="" method="GET">
        <input type="text" name="year" placeholder="Введите год">
        <input type="submit" name="submit">
</form>

<?php 
        if (isset($_REQUEST['year'])) {
                $year = $_REQUEST['year'];
                        if ($year % 4 == 0  &&  $year % 100 != 0 || $year % 400 == 0) {
                        echo "високосный";
                } else echo "не вискокосный";
        }

echo "<br/>";
echo "<br/>";

echo '3.' . PHP_EOL;
?>
<form action="" method="GET">
        <input type="text" name="date" placeholder="Введите дату: dd.mm.yyyy">
        <input type="submit" name="submit">
</form>

<?php 
$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
        if (isset($_REQUEST['submit'])) {
                $date = $_REQUEST['date'];                
                $arr = explode('.', $date);                
                $day = date('w', mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]));
                echo $week[$day];
        }
echo "<br/>";
echo "<br/>";

echo '4.' . PHP_EOL;
$d = date('w', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
$d = $week[$d];

$m_arr = [1=>'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Ноябрь', 'Декабрь'];
$m = date('n', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
$m = $m_arr[$m];

echo date('d') . ' ' . $m . ' ' . date('Y') . ' год, ' . $d;
echo "<br/>";
echo "<br/>";

echo '5.' . PHP_EOL;
?>

<form action="" method="GET">
        <input type="text" name="age" placeholder="Введите дату рождения">
        <input type="submit" value="Отправить">
</form>

<?php 
        if(isset($_REQUEST['age'])) {
                
                $arr = explode('.', $_REQUEST['age']);

        echo "До дня рождения осталось: " . floor((mktime(0, 0, 0, $arr[1], $arr[0], 2020) - time()) / 24 /3600) . " дней";
        }
echo "<br/>";
echo "<br/>";

echo '6.' . PHP_EOL;

echo "До масленницы осталось: " . floor((mktime(0, 0, 0, 02, 24, 2020) - time()) /24 / 3600) . " дней";

echo "<br/>";
echo "<br/>";

echo '7.' . PHP_EOL;
?>

<form action="" method="POST">
<input type="text" name="date" placeholder="Введите дату: dd.mm">
<input type="submit">
</form>

<?php

$signs = [1 => "Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец"];
$signs_date = [1 => 21, 20, 20, 20, 20, 20, 21, 22, 23, 23, 23, 23];

if (isset($_REQUEST['date'])) {

        $date = $_REQUEST['date'];
        $date = explode('.', $date);
        $day = $date[0];
        $month = $date[1];
    
        if (substr($month, 0, 1) == 0) {
            $month = substr($month, 1, 2);
        }
        if ($day > $signs_date[$month]) {
                if ($month == "12") {
                        $month = "0";
                }
                echo $signs[$month + 1];
        } else  {
                echo $signs[$month];
        }

}
echo "<br/>";
echo "<br/>";

echo '8.' . PHP_EOL;

$holidays = [1 => [date('Y-m-d',mktime(0, 0, 0, 12, 31)), 'Новый год'], [date('Y-m-d', mktime(0, 0, 0, 02, 23)), '23 - февраля']];
$today = date('Y-m-d',  time());

foreach ($holidays as $key => $value) {
       if ($value[0] == $today) {
              echo $value[1];
       } else {
               echo $value[1] . " еще не наступил" . '<br>';
       }       
}
echo "<br/>";
echo "<br/>";

echo '9.' . PHP_EOL;
?>

<form action="" method="GET">
        <input type="text" name="date" placeholder="Введите ваш день рождения">
        <input type="submit">
</form>

<?php

$signs = [1 => "Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец"];

$signs_date = [1 => 21, 20, 20, 20, 20, 20, 21, 22, 23, 23, 23, 23];

$predictions = [1 => 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо', 'не очень', 'прям такое себе', 'все хорошо'];

if (isset($_REQUEST['date'])) {

        $date = $_REQUEST['date'];
        $date = explode('.', $date);
        $day = $date[0];
        $month = $date[1];
    
        if (substr($month, 0, 1) == 0) {
            $month = substr($month, 1, 2);
        }

        if (substr($day, 0, 1) == 0) {
                $day = substr($day, 1, 2);
        }  
        
        if ($day > $signs_date[$month]) {
                if ($month == "12") {
                        $month = "0";
                }              

                echo 'Ты: ' .$signs[$month + 1] . ". Сегодня у тебя " . $predictions[$day];
        } else  {
                echo 'Ты: ' .$signs[$month] . ". Сегодня у тебя " . $predictions[$day];
        }
      
}
echo "<br/>";
echo "<br/>";

echo '10.' . PHP_EOL;
?>

<form action="" method="GET">
        <textarea name="textarea" cols="30" rows="10"></textarea>
        <input type="submit">
</form>

<?php
if(!empty($_REQUEST['textarea'])) {

        $text=$_GET['textarea'];

        echo 'Количество слов в тексте: '. str_word_count($text).'<br>';
        echo 'Количество символов в тексте: '. mb_strlen($text).'<br>';
        echo 'количество символов за вычетом пробелов: '.mb_strlen(str_replace(' ','',$text));
}
echo "<br/>";
echo "<br/>";

echo '11.' . PHP_EOL;
          
?>

<form action="" method="GET">
        <textarea name='text'></textarea><br><br>
        <input type="submit" name='submit'>
</form>

<?php

        if(!empty($_GET['text'])) {
                $text = $_GET['text'];
                $arr = str_split(str_replace(' ','',$text), 1);
                $arr2 = array_count_values($arr);
                $length = count($arr);

                foreach($arr2 as $key => $elem) {
                        $percent = ($elem * 100) / $length;
                        echo $key . '-' . floor($percent) .'%' . '<br>';
                
                }
        }
echo "<br/>";
echo "<br/>";
                




            
