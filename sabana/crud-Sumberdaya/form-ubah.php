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
        $query = mysqli_query($db, "SELECT * FROM sumber_daya WHERE id_sumber_daya='$id_sumber_daya'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_sumber_daya           = $data['id_sumber_daya'];
          $nama_sumber_daya        = $data['nama_sumber_daya'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">ID Sumberdaya</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_sumber_daya" value="<?php echo $id_sumber_daya; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Sumberdaya</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_sumber_daya" autocomplete="off" value="<?php echo $nama_sumber_daya; ?>" required>
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
