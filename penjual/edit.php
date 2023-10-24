<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id_penjual = $_POST['id_penjual'];
    $No_hp = $_POST['no_telp'];
    $Alamat = $_POST['alamat_penjual'];
    $Nama = $_POST['nama_penjual'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    
    
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tb_penjual SET id='$id_penjual',no_telp='$No_hp',alamat_penjual='$Alamat',nama_penjual='$Nama',jenis_kelamin='$jenis_kelamin' WHERE id_penjual=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_penjual WHERE id_penjual=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_penjual = $user_data['id_penjual'];
    $No_hp = $user_data['no_telp'];
    $Alamat = $user_data['alamat_penjual'];
    $Nama = $user_data['nama_penjual'];
    $jenis_kelamin = $user_data['jenis_kelamin'];
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
                <td>Id</td>
                <td><input type="text" name="id_penjual" value=<?php echo $id_penjual;?>></td>
            </tr>
            <tr> 
                <td>No telp</td>
                <td><input type="varchar" name="no_telp" value=<?php echo $No_hp;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat_penjual" value=<?php echo $Alamat;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_penjual" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Jenis kelamin</td>
                <td><input type="text" name="jenis_kelamin" value=<?php echo $jenis_kelamin;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>