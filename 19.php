<?php
/**
Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 */
$arr_week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$day = "Saturday";
foreach ($arr_week as $item_week){
    if ($item_week === $day) echo "<em>". $item_week ."</em><br>";
        else
            echo $item_week . "<br>";
}