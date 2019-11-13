<?php
$mysqli = new mysqli("localhost", "root","","crud");

class mahasiswa{
    public $koneksi;
    function __construct($mysqli){
        $this ->koneksi =$mysqli;
    }

    function set_mahasiswa(){
       $ambildata = $this -> koneksi -> query("select * from mahasiswa");
        //$ambildata = $this -> koneksi -> query("SELECT * from siswa");
        while($pecah = $ambildata ->fetch_assoc()){
            $data[] = $pecah;
        }
        return $data;
    }

    function get_mahasiswa($nama,$alamat,$foto){
        $namafoto =$foto ['name'];
        $lokasifoto = $foto['tmp_name'];
        move_uploaded_file($lokasifoto, "foto/$namafoto");
        $this -> koneksi -> query("insert into siswa  values ('$nama','$alamat','$namafoto')");
    }

    function update_siswa($nama, $alamat, $foto, $id){
        $namafoto =$foto ['name'];
        $lokasifoto = $foto['tmp_name'];
        move_uploaded_file($lokasifoto, "foto/$namafoto");
        $this -> koneksi -> query("Update siswa SET nama='$nama', alamat='$alamat', foto='$namafoto' WHERE id_siswa=$id");
    }

    function delete_siswa($id){
        $this-> koneksi ->query("delete from siswa where id_siswa = $id");
    }
}


?>