 <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah Data Donatur
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id_donatur  = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM donatur WHERE id_donatur='$id_donatur'") or die('Query Error : '.mysqli_error($conn));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_donatur           = $data['id_donatur'];
          $nama_donatur       = $data['nama_donatur'];
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
        <td><label for="id_donatur" class="label">ID Donatur</label></td>
        <td><input class="input" type="text" name="id_donatur" id="id_donatur" value="<?php echo $id_donatur; ?>" readonly></td>
      </div> 

         
      <div class="field">
            <td><label for="nama_donatur" class="label">Nama Donatur</label></td>
            <td><input class="input" type="text" name="nama_donatur" id="nama_donatur" value="<?php echo $nama_donatur; ?>" autocomplete="off" required></td>
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
