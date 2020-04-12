
 
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data siswa
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $id_donatur   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM detail_donatur WHERE id_donatur='$id_donatur'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id_donatur           = $data['id_donatur'];
          $id_bantuan          = $data['id_bantuan'];
          $jumlah_bantuan  = $data['jumlah_bantuan'];
          
          $tanggal       = $data['tgl_bantuan'];
          $tgl           = explode('-',$tanggal);
          $tgl_bantuan = $tgl[2]."-".$tgl[1]."-".$tgl[0];
          
          
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
              <label class="col-sm-2 control-label">ID Bantuan</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_bantuan" autocomplete="off" value="<?php echo $id_bantuan; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Jumlah Bantuan</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="jumlah_bantuan" autocomplete="off" value="<?php echo $jumlah_bantuan; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Bantuan</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_bantuan" autocomplete="off" value="<?php echo $tgl_bantuan; ?>" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            
            <hr/>
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
