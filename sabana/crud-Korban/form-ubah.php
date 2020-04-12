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
        $query = mysqli_query($db, "SELECT * FROM korban WHERE nik_korban='$nik_korban'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $nik_korban           = $data['nik_korban'];
          $nama_korban       = $data['nama_korban'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">NIK Korban</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="nik_korban" value="<?php echo $nik_korban; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Korban</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_korban" autocomplete="off" value="<?php echo $nama_korban; ?>" required>
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
