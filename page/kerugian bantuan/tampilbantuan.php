<!DOCTYPE html>
<html>
<head>
	<title>Data Bantuan di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Data Bantuan</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Bantuan</th>
		<th>Jenis Bantuan</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from bantuan");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['id_bantuan'] ?></td>
		<td><?php echo $row['jenis_bantuan'] ?></td>
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
</body>Bantuan