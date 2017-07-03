<?php
/**
Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
 */
$mas = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 1;

echo "<table><tr>";
foreach ($mas as $item_mas) {
    if ($count === 1 || $count === 2) {
        echo "<td>" . $item_mas . ", " . "</td>";
        $count++;
    }
    else{
        echo "<td>" . $item_mas ."</td>";
        echo  "</tr><tr>";
        $count = 1;
    }
}
echo "</table></tr>";