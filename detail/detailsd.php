 <!DOCTYPE html>
<html>
<head>
	<title>Data Detail Sumber Daya di Padang</title>
</head>
<body>
<fieldset>
	<legend><h1><b>Detail Sumber Daya</b></h1></legend>
<table border="1">
	<tr>
		<th>ID Tim</th>
		<th>ID Sumber Daya</th>
		<th>NIK Korban</th>
		<th>Jenis Bencana</th>	
		<th>Tanggal Bencana</th>
		<th>No Urut</th>
		<th>Jumlah Sumber Daya</th>	
	</tr>
	<tr>
<?php 
$conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from detail_sumber_daya join tim_sar on tim_sar.id_tim_sar=detail_sumber_daya.id_tim_sar join detail_korban on detail_sumber_daya.nik_korban=detail_korban.nik_korban join sumber_daya on detail_sumber_daya.id_sumber_daya=sumber_daya.id_sumber_daya");
while($row = $hasil->fetch_assoc()){
?>
		<td><?php echo $row['id_tim_sar'] ?></td>
		<td><?php echo $row['id_sumber_daya'] ?></td>
		<td><?php echo $row['nik_korban'] ?></td>
		<td><?php echo $row['jenis_bencana'] ?></td>
		<td><?php echo $row['tgl_bencana'] ?></td>
		<td><?php echo $row['no_urut'] ?></td>
		<td><?php echo $row['jumlah_sumber_daya'] ?></td>
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