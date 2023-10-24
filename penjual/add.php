<html>
<head>
    <title>Add Penjual</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id_penjual"></td>
            </tr>
            <tr> 
                <td>Nohp</td>
                <td><input type="varchar" name="No_hp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Jenis kelamin</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_penjual = $_POST['id_penjual'];
        $No_hp = $_POST['No_hp'];
        $Alamat = $_POST['Alamat'];
        $Nama = $_POST['Nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_penjual(id_penjual,no_telp,alamat_penjual,nama_penjual,jenis_kelamin) VALUES('$id_penjual','$No_hp','$Alamat','$Nama','$jenis_kelamin')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>