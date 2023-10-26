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
                <td>No hp</td>
                <td><input type="Varchar" name="no_telp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat_penjual"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_penjual"></td>
            </tr>
            <tr>
            <td>Jenis</td>
                <td>
                    <select name ="jenis_kelamin">
                <option value="laki">Laki-laki </option>
                <option value="perempuan">Perempuan </option>
                </select>
                </td>     
            </tr>
            <tr> 
                <td>Submit</td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $idpenjual = $_POST['id_penjual'];
        $Nohp = $_POST['no_telp'];
        $Alamat = $_POST['alamat_penjual'];
        $Nama = $_POST['nama_penjual'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_penjual (id_penjual, no_telp, alamat_penjual, nama_penjual, jenis_kelamin) VALUES('$idpenjual', '$Nohp', '$Alamat', '$Nama', '$jeniskelamin')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>