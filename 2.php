<?php

/*2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
 С помощью цикла foreach найдите сумму элементов этого массива.
Запишите ее в переменную $result.
 */
$arr_numb = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr_numb as $numb)
{
   $result += $numb;
}
print_r($result);