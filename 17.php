<?php
/**
17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
 */

$arr_month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$month = "July";

foreach ($arr_month as $item_month){
    if ($item_month === $month) echo "<strong>". $item_month ."</strong><br>";
        else
            echo $item_month . "<br>";
}