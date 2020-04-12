
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
			<center><h2>Sumberdaya di Kota Padang</h2></center>
			<br>

	<h2>TAMBAH DETAIL SUMBER DAYA</h2>
	<br/>
	<a href="index-detail-sd.php">KEMBALI</a>
	
	<br/>
	<h3>TAMBAH DATA DETAIL SUMBER DAYA</h3>
	<form action="tambah-aksi-detail-sd.php" method="post" enctype="multipart/form-data">
	<div class="content">
		<div class="container">
			<div class="card height-content">

		  <div class="field">
            <td><label for="id_tim_sar" class="label">ID Tim Sar</label></td>
            <td><input class="input" type="text" name="id_tim_sar" id="ID Tim Sar" ></td>
          </div> 

					<div class="field">
            <td><label for="id_sumber_daya" class="label">ID Sumber  Daya</label></td>
            <td><input class="input" type="text" name="id_sumber_daya" id="id_sumber_daya" ></td>
					</div> 
					
					
		  	<div class="field">
            <td><label for="nik_korban" class="label">NIK Korban</label></td>
            <td><input class="input" type="text" name="nik_korban" id="nik_korban" ></td>
					</div> 
					
					
		  	<div class="field">
            <td><label for="jenis_bencana" class="label">Jenis Bencana</label></td>
            <td><input class="input" type="text" name="jenis_bencana" id="jenis_bencana"></td>
					</div> 
					
					
		  <div class="field">
            <td><label for="tgl_bencana" class="label">Tanggal Bencana</label></td>
            <td><input class="input" type="date" name="tgl_bencana" id="tgl_bencana" required></td>
          </div> 
		  
					<div class="field">
            <td><label for="jumlah_sumber_daya" class="label">No Urut</label></td>
            <td><input class="input" type="text" name="jumlah_sumber_daya" id="jumlah_sumber_daya" required></td>
					</div> 
					
					
		  	<div class="field">
            <td><label for="jumlah_sumber_daya" class="label">Jumlah Sumber Daya</label></td>
            <td><input class="input" type="text" name="jumlah_sumber_daya" id="jumlah_sumber_daya" required></td>
					</div> 
					
					<div class="field">
            <button type="submit" value="simpan" class="button is-primary">Simpan</button>
          </div>
		
					</div>
      <div>
      
   
      </div>
      </div>
	</form>
	
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