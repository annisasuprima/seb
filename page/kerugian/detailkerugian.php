 <!DOCTYPE html>
<html>
<head>
	<title>Data Detail Kerugian di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Detail Kerugian</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Kerugian</th>
		<th>Jenis Kerugian</th>	
		<th>Tanggal Bencana</th>
		<th>No Urut</th>
		<th>Total Kerugian</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select kerugian.id_kerugian, kejadian_bencana.jenis_bencana, kejadian_bencana.tgl_bencana, kejadian_bencana. no_urut, detail_kerugian.total_kerugian  from kerugian join detail_kerugian on kerugian.id_kerugian=detail_kerugian.id_kerugian join kejadian_bencana on detail_kerugian.jenis_bencana=kejadian_bencana.jenis_bencana");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['id_kerugian'] ?></td>
		<td><?php echo $row['jenis_bencana'] ?></td>
		<td><?php echo $row['tgl_bencana'] ?></td>
		<td><?php echo $row['no_urut'] ?></td>
		<td><?php echo $row['total_kerugian'] ?></td>
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