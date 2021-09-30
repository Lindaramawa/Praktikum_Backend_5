// membuat form
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Contect-Type" content="text/html; enctype=utf-8" />
<title>Input Produk</title> //judul
</head>

<body>
<form action="ProsesInputProduk.php" method="post" enctype="multipart/form-data" name="form1" id="form1"> //aksi dari form
	// data dari form
	<fieldset>
	<legend><h3>Produk</h3></legend>
	<table>
	  <tr>
	  	<td>ID Penjual</td>
	  	<td>:</td>
	  	<td><input name="id" type="text" id="id" size="50" />
	  	</td>
	  </tr>
	  <tr>
	  	<td>Nama Produk</td>
	  	<td>:</td>
	  	<td><input name="nama_produk" type="text" id="nama_produk" size="50" />
	  	</td>
	  </tr>
	  <tr>
	  	<td>Harga</td>
	  	<td>:</td>
	  	<td><input name="harga" type="text" id="harga" size="50" />
	  	</td>
	  </tr>
	  <tr>
	  	<td>Berat</td>
	  	<td>:</td>
	  	<td><input name="berat" type="text" id="berat" size="50" />
	  	</td>
	  </tr>
	  <tr>
	  	<td>Detail Produk</td>
	  	<td>:</td>
	  	<td><input name="detail_produk" type="text" id="detail_produk" size="50" />
	  	</td>
	  </tr>
	  <tr>
	  	<td></td>	
	  	<td></td>
	  	<td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
	  </tr>
   </table>
   </fieldset>

</form>
</body>
</html>