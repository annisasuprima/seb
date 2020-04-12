<?php 
    $koneksi = mysqli_connect("localhost","root","","tbpbd");

    function lihat($query)
    {
        global $koneksi;
        $hasil = mysqli_query($koneksi,$query);
        $tampungData = [];
        while ( $data = mysqli_fetch_assoc($hasil) ) {
        $tampungData[] = $data;
        }
        return $tampungData;

    }

    function hapus($data)
    {
        global $koneksi;

        $query = "DELETE FROM korban WHERE nik_korban ='$data' ";

        mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);
    }

    function edit($data)
    {

        global $koneksi;
        $nik_korban = $data["nik_korban"];
        $nama_korban = $data["nama_korban"];
        
        var_dump($data);
        $query = "UPDATE korban SET nama_korban='$nama_korban' WHERE nik_korban='$nik_korban'";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }

    
?>