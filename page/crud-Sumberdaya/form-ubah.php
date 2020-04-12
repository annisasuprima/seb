 <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah Data Sumberdaya
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id_sumber_daya  = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM sumber_daya WHERE id_sumber_daya='$id_sumber_daya'") or die('Query Error : '.mysqli_error($conn));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_sumber_daya           = $data['id_sumber_daya'];
          $nama_sumber_daya        = $data['nama_sumber_daya'];
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
            <td><label for="id_sumber_daya" class="label">ID Sumber Daya</label></td>
            <td><input class="input" type="text" name="id_sumber_daya" id="id_sumber_daya" value="<?php echo $id_sumber_daya; ?>" readonly></td>
          </div> 
          
          <div class="field">
            <td><label for="nama_sumber_daya" class="label">Nama Sumber Daya</label></td>
            <td><input class="input" type="text" name="nama_sumber_daya" id="nama_sumber_daya" autocomplete="off" value="<?php echo $nama_sumber_daya; ?>"  required></td>
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
