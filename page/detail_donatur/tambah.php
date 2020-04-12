<html>
<head>
<?php	
 
 include($_SERVER["DOCUMENT_ROOT"] . '/template/header.php');
 ?>
<title>Tambah Barang</title>
<link rel="stylesheet" type="text/css" href="style.css">


<body>
	<!-- navbar atau Header -->
	<?php include('../../template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('../../template/sidebar.php')?>
	<!-- end SideBar-->	



<form action="insert.php" method="POST">
<div class="content">
		<div class="container">
			<div class="card height-content">

			<div class="field">
            <td><label for="id_donatur" class="label">ID Donatur</label></td>
            <td>
            <select class="input" name="id_donatur" id="id_donatur">
				  <option value="">pilih</option>
				  <?php 
							include 'koneksi.php';
							$kategori = mysqli_query($db, "SELECT * FROM donatur");
							while($data2= mysqli_fetch_array($kategori)){
 					?>                                                       
<option value="<?php echo $data2['id_donatur'] ?>">
<?php echo $data2['id_donatur'] ;?></option>

<?php
}
?>

		    	</select></td>
					</div>
					
					<div class="field">
            <td><label for="id_bantuan" class="label">ID Bantuan</label></td>
            <td>
            <select class="input" name="id_bantuan" id="id_bantuan">
				  <option value="">pilih</option>
				  <?php 
include 'koneksi.php';
$bantuan = mysqli_query($db, "SELECT * FROM bantuan");
while($data3= mysqli_fetch_array($bantuan)){
 ?>
                                                        
<option value="<?php echo $data3['id_bantuan'] ?>">
<?php echo $data3['id_bantuan'] ;?></option>

<?php
}
?>
		    	</select></td>
          </div>                                                                                                            

<br>
<br>

			<div class="field">
            <td><label for="tgl_bantuan" class="label">Tanggal Bantuan</label></td>
            <td><input class="input" type="date" name="tgl_bantuan" id="tgl_bantuan" required></td>
          </div>

<br>


			<div class="field">
            <td><label for="jumlah_bantuan" class="label">Jumlah Bantuan</label></td>
            <td><input class="input" type="text" name="jumlah_bantuan" id="jumlah_bantuan" required></td>
          </div> 

					<div class="field">
            <button type="submit" name="tambah" class="button is-primary">Simpan Data</button>
          </div>

</form>
</div>
</div>
	</div>
	<div class="clear"></div>
	</div>
	<!-- ini Footer -->
	<?php
	include('../../template/footer.php')
  ?>
</body>
</html>