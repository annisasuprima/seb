<?php 

    require '../model/fungsi.php';

    $id = $_GET["id"];
    $barang = lihat("SELECT * FROM tim_sar WHERE id_tim_sar = $id")[0];

    if ( isset($_POST["ubah"]) ) {
        if ( edit1($_POST) > 0) {
          echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = '../tampil.php';
            </script>
          ";
        }
        else {
          echo "
          <script>
            alert('data gagal diubah');
            document.location.href = '../tampil.php';
            </script>
          ";
        }
    } 
?>