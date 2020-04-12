<html>
<head>
<title>Detail Bantuan</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<center><h1> Data Detail Bantuan </h1></center>
<a href="cetak.php" class="tombol_tambah">Back</a>
<br>
<br>
<table border="1">
<tr>
<th>No</th>
<th>ID Donatur</th>
<th>Nama Donatur</th>
<th>ID Bantuan</th>
<th>Jenis Bantuan</th>
<th>Tanggal Bantuan</th>
<th>Jumlah Bantuan</th>

</tr>

<?php
include 'koneksi.php';
$no = 1;
$sql = mysqli_query($db, "SELECT bantuan.id_bantuan, bantuan.jenis_bantuan, donatur.id_donatur, donatur.nama_donatur, detail_donatur.tgl_bantuan, detail_donatur.jumlah_bantuan FROM detail_donatur JOIN donatur ON detail_donatur.id_donatur=donatur.id_donatur JOIN bantuan ON bantuan.id_bantuan=detail_donatur.id_bantuan ");
while ($data = mysqli_fetch_array($sql)) {

?>

<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['id_donatur'];?></td>
<td><?php echo $data['nama_donatur'];?></td>
<td><?php echo $data['id_bantuan'];?></td>
<td><?php echo $data['jenis_bantuan'];?></td>
<td><?php echo $data['tgl_bantuan'] ;?></td>
<td><?php echo $data['jumlah_bantuan'] ;?></td>
 <tr>


<?php
}
?>
</table>
</body>
<html>