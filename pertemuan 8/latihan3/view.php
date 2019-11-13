<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "dunia");

$hasil = mysqli_query($conn,"select * from bukutamu");
$jumlah = mysqli_num_rows($hasil);

echo "<center> Daftar Pengunjung </center>";
echo "Jumlah pengunjung : $jumlah";

$a = 1;
while ($baris = mysqli_fetch_array($hasil)){
    echo "<br>";
    echo "$a";
    echo "<br>";
    echo "nama :";
    echo $baris[0];
    echo "<br>";
    echo $baris[1];
    echo "<br>";
    echo "komentar : ";
    echo $baris[2];
    $a++;
}