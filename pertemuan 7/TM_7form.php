<!DOCTYPE html>
<html>

        <form action = "hasil.php" method="post">
        Nama: <input type = "text" name = "name"><br><br>
        Alamat : <input type ="text" name = "alamat"><br><br>
        Jenis Kelamin : <br><input type="radio" name= "jeniskelamin" value="Laki-laki">Laki-Laki<br>
        <input type="radio" name= "jeniskelamin" value="Perempuan">Perempuan<br>
        Golongan Darah :
        <select name="P">
            <option value="A">A </option>
            <option value="B">B </option>
            <option value="O">O </option>
            <option value="AB">AB </option>
          </select>
          <br><br>
        Hobby : <br>
        <input type="checkbox" name="hobby"value="Renang">Renang<br>
        <input type="checkbox" name="hobby"value="Sepak bola">Sepak bola<br>
        <input type="checkbox" name="hobby"value="Coding">Coding<br>

        Keterangan : <textarea name="keterangan" ></textarea><br><br>
        <input type  = "submit"> 

        </form>

        

</html>