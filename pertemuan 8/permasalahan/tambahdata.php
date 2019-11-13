
<html>
<head>
    <title>Tambah data</title>
</head>
<h2>Tambah Data </h2>
<form method ="POST" enctype=multipart/form-data>
    <label >NRP : </label>
    <input type="text" name="nrp"><br>
    <label >Nama : </label>
    <input type="text" name="nama"><br>
    <label >Foto</label>
    <input type="file" name="foto"> <br>
    Jurusan:
        <select name="jurusan">
            <option value="telekomunikasi">Telekomunikasi </option>
            <option value="Elka">Elka </option>
            <option value="IT">IT</option>
            <option value="Elin">elin </option>
          </select>
   
    <button type ="submit" name="tambah">Tambah</button>
    </form>
    <h2> SEARCH DATA</h2>
    <?php 
    
    for($i= 0 ;$i<20 ; $i++){
        echo "=";
    }
    echo "<br> <br>";

    ?>
    <label >Nama : </label>
    <input type="text" name="nama">
    <button type ="submit" name="cari">Cari Data</button>

    <h2> HAPUS DATA</h2>
    <?php 
    
    for($i= 0 ;$i<20 ; $i++){
        echo "=";
    }
    echo "<br> <br>";

    ?>
    <label >Nama : </label>
    <input type="text" name="nama">
    <button type ="submit" name="cari">Cari Data</button>

<?php
include 'data.php';
if(isset($_POST['tambah'])){
    $data ->get_data ($_POST['nm'],$_POST['alamat'],$_FILES['foto']);
    echo "<script>alert('data tersimpan);</script>";
    echo "<script>location ='tampildata.php;</script>";
}
?>

</html>