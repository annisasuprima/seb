<div class="footer">
			<center><h4> Evakuasi Bencana Alam &#169;</h4></center>

			<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

   <script src="/bencana/assets/leaflet.ajax.js"></script>

   <script type="text/javascript">
        var mymap = L.map('mapid').setView([-0.9345808, 100.2511816], 10);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', 
        {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
        }).addTo(mymap);

        var myStyle = 
        {
            "color": "#ff7800",
            "weight": 5,
            "opacity": 0.65
        };

       var marker = L.marker([-1.075426, 100.411442]).addTo(mymap);
         
        var marker2 =  L.marker([-0.840152, 100.400777]).addTo(mymap);

        var marker3 =  L.marker([-0.9006999,100.4256024]).addTo(mymap);
        var marker4 =  L.marker([-0.9757632,100.4003703]).addTo(mymap);
        var marker5 =  L.marker([-0.9608858,100.4903254]).addTo(mymap);
        var marker6 =  L.marker([-0.902515, 100.368382]).addTo(mymap);
        var marker7 =  L.marker([-0.944676,100.355433]).addTo(mymap); 
        var marker8 =  L.marker([-0.990109, 100.370233]).addTo(mymap); 
        var marker9 =  L.marker([-0.942593, 100.378772]).addTo(mymap);  
        var marker10 =  L.marker([-0.904875, 100.348421]).addTo(mymap);  
        var marker11 =  L.marker([-0.879957, 100.500678]).addTo(mymap);  

        marker.bindPopup("<b>Bungus Teluk Kabung</b><br>I am a popup.").openPopup();
        marker2.bindPopup("<b>Koto Tangah</b><br>I am a popup.").openPopup();
        marker3.bindPopup("<b>Kuranji</b><br>I am a popup.").openPopup();
        marker4.bindPopup("<b>Lubuk Begalung</b><br>I am a popup.").openPopup();
        marker5.bindPopup("<b>Lubuk Kilangan</b><br>I am a popup.").openPopup();
        marker6.bindPopup("<b>Nanggalo</b><br>I am a popup.").openPopup();
        marker7.bindPopup("<b>Padang Barat</b><br>I am a popup.").openPopup();
        marker8.bindPopup("<b>Padang Selatan</b><br>I am a popup.").openPopup();
        marker9.bindPopup("<b>Padang Timur</b><br>I am a popup.").openPopup();
        marker10.bindPopup("<b>Padang Utara</b><br>I am a popup.").openPopup();
        marker11.bindPopup("<b>Pauh</b><br>I am a popup.").openPopup();
        
  function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}
mymap.on('click', onMapClick);
    function popUp(f,l){
    var out = [];
        if (f.properties)
        {
            for(key in f.properties){
                out.push(key+": "+f.properties[key]);
            }
            l.bindPopup(out.join("<br />"));
        }
    }
var jsonTest = new L.GeoJSON.AJAX(["/bencana/assets/map.geojson"],{onEachFeature:popUp, style: myStyle}).addTo(mymap);


   </script>
		</div>
		