<?php 

    require '../model/fungsikorban.php';

    $id = $_GET["id"];
    $row = lihat("SELECT * FROM korban WHERE nik_korban = $id")[0];

    if ( isset($_POST["ubah"]) ) {
        if ( edit($_POST) > 0) {
          echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = '../korban/tampilkorban.php';
            </script>
          ";
        }
        else {
          echo "
          <script>
            alert('data gagal diubah');
            document.location.href = '../korban/tampilkorban.php';
            </script>
          ";
        }
    } 
?>