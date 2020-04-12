<!DOCTYPE html>
<html>
	<?php
	?>
<body>

      <center><h2>Donatur</h2></center>
      <form action="proses-simpan.php" method="post">   
	
	<div class="content">
		<div class="container">
			<div class="card height-content">


		      <div class="field">
            <td><label for="id_donatur" class="label">ID Donatur</label></td>
            <td><input class="input" type="text" name="id_donatur" id="id_donatur" maxlength="5" autocomplete="off" required></td>
          </div> 

          <div class="field">
            <td><label for="nama_donatur" class="label">nama Donatur</label></td>
            <td><input class="input" type="text" name="nama_donatur" id="nama_donatur" autocomplete="off" required></td>
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