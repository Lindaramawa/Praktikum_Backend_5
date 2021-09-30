<?php     // menyambungkan ke database
  error_reporting(0);
  include 'koneksi.php';

  if (isset($_GET["id"])) { // digunakan untuk memancing id
  	$id = ($_GET["id"]);

    $query = "DELETE from produk where id='$id'"; // script untuk menghapus data pada database dengan id yang diincar
    $result = mysqli_query($koneksi,$query);  // kelanjutan dari script diatas

    if (!$result) // keterangan apakah berhasil atau gagal
    {
        die("Data gagal di Tambahkan; ".mysqli_errno($koneksi).mysqli_error($koneksi));
    }
    else
    {
      echo "<script>alert('Data Berhasil dihapus');window.location.href='index.php'</script>";
    }
  }
?>