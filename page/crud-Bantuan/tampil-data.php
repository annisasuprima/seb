 
<?php 
if (isset($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = "";
}
?>

<div class="row" style="float: right; width: 80%; height: 80vh; overflow-x: auto">
    <div class="col-md-12">
      <div class="page-header">
        <h2>
          <i ></i> Data Bantuan
          
          <div class="pull-right btn-tambah" style="width: 100%">
            <form class="form-inline" method="POST" action="index.php" style=" margin: 0; ">
              <div class="form-group">
                <div class="field" style="justify-content:flex-end;">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                  
                  <input type="text" class="input" name="cari" placeholder="Cari ..." autocomplete="off" value="<?php echo $cari; ?>">
                

            
             <button style="margin:0;"> <a type="submit" name="tambah" class="button is-primary"style="margin:0; color:white !important; text-decoration:none;" href="?page=tambah">Tambah</a></button>
               
              
            </form>
          </div>
        </h2>
        </div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>ID Bantuan</th>
                  <th>Jenis Bantuan</th>
                  <th>Aksi</th>
                </tr>
              </thead>   

              <tbody>
              <?php
              /* Pagination */
              $batas = 50;

              if (isset($cari)) {
                $jumlah_record = mysqli_query($conn, "SELECT * FROM bantuan
                                                    WHERE id_bantuan LIKE '%$cari%' OR jenis_bantuan LIKE '%$cari%'")
                                                    or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($conn));
              } else {
                $jumlah_record = mysqli_query($conn, "SELECT * FROM bantuan")
                                                    or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($conn));
              }

              $jumlah  = mysqli_num_rows($jumlah_record);
              $halaman = ceil($jumlah / $batas);
              $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
              $mulai   = ($page - 1) * $batas;
              /*-------------------------------------------------------------------*/
              $no = 1;
              if (isset($cari)) {
                $query = mysqli_query($conn, "SELECT * FROM bantuan
                                            WHERE id_bantuan LIKE '%$cari%' OR jenis_bantuan LIKE '%$cari%' 
                                            ORDER BY id_bantuan DESC LIMIT $mulai, $batas") 
                                            or die('Ada kesalahan pada query bantuan: '.mysqli_error($conn));
              } else {
                $query = mysqli_query($conn, "SELECT * FROM bantuan
                                            ORDER BY id_bantuan DESC LIMIT $mulai, $batas")
                                            or die('Ada kesalahan pada query bantuan: '.mysqli_error($conn));
              }
              
              while ($data = mysqli_fetch_assoc($query)) {

                echo "  <tr>
                      <td width='50' class='center'>$no</td>
                      <td width='60'>$data[id_bantuan]</td>
                      <td width='150'>$data[jenis_bantuan]</td>
                     
                      <td width='100'>
                        <div class=''>
                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-info btn-sm' href='?page=ubah&id=$data[id_bantuan]'>
                          <i class='fa fa-edit'></i>
                          </a>";
              ?>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="proses-hapus.php?id=<?php echo $data['id_bantuan'];?>" onclick="return confirm('Anda yakin ingin menghapus Bantuan <?php echo $data['jenis_bantuan']; ?>?');">
                            <i class='fa fa-trash'></i>
                          </a>
              <?php
                echo "
                        </div>
                      </td>
                    </tr>";
                $no++;
              }
              ?>
              </tbody>    
                
            </table>   
          </div>    

  <?php  
  if (empty($_GET['alert'])) {
    echo "";
  } elseif ($_GET['alert'] == 1) {
    echo "<script>
    alert('Gagal terjadi kesalahan!');
    document.location.href = 'index.php';
    </script>
    ";
  } elseif ($_GET['alert'] == 2) {
    echo "<script>
			alert('data berhasil disimpan!');
			document.location.href = 'index.php';
			</script>
		  ";
  } elseif ($_GET['alert'] == 3) {
    echo "<script>
    alert('data berhasil diubah!');
    document.location.href = 'index.php';
    </script>
    ";
  } elseif ($_GET['alert'] == 4) {
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href = 'index.php';
    </script>
    ";
  }
  ?>

            <?php 
            if (empty($_GET['hal'])) {
              $halaman_aktif = '1';
            } else {
              $halaman_aktif = $_GET['hal'];
            }
            ?>

            <a>
              Halaman <?php echo $halaman_aktif; ?> dari <?php echo $halaman; ?> | 
              Total <?php echo $jumlah; ?> data
            </a>

            <nav>
              <ul class="pagination pull-right">
              <!-- Button untuk halaman sebelumnya -->
              <?php 
              if ($halaman_aktif<='1') { ?>
                <li class="disabled">
                  <a href="" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
              <?php
              } else { ?>
                <li>
                  <a href="?hal=<?php echo $page -1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
              <?php
              }
              ?>

              <!-- Link halaman 1 2 3 ... -->
              <?php 
              for($x=1; $x<=$halaman; $x++) { ?>
                <li class="">
                  <a href="?hal=<?php echo $x ?>"><?php echo $x ?></a>
                </li>
              <?php
              }
              ?>

              <!-- Button untuk halaman selanjutnya -->
              <?php 
              if ($halaman_aktif>=$halaman) { ?>
                <li class="disabled">
                  <a href="" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              <?php
              } else { ?>
                <li>
                  <a href="?hal=<?php echo $page +1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              <?php
              }
              ?>
              </ul>
            </nav>
          </div>
        