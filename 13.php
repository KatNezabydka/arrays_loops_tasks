<?php
/**
Вывести таблицу умножения
 */
$i = 1;
echo "<table border='3'><tr>";

for($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= 10; $j++)
        echo "<td>" . ($i * $j) . "</td>";

    if ($i != 10)
        echo  "</tr><tr>";
}
echo "</table></tr>";