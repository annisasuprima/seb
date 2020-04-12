
<!DOCTYPE html>
<html>
	<?php
	include($_SERVER["DOCUMENT_ROOT"] . '/bencana/template/header.php')
	?>
<body>

	<!-- navbar atau Header -->
	<?php include('../../template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('../../template/sidebar.php')?>
	<!-- end SideBar-->		
	<div class="content">
		<div class="container">
			<div class="card height-content">
			<center><h2>Shelter di Kota Padang</h2></center>
			<br>

			<div style="display: flex;justify-content:flex-end; width:100%;">
			<button><a href="cetakshelter.php" style="color:white !important; text-decoration:none;">PRINT</a></button>
			</div>
	<table class="tabel">
	<tr>
		<th>ID Shelter</th>
	
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




</div>
      <div>
      
   
      
      </div>
		</div>
	</div>
	<div class="clear"></div>
	</div>
	<!-- ini Footer -->
	<?php
	include('../../template/footer.php')
	?>
	<!-- end Footer -->
</body>
</html>