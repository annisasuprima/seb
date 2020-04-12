<html>
<head>
<title>Barang</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<center><h1> Detail Donatur </h1></center>
<a href="http://localhost/sabana/menu.html" class="tombol_tambah">>>>Home</a>
<br>
<br>
<a href="http://localhost/sabana/crud-Donatur/">Lihat Data Donatur</a>
<br>
<a href="http://localhost/sabana/crud-Bantuan/">Lihat Data Bantuan</a>
<br>
<br>

<a href="tambah.php" class="tombol_tambah">TAMBAH</a>
<br>
<br>
<a href="print.php" class="tombol_tambah">CETAK</a>
<br>
<br>
<table border="1">
<tr>
<th>No</th>
<th>ID Donatur</th>
<th>ID Bantuan</th>
<th>Tanggal Bantuan</th>
<th>Jumlah Bantuan</th>
</tr>

<?php
include 'koneksi.php';
$no = 1;
$sql = mysqli_query($db, "SELECT donatur.id_donatur, bantuan.id_bantuan, detail_donatur.tgl_bantuan, detail_donatur.jumlah_bantuan FROM detail_donatur JOIN donatur ON donatur.id_donatur=detail_donatur.id_donatur JOIN bantuan ON bantuan.id_bantuan=detail_donatur.id_bantuan  order by id_donatur desc");
while ($data = mysqli_fetch_array($sql)) {

?>

<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['id_donatur'];?></td>
<td><?php echo $data['id_bantuan'];?></td>
<td><?php echo $data['tgl_bantuan'];?></td>
<td><?php echo $data['jumlah_bantuan'] ;?></td>
 <tr>


<?php
}
?>
</table>
</body>
<html>