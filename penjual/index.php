<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_penjual ORDER BY id_penjual DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add Penjual</a><br/><br/>
<a href="../menu/index.php">Add New Menu <Menu></Menu></a><br></br>
 
    <table width='80%' border=1>
 
    <tr>
        <th>id</th> <th>No hp</th> <th>alamat</th> <th>nama</th> <th>jenis kelamin</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_penjual']."</td>";
        echo "<td>".$user_data['no_telp']."</td>";
        echo "<td>".$user_data['alamat_penjual']."</td>";
        echo "<td>".$user_data['nama_penjual']."</td>";
        echo "<td>".$user_data['jenis_kelamin']."</td>";     
        echo "<td><a href='edit.php?id=$user_data[id_penjual]'>Edit</a> | <a href='delete.php?id=$user_data[id_penjual]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>