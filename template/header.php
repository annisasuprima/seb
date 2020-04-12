<?php
    $root = $_SERVER['DOCUMENT_ROOT'].'/bencana';

    include( $root.'../common/host.php');
    include( $root.'../common/koneksi.php');
    

    use host as Host;
    $data = Host\host::base_url();
    
?>
<head>
    <title>EvakuasiBencana</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   
   
   <style type="text/css">
        #mapid, #mapid2, #mapid3
        { height: 600px; }
        #mapid4 , #map_canvas{
            height : 600px;
        }
        
   </style>
   
	<!-- <link rel="stylesheet" type="text/css" href="dashboard.css"> -->
    <link rel="stylesheet" type="text/css" href='/bencana/asset/main.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index.css">
</head>
