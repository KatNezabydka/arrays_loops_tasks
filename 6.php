<?php

/*
Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');
 */
$en = [];
$ru = [];
$n=0;
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $numb){
    $en[$n] = $key;
    $ru[$n] = $numb;
    $n++;
}
print_r($en);
echo "<br>";
print_r($ru);


