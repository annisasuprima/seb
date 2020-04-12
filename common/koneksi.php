<?php 
    
    $conn = mysqli_connect('localhost','root','','tbpbd');

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal :" . mysqli_connect_errno(); 
    } 