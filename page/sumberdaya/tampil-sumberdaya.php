
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
			<center><h2>Sumberdaya di Kota Padang</h2></center>
			<br>

	
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID Sumber Daya</th>
			<th>Nama Sumber Daya</th>
			<th>Ket</th>
		</tr>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($db,"select * from sumber_daya");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_sumber_daya']; ?></td>
				<td><?php echo $d['nama_sumber_daya']; ?></td>
				<td>
					<a href="lokasi_sumberdaya.php">MAP</a>
					<a href="index-detail-sd.php?id_sumber_daya=<?php echo $d['id_sumber_daya']; ?>">DETAIL</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
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