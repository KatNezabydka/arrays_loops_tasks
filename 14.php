<?php
/**
Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.
 */
$mas = [4, 2, 5, 19, 13, 0, 10];
$e = [2,3,4];
foreach ($mas as $item_mas){
    foreach ($e as $item_e){
        if ($item_e == $item_mas)
            echo $item_e."<br>";
    }
}