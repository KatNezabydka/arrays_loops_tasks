<?php

/*
24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.
 */
$n = 5;
$numb = 442158755745;
$sum = 0;

$mas = str_split((string)$numb);
print_r($mas);

foreach ($mas as $item_mas){
    if ($item_mas == $n) $sum++;
}

echo "<br>" . $sum;