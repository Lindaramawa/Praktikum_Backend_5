<?php // untuk menyambungkan ke database
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['simpan'])) { // penindaklanjutan dari tombol Simpan
// untuk memancing data dari database
  $id    = $_POST['id'];
  $nama_produk          = $_POST['nama_produk'];
  $harga         = $_POST['harga'];
  $berat         = $_POST['berat'];
  $detail_produk = $_POST['detail_produk'];

// formula untuk memasukkan data
  	$query = "INSERT INTO produk VALUES ('$id', '$nama_produk', '$harga', '$berat', '$detail_produk')";

  	$result  = mysqli_query($koneksi, $query);
// notifikasi apakah input berhasil atau tidak
  	if(!$result){
  	  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
  	  	" - ".mysqli_error($koneksi));
  	}
  	else
  	{
  	  echo "<script>alert('Data Berhasil Ditambah');window.location.href='index.php'</script> "; 
  	}
  }

?>