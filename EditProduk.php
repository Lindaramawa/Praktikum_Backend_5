<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $nama_produk=$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $berat=$_POST['berat'];
    $detail_produk = $_POST['detail_produk'];
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk',harga='$harga',berat='$berat', detail_produk='$detail_produk' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM produk WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama_produk = $user_data['nama_produk'];
    $harga = $user_data['harga'];
    $berat = $user_data['berat'];
    $detail_produk = $user_data['detail_produk'];
}
?>
<html>
<head>    
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="EditProduk.php">
        <table border="0">
            <tr> 
                <td>ID Penjual</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" value=<?php echo $nama_produk;?>></td>
            </tr>
            <tr> 
                <td>Harga Produk</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>Berat Produk</td>
                <td><input type="text" name="berat" value=<?php echo $berat;?>></td>
            </tr>
            <tr> 
                <td>Detail Produk</td>
                <td><input type="text" name="detail_produk" value=<?php echo $detail_produk;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>