<?php

/*1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
 С помощью цикла foreach выведите эти слова в столбик.*/

$my_arr = ['html', 'css', 'php', 'js', 'jq'];

foreach ($my_arr as $item)
{
    print_r($item ."<br>");
}