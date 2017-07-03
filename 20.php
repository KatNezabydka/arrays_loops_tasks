<?php

/*
20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x
xx
xxx
xxxx
xxxxx
 */

$x = "x";
$line = 1;
for($row=1; $row <= 20;$row++){
    while ($row >= $line ) {
        echo $x;
        $line++;
    }
    $line = 1;
    echo "<br>";
}


