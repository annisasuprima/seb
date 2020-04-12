 <!DOCTYPE html>
<html>
<head>
	<title>Data Detail Bantuan di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Detail Bantuan</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Bantuan</th>
		<th>NIK Korban</th>
		<th>Jenis Bencana</th>	
		<th>Tanggal Bencana</th>
		<th>No Urut</th>
		<th>Tanggal</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from detail_kebutuhan");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['id_bantuan'] ?></td>
		<td><?php echo $row['nik_korban'] ?></td>
		<td><?php echo $row['jenis_bencana'] ?></td>
		<td><?php echo $row['tgl_bencana'] ?></td>
		<td><?php echo $row['no_urut'] ?></td>
		<td><?php echo $row['tgl_memberikan'] ?></td>
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

<script>
		window.print();
	</script>

</body>
</html>

<!-- bantuan.id_bantuan, detail_korban.jenis_bencana, detail_korban.tgl_bencana, detail_korban.no_urut, detail_kebutuhan.tgl_memberikan  -->
