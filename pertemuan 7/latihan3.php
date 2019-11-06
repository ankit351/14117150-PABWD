<?php

function faktorial($x){
$hasil = 1;
for($i=1 ; $i<=$x ; $i++){
    $hasil = $hasil * $i;
}
echo "Faktorial dari $x adalah : $hasil";
}
$c = 5;

faktorial($c);