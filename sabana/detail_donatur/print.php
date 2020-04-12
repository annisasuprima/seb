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
			<th>Nama Donatur</th>
			<th>Jenis Bantuan</th>
			<th>Tanggal Bantuan</th>
			<th width="5%">Jumlah Bantuan</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($db,"SELECT donatur.nama_donatur, bantuan.jenis_bantuan, detail_donatur.tgl_bantuan, detail_donatur.jumlah_bantuan FROM detail_donatur JOIN donatur ON donatur.id_donatur=detail_donatur.id_donatur JOIN bantuan ON bantuan.id_bantuan=detail_donatur.id_bantuan ");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama_donatur']; ?></td>
			<td><?php echo $data['jenis_bantuan']; ?></td>
			<td><?php echo $data['tgl_bantuan']; ?></td>
			<td><?php echo $data['jumlah_bantuan']; ?></td>
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