 <?php

    $arr = [5, "Bruno", true, false, "ola", 12.8, "teste", true, [], "palavra", 5, 10, "alo"];

    $x = count($arr);
    $y = 0;

    while ($y < $x) {
        if (is_string($arr[$y])) {

            echo $arr[$y] . "<br>";
        }
        $y++;
    }
