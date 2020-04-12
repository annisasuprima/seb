<!DOCTYPE html>
<html>
	<?php
	?>
<body>

      <center><h2>Bantuan</h2></center>
      
  <form action="proses-simpan.php" method="post">   
	
	<div class="content">
		<div class="container">
			<div class="card height-content">


		      <div class="field">
            <td><label for="id_bantuan" class="label">ID Bantuan</label></td>
            <td><input class="input" type="text" name="id_bantuan" id="id_bantuan" autocomplete="off" required></td>
          </div> 

		      <div class="field">
            <td><label for="jenis_bantuan" class="label">Jenis Bantuan</label></td>
            <td><input class="input" type="text" name="jenis_bantuan" id="jenis_bantuan" autocomplete="off" required></td>
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