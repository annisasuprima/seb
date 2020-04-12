<!DOCTYPE html>
<html>
<head>
	<title>Data Shelter di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Shelter Padang</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Shelter</th>
		<th>Geom Shelter</th>
		<th>Lokasi</th>
		<th>Jumlah Lantai</th>
		<th>Kepemilikan</th>
		<th>Daya Tampung</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from shelter");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['id_shelter'] ?></td>
		<td><?php echo $row['geom_shelter'] ?></td>
		<td><?php echo $row['lokasi'] ?></td>
		<td><?php echo $row['jumlah_lantai'] ?></td>
		<td><?php echo $row['kepemilikan'] ?></td>
		<td><?php echo $row['daya_tampung'] ?></td>

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