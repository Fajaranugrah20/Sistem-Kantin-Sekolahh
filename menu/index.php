<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_menu ORDER BY id_menu DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add Menu</a><br/><br/>
<a href="../penjual/index.php">Add New Penjual</a><br></br>
 
    <table width='80%' border=1>
 
    <tr>
        <th>id menu</th> <th>Jenis</th> <th>Harga</th> <th>Stok</th> <th>Jenis</th> <th>Id Penjual</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_menu']."</td>";
        echo "<td>".$user_data['jenis_menu']."</td>";
        echo "<td>".$user_data['harga_menu']."</td>";
        echo "<td>".$user_data['stok_menu']."</td>";
        echo "<td>".$user_data['nama_menu']."</td>";
        echo "<td>".$user_data['id_penjual']."</td>";     
        echo "<td><a href='edit.php?id=$user_data[id_menu]'>Edit</a> | <a href='delete.php?id=$user_data[id_menu]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>