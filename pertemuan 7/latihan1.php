<?php

function swap(&$x , &$y){
    $temp = $y;
    $y = $x;
    $x = $temp;
}
$a =50;
$b=100;

echo" Sebelum di swap : $a   dan  $b ";
echo "<br>";
 swap($a,$b);
 echo "Setelah di swap : $a   dan   $b";
