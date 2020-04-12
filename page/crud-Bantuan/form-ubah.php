 <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah Data Bantuan
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id_bantuan   = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM bantuan WHERE id_bantuan='$id_bantuan'") or die('Query Error : '.mysqli_error($conn));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_bantuan           = $data['id_bantuan'];
          $jenis_bantuan         = $data['jenis_bantuan'];
        }
      }
      ?>

  <form  action="proses-ubah.php" method="post">   
	
  <div class="content">
  <div class="container">
  <div class="card height-content">

      <div class="field">
        <td><label for="id_bantuan" class="label">ID Bantuan</label></td>
        <td><input class="input" type="text" name="id_bantuan" id="id_bantuan" value="<?php echo $id_bantuan; ?>" readonly></td>
      </div> 

          <div class="field">
            <td><label for="jenis_bantuan" class="label">Jenis Bantuan</label></td>
            <td><input class="input" type="text" name="jenis_bantuan" id="jenis_bantuan" value="<?php echo $jenis_bantuan; ?>" required></td>
          </div> 

          <div class="field">
            
            <button type="submit" name="simpan" value="simpan" class="button is-primary">Simpan</button>
            <button><a href="index.php" class="button is-primary" style="color:white !important; text-decoration:none;">Batal</a>
          </div>

          
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
