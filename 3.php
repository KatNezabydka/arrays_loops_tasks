<?php

/*Дан массив с элементами 26, 17, 136, 12, 79, 15.
 С помощью цикла foreach найдите сумму квадратов элементов этого массива.
Результат запишите переменную $result.
 */

$arr_numb = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($arr_numb as $numb)
{
    $numb *=$numb;
    $result += $numb;
}
print_r($result);