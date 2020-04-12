<?php 
    $koneksi = mysqli_connect("localhost","root","","tbpbd");

    function hapus1($data)
    {
        global $koneksi;

        $query = "DELETE  FROM tim_sar WHERE id_tim_sar ='$data' ";

        mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);
    }

    function edit1($data)
    {

        global $koneksi;
        $id_tim_sar = $data["id_tim_sar"];
        $nama_tim = $data["nama_tim"];
        $wilayah_tujuan = $data["wilayah_tujuan"];
        
        var_dump($data);
        $query = "UPDATE tim_sar SET nama_tim='$nama_tim' wilayah_tujuan='$wilayah_tujuan' WHERE id_tim_sar='$id_tim_sar'";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }

    
?>