
<?php
$nama = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
echo "Nama sebelum diurutkan  <br>";
for($i=0;$i<7;$i++){
    echo "$nama[$i]  ";
}
echo "<br> <br>";
echo "Nama setelah diurutkan <br>";
sort($nama);
for($i=0;$i<7;$i++){
    echo "$nama[$i]  ";
}

?>