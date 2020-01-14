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

