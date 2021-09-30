<?php    // menyambung ke database
  error_reporting(0);
  include 'koneksi.php';
?>

<!DOCTYPE html>  
<html>
  <head> 
    // menentukan judul
  	<title>Daftar Produk</title> 
  </head>
  <body>
  	<h1 style="text-align: center;">Produk</h1> //pengaturan tampilan h1
  	<center><a href="InputProduk.php" >Tambah Data</a></center> // action dari form ini
  	<br>
  	<table border="1" style="margin: auto"> // membuat tabel
  		<thead>
  		<tr>
  			<th>No</th>
  			<th>ID Penjual</th>
  			<th>Nama</th>
  			<th>Harga</th>
        <th>Berat</th>
  			<th>Detail</th>
  			<th>Edit</th>
  			<th>Hapus</th>
  		</tr>
  	    </thead>
  	    <tbody>
  	    <?php // menampilkan data
  	      $no=0;
  	      $result = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id ASC");
  	    while($row = mysqli_fetch_array($result)) {
  	    	$no++
  	    ?>
  	        <tr>
  	         <td><?php echo $no;?></td>
  	         <td><?php echo $row['id'];?></td>
  	         <td><?php echo $row['nama_produk'];?></td>
  	         <td><?php echo $row['harga'];?></td>
             <td><?php echo $row['berat'];?></td>
             <td><?php echo $row['detail_produk'];?></td>
  	         <td>
  	         	<a href="EditProduk.php?id=<?php echo $row['id'];?>">Edit</a>
  	         </td>
  	         <td>
  	         	<a href="HapusProduk.php?id=<?php echo $row['id'];?>">Hapus</a>
  	         </td>
  	        </tr>
  	    <?php } ?>
  	    </tbody>
  	</table>
  </body>
</html>