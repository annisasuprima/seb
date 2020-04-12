<!DOCTYPE html>
<html>
<head>
	<title>Data Korban di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Data Korban</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Korban</th>
		<th>Nama Korban</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from korban");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['nik_korban'] ?></td>
		<td><?php echo $row['nama_korban'] ?></td>
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