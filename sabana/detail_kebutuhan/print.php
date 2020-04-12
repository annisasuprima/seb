<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT </title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN BANTUAN</h2>
		
	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NIK Korban</th>
			<th>Jenis Bantuan</th>
			<th>Jenis Bencana</th>
			<th>Tanggal Bencana</th>
			<th width="5%">Tanggal Memberikan</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($db, "SELECT detail_korban.nik_korban,bantuan.jenis_bantuan kejadian_bencana.jenis_bencana, kejadian_bencana.tgl_bencana, detail_kebutuhan.tgl_memberikan FROM detail_kebutuhan JOIN bantuan ON detail_kebutuhan.id_bantuan=bantuan.id_bantuan JOIN detail_korban ON detail_korban.nik_korban=detail_kebutuhan.nik_korban");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nik_korban']; ?></td>
			<td><?php echo $data['jenis_bantuan']; ?></td>
			<td><?php echo $data['jenis_bencana']; ?></td>
			<td><?php echo $data['tgl_bencana']; ?></td>
			<td><?php echo $data['tgl_memberikan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>