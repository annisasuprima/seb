
<!DOCTYPE html>
<html>
	<?php
	include($_SERVER["DOCUMENT_ROOT"] . '/bencana/template/header.php');
	session_start();
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
			<center><h2>Detail Sumberdaya di Kota Padang</h2></center>
			<br>


	<?php
  if (isset($_SESSION['login'])){
    ?>
               <button style="margin:0"> <a href="tambah-detail-sd.php"style="color:white !important; text-decoration:none;" class><i class="fa fa-plus-square"></i> Tambah </a></button>
                <?php
  }
                ?>

	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID TIM SAR</th>
			<th>ID SUMBER DAYA</th>
			<th>NIK KORBAN</th>
			<th>JENIS BENCANA</th>
			<th>TANGGAL BENCANA</th>
			<th>NO URUT</th>
			<th>JUMLAH SUMBER DAYA</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($db,"select * from detail_sumber_daya");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_tim_sar']; ?></td>
				<td><?php echo $d['id_sumber_daya']; ?></td>
				<td><?php echo $d['nik_korban']; ?></td>
				<td><?php echo $d['jenis_bencana']; ?></td>
				<td><?php echo $d['tgl_bencana']; ?></td>
				<td><?php echo $d['no_urut']; ?></td>
				<td><?php echo $d['jumlah_sumber_daya']; ?></td>
				<td>
				<?php
  if (isset($_SESSION['login'])){
    ?>
               <a href="edit-detail-sd.php?id_sumber_daya=<?php echo $d['id_sumber_daya']; ?>">EDIT</a>
					<a href="hapus-detail-sd.php?id_sumber_daya=<?php echo $d['id_sumber_daya']; ?>">HAPUS</a>
                <?php
  }
                ?>
					
					
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
</body>
</html>