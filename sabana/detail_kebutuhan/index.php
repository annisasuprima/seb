<html>
<head>
<title>Detail Kebutuhan</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<center><h1> Detail Korban </h1></center>
<a href="http://localhost/sabana/menu.html" class="tombol_tambah">>>>Home</a>
<br>
<br>
<a href="http://localhost/sabana/crud-Bantuan/">Lihat Data Bantuan</a>
<br>
<a href="http://localhost/sabana/detail_korban/">Lihat Data Detail Korban</a>
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
<th>NIK Korban</th>
<th>ID Bantuan</th>
<th>Jenis Bencana</th>
<th>Tanggal Bencana</th>
<th>Tanggal Memberikan</th>
</tr>

<?php
include 'koneksi.php';
$no = 1;
$sql = mysqli_query($db, "SELECT detail_korban.nik_korban, bantuan.id_bantuan, kejadian_bencana.jenis_bencana, kejadian_bencana.tgl_bencana, detail_kebutuhan.tgl_memberikan FROM detail_kebutuhan JOIN bantuan ON detail_kebutuhan.id_bantuan=bantuan.id_bantuan JOIN detail_korban ON detail_korban.nik_korban=detail_kebutuhan.nik_korban ");
while ($data = mysqli_fetch_array($sql)) {

?>

<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['nik_korban'];?></td>
<td><?php echo $data['id_bantuan'];?></td>
<td><?php echo $data['jenis_bencana'];?></td>
<td><?php echo $data['tgl_bencana'];?></td>
<td><?php echo $data['tgl_memberikan'] ;?></td>
 <tr>


<?php
}
?>
</table>
</body>
<html>