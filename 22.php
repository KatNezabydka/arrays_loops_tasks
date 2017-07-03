<?php
/**
22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx
 */
$x = "x";
$line = 1;
for($row=1; $row <= 5;$row++){
    while ($row*2 >= $line ) {
        echo $x;
        $line++;
    }
    $line = 1;
    echo "<br>";
}