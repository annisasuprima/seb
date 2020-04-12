 <!DOCTYPE html>
<html>
<head>
	<title>Data Detail Korban di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Detail Korban</b></h1></legend>
<table border="1">
	<tr>
		<th>NIK Korban</th>
		<th>Jenis Bencana</th>	
		<th>Tanggal Bencana</th>
		<th>No Urut</th>
		<th>Status Korban</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from korban join detail_korban on korban.nik_korban=detail_korban.nik_korban join kejadian_bencana on detail_korban.jenis_bencana=kejadian_bencana.jenis_bencana");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['nik_korban'] ?></td>
		<td><?php echo $row['jenis_bencana'] ?></td>
		<td><?php echo $row['tgl_bencana'] ?></td>
		<td><?php echo $row['no_urut'] ?></td>
		<td><?php echo $row['status_korban'] ?></td>
	</tr>
	<?php
}
?>
</table>
<?php 
$data=mysqli_num_rows($hasil);
echo "jumlah data : $data";
?>
</fieldset>
</body>
</html>

<!-- korban.nik_korban, kejadian_bencana.jenis_bencana, kejadian_bencana.tgl_bencana, kejadian_bencana.no_urut, detail_korban.status_korban  -->