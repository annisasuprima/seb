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
        $query = mysqli_query($db, "SELECT * FROM donatur WHERE id_donatur='$id_donatur'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_donatur           = $data['id_donatur'];
          $nama_donatur       = $data['nama_donatur'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">ID Donatur</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_donatur" value="<?php echo $id_donatur; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Donatur</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_donatur" autocomplete="off" value="<?php echo $nama_donatur; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
