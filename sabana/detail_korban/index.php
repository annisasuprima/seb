<html>
<head>
<title>Detail Korban</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<center><h1> Detail Korban </h1></center>
<a href="http://localhost/sabana/menu.html" class="tombol_tambah">>>>Home</a>
<br>
<br>
<a href="http://localhost/sabana/crud-Korban/">Lihat Data Korban</a>
<br>
<a href="http://localhost/sabana/crud-Bencana/">Lihat Data Bencana</a>
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
<th>Jenis Bencana</th>
<th>Tanggal Bencana</th>
<th>status Korban</th>
</tr>

<?php
include 'koneksi.php';
$no = 1;
$sql = mysqli_query($db, "SELECT korban.nik_korban, kejadian_bencana.jenis_bencana, kejadian_bencana.tgl_bencana, detail_korban.status_korban FROM detail_korban JOIN korban ON korban.nik_korban=detail_korban.nik_korban JOIN kejadian_bencana ON kejadian_bencana.no_urut=detail_korban.no_urut  order by jenis_bencana desc");
while ($data = mysqli_fetch_array($sql)) {

?>

<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['nik_korban'];?></td>
<td><?php echo $data['jenis_bencana'];?></td>
<td><?php echo $data['tgl_bencana'];?></td>
<td><?php echo $data['status_korban'] ;?></td>
 <tr>


<?php
}
?>
</table>
</body>
<html>