<?php
/**
25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
 */
$m = 10;
$mas = [];

for($i = 0; $i < $m; $i++){
    $mas[$i] = rand(1, $m);
}
echo "Начальный массив = ";
print_r($mas);

$min = $m;
$max = 0;

foreach ($mas as $item_m) {
    if ($item_m > $max) $max = $item_m;
    if ($item_m < $min) $min = $item_m;
}

echo "<br>" . "min = ".$min;
echo "<br>" . "max = ".$max;

for($i = 0; $i < $m; $i++){
    if ($mas[$i] == $max)
    {
        $mas[$i] = $min;
       continue;
    }
    if ($mas[$i] == $min) $mas[$i] = $max;
}

echo "<br>Результат = ";
print_r($mas);

