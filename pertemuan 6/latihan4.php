<?php
echo "bilangan prima dari 1-37 adalah : ";
for ($i=1 ; $i<=37; $i++){
    $cek=0;
    for ($j=1 ; $j<=$i ; $j++ ){
    if($i % $j==0){
        $cek = $cek +1;
    }  
}
if($cek==2){
    echo "$i  ";
   
}
$cek=0;

}
?>