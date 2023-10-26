<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id_menu = $_POST['id_menu'];
    $jenis_menu = $_POST['jenis_menu'];
    $harga_menu = $_POST['harga_menu'];
    $stok_menu = $_POST['stok_menu'];
    $nama_menu = $_POST['nama_menu'];
    $idpenjual = $_POST['id_penjual'];
    
    
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tb_menu SET id_menu='$id_menu', jenis_menu='$jenis_menu', harga_menu='$harga_menu', stok_menu='$stok_menu', nama_menu='$nama_menu' WHERE id_menu=$id_menu");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_menu WHERE id_menu=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_menu = $user_data['id_menu'];
    $jenis_menu = $user_data['jenis_menu'];
    $harga_menu = $user_data['harga_menu'];
    $stok_menu = $user_data['stok_menu'];
    $nama_menu = $user_data['nama_menu'];
    $idpenjual = $user_data['id_penjual'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>id menu</td>
                <td><input type="text" name="id_menu" value=<?php echo $id_menu;?>></td>
            </tr>
            <tr> 
                <td>Jenis</td>
                <td><input type="varchar" name="jenis_menu" value=<?php echo $jenis_menu;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga_menu" value=<?php echo $harga_menu;?>></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok_menu" value=<?php echo $stok_menu;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_menu" value=<?php echo $nama_menu;?>></td>
            </tr>
            <tr> 
                <td>Id Penjual</td>
                <td><input type="text" name="id_penjual" value=<?php echo $idpenjual;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>