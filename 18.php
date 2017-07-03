<?php
/**
Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.
 */
$arr_week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

foreach ($arr_week as $item_week){
    if ($item_week == "Saturday" || $item_week == "Sunday") echo "<strong>". $item_week ."</strong><br>";
    else
        echo $item_week . "<br>";
}