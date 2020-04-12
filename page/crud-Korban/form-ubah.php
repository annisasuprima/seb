 <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah Data Korban
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $nik_korban  = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM korban WHERE nik_korban='$nik_korban'") or die('Query Error : '.mysqli_error($conn));
        while ($data  = mysqli_fetch_assoc($query)) {
          $nik_korban           = $data['nik_korban'];
          $nama_korban       = $data['nama_korban'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">

        <form  action="proses-ubah.php" method="post">   
	
      <div class="content">
		  <div class="container">
			<div class="card height-content">

          <div class="field">
            <td><label for="nik_korban" class="label">Nik Korban</label></td>
            <td><input class="input" type="text" name="nik_korban" id="nik_korban" value="<?php echo $nik_korban; ?>" readonly></td>
          </div> 

          <div class="field">
            <td><label for="nama_korban" class="label">Nama Korban</label></td>
            <td><input class="input" type="text" name="nama_korban" id="nama_korban" value="<?php echo $nama_korban; ?>"></td>
          </div>

          <div class="field">
            
            <button type="submit" name="simpan" value="simpan" class="button is-primary">Simpan</button>
            <button><a href="index.php" class="button is-primary" style="color:white !important; text-decoration:none;">Batal</a>
          </div>

           
          </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
