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
        $query = mysqli_query($db, "SELECT * FROM bantuan WHERE id_bantuan='$id_bantuan'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_bantuan           = $data['id_bantuan'];
          $jenis_bantuan         = $data['jenis_bantuan'];
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">ID Bantuan</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_bantuan" value="<?php echo $id_bantuan; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Bantuan</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="jenis_bantuan" autocomplete="off" value="<?php echo $jenis_bantuan; ?>" required>
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
