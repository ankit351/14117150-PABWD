<html>
    <body>
        
    <?php echo $_POST["name"]; ?> <br>
    <?php echo $_POST["alamat"];?> <br>
    <?php echo $_POST["jeniskelamin"];?> <br>
    
    <?php
     $option = isset($_POST['P']) ? $_POST['P'] : false;
     if ($option) {
        echo htmlentities($_POST['P'], ENT_QUOTES, "UTF-8");
     } else {
       echo "task option is required";
      
     }
     ?> <br>
    <?php echo $_POST["hobby"]; ?> <br>
    <?php echo $_POST["keterangan"]; ?> <br>

    </body>
</html>