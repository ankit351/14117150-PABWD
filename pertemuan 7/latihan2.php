<?php

function bet ($pan, $color="black"){
    // spasi tidak dihitung dalam sebuah string
    $p = strlen($pan);
    $x = str_word_count($pan);
    $x=$x-1;
    $p=$p-$x;
    if($p<=10){
        $y = $p *300;
    }else if($p>10 && $p<=20){
        $y= $p * 500;
    }else{
        $y = $p *700;
    }

    echo "<font color = $color> $pan </font><br>";
  
    echo "Harga total yang harus dibayar : $y<br><br><br>";
}

$nama="M. Alfan Riyadi";
$a = "Ranger";
bet($nama,'');

bet($nama,'red');
bet($nama,'green');

bet($a,'blue');

?>