<!DOCTYPE html>
<html>
	<?php
	?>
<body>

      <center><h2>Korban di Kota Padang</h2></center>
      
  <form action="proses-simpan.php" method="post">   
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            	
	<div class="content">
		<div class="container">
			<div class="card height-content">

        <div class="field">
            <td><label for="nik_korban" class="label">NIK Korban</label></td>
            <td><input class="input" type="text" name="nik_korban" id="nik_korban" autocomplete="off" required></td>
          </div> 

          <div class="field">
            <td><label for="nama_korban" class="label">Nama Korban</label></td>
            <td><input class="input" type="text" name="nama_korban" id="nama_korban" autocomplete="off" required></td>
          </div>  

          <div class="field">
            
            <button type="submit" name="simpan" value="simpan" class="button is-primary">Simpan</button>
            <button><a href="index.php" class="button is-primary" style="color:white !important; text-decoration:none;">Batal</a>
          </div>
            
          </div>
		</div>    
      </div>
  </form>
	
	
	<div class="clear"></div>
	</div>
	<!-- ini Footer -->
	<?php
	include('../../template/footer.php')
	?>
	<!-- end Footer -->
</body>
</html>