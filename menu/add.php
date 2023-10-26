<html>
<head>
    <title>Add Menu</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id menu</td>
                <td><input type="int" name="id_menu"></td>
            </tr>
            <tr> 
                <td>Jenis</td>
                <td>
                    <select name ="jenis_menu">
                <option value="makanan">Makanan </option>
                <option value="minuman">Minuman </option>
                </select>
                </td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga_menu"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok_menu"></td>
            </tr>
            <tr> 
                <td>Nama menu</td>
                <td><input type="text" name="nama_menu"></td>
            </tr>
            <tr>
            <tr> 
                <td>Nama penjual</td>
                <td><select name="id_penjual">
                    <?php
                    include_once("config.php");
                    $id_penjual = mysqli_query($mysqli, "SELECT * FROM tb_penjual ORDER BY id_penjual DESC");
                    
                    while($data = mysqli_fetch_array($id_penjual)) {
                        echo '<option value= "' .$data['id_penjual']. '">'.$data['nama_penjual']. '</option>';
                    }
                    ?>
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
        $id_menu = $_POST['id_menu'];
        $jenis_menu = $_POST['jenis_menu'];
        $harga_menu = $_POST['harga_menu'];
        $stok_menu = $_POST['stok_menu'];
        $nama_menu = $_POST['nama_menu'];
        $id_penjual = $_POST['id_penjual'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_menu ( id_menu,jenis_menu,harga_menu,stok_menu,nama_menu,id_penjual) VALUES('$id_menu', '$jenis_menu', '$harga_menu', '$stok_menu', '$nama_menu','$id_penjual)");
        
        // Show message when user added
        echo "Makanan/Minuman added successfully. <a href='index.php'>View Makanan/Minuman</a>";
    }
    ?>
</body>
</html>