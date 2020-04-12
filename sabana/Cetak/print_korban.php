<html>
<head>
<title>Detail Kebutuhan</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<center><h1> Data Detail Korban </h1></center>
<a href="cetak.php" class="tombol_tambah">Back</a>
<br>
<br>
<table border="1">
<tr>
<th>No</th>
<th>NIK Korban</th>
<th>Nama Korban</th>
<th>Jenis Bencana</th>
<th>Tanggal Bencana</th>
<th>No Urut bencana</th>
<th>Status Korban</th>
</tr>

<?php
include 'koneksi.php';
$no = 1;
$sql = mysqli_query($db, "SELECT detail_korban.status_korban, korban.nik_korban,korban.nama_korban, kejadian_bencana.jenis_bencana, kejadian_bencana.tgl_bencana, kejadian_bencana.no_urut FROM detail_korban JOIN korban ON detail_korban.nik_korban=korban.nik_korban JOIN kejadian_bencana ON kejadian_bencana.jenis_bencana=detail_korban.jenis_bencana ");
while ($data = mysqli_fetch_array($sql)) {

?>

<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['nik_korban'];?></td>
<td><?php echo $data['nama_korban'];?></td>
<td><?php echo $data['jenis_bencana'];?></td>
<td><?php echo $data['tgl_bencana'];?></td>
<td><?php echo $data['no_urut'] ;?></td>
<td><?php echo $data['status_korban'] ;?></td>
 <tr>


<?php
}
?>
</table>
</body>
<html>