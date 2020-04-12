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
			<th>Nama Korban</th>
			<th>Jenis Bencana</th>
			<th>Tanggal Bencana</th>
			<th>No Urut Bencana</th>
			<th >Status Korban</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($db,"SELECT korban.nik_korban, korban.nama_korban, kejadian_bencana.jenis_bencana, kejadian_bencana.tgl_bencana,kejadian_bencana.no_urut, detail_korban.status_korban FROM detail_korban JOIN korban ON korban.nik_korban=detail_korban.nik_korban JOIN kejadian_bencana ON kejadian_bencana.no_urut=detail_korban.no_urut");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nik_korban']; ?></td>
			<td><?php echo $data['nama_korban']; ?></td>
			<td><?php echo $data['jenis_bencana']; ?></td>
			<td><?php echo $data['tgl_bencana']; ?></td>
			<td><?php echo $data['no_urut']; ?></td>
			<td><?php echo $data['status_korban']; ?></td>
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