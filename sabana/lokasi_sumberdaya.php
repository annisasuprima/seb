<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Multi Marker Map </title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- Bagian js -->
    <script src='assets/js/jquery-1.10.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1TwYksj1uQg1V_5yPUZqwqYYtUIvidrY&callback=basemape"></script>
    
    <script>
        
    var marker;
      function initialize() {
          
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
            $query = mysqli_query($db,"SELECT * FROM location_sumbererdaya");
            while ($data = mysqli_fetch_array($query))
            {
                $instansi = $data['Instansi'];
                $nama = $data['kec'];
                $lat = $data['lat'];
                $lon = $data['lon'];
                
                echo ("addMarker($lat, $lon ,'$instansi<br>$nama</b>');\n");                        
            }
          ?>
          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>
    
</head>
<body onload="initialize()">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            
        </div>
        
    </div>
</nav>
</br></br></br></br>
<!--- Bagian Judul--> 
 <header class="header">
  <div class="menu-malasngoding">

    <ul>
      <li><a href="menu.html">Home</a></li>
      <li class="dropdown"><a href="#">Sumberdaya</a>
        <ul class="isi-dropdown">
          <li><a href="crud-Sumberdaya">CRUD Sumberdaya</a></li>
          <li><a href="lokasi_sumberdaya.php">Lokasi Sumberdaya</a></li>
          <li><a href="#">Detail</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#">Bantuan</a>
        <ul class="isi-dropdown">
          <li><a href="crud-Bantuan">CRUD Bantuan</a></li>
          <li><a href="crud-Donatur">CRUD Donatur</a></li>
          <li><a href="#">Detail Bantuan</a></li>
          <li><a href="#">Detail Kebutuhan</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
    </ul>
  </div>
</header>
        <div class="lokasi"><h4>Lokasi Penyimpanan Sumberdaya</h4></div>
        <div id="map-canvas" style="width: 1200px; height: 600px;"></div>

</body>
</html>