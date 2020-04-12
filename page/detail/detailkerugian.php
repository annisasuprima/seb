
<!DOCTYPE html>
<html>
	<?php
	include($_SERVER["DOCUMENT_ROOT"] . '/template/header.php')
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
			<center><h2>Kerugian di Kota Padang</h2></center>
			<br>

			<div style="display: flex;justify-content:flex-end; width:100%;">
			<button><a href="ckebutuhan.php" style="color:white !important; text-decoration:none;">PRINT</a></button>
			</div>
<table class="tabel">
	<tr>
		<th>ID Kerugian</th>
		<th>Jenis Bencana</th>
		<th>Tanggal Bencana</th>	
		<th>No Urut</th>
		<th>Total Kerugian</th>
			
	</tr>
	<tr>
<?php 
// $conn=mysqli_connect ("localhost","root","","tbpbd") or die ("koneksi gagal"); 

$hasil = mysqli_query($conn,"select * from  detail_kerugian");
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