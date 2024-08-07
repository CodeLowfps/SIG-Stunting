function initMap() {
    var location = { lat: latitude, lng: longitude };

    // Buat peta
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: location
    });

    // Load GeoJSON dari public folder (ganti dengan path yang sesuai)
    map.data.loadGeoJson('/geojson/kab_kupang.geojson');

    // Tambahkan event listener untuk menangani saat data GeoJSON selesai dimuat
    map.data.addListener('addfeature', function(event) {
        // Set style untuk setiap fitur (kecamatan) dalam GeoJSON
        var feature = event.feature;
        var namaKecamatan = feature.getProperty('WADMKC');

        // Tentukan warna berdasarkan kecamatan yang dipilih
        if (namaKecamatan === kecamatan) {
            var selectedColors;

            // Tentukan warna berdasarkan jumlah stunting
            if (jumlahStunting >= 90 && jumlahStunting <= 147) {
                selectedColor = '#ffcccc'; // Merah muda
            } else if (jumlahStunting > 147 && jumlahStunting <= 252) {
                selectedColor = '#ff9999'; // Sedikit lebih tua
            } else if (jumlahStunting > 252 && jumlahStunting <= 389) {
                selectedColor = '#ff6666'; // Lebih tua
            } else if (jumlahStunting > 389 && jumlahStunting <= 591) {
                selectedColor = '#ff3333'; // Merah tua
            }
            // Set style untuk fitur yang dipilih
            map.data.overrideStyle(feature, {
                fillColor: selectedColor,
                strokeColor: selectedColor,
                strokeWeight: 1,
                fillOpacity: 0.6
            });
        } else {
            // Set style untuk fitur non-pilihan
            map.data.overrideStyle(feature, {
                fillColor: null,
                strokeColor: null,
                strokeWeight: 0,
                fillOpacity: 0
            });
        }
    });


    // Tambahkan info window untuk menampilkan nama kecamatan saat mouseover
    var infoWindow = new google.maps.InfoWindow();

    map.data.addListener('mouseover', function(event) {
        var kecamatanName = event.feature.getProperty('WADMKC');
        var infoContent = '<div><strong>' + kecamatanName + '</strong></div>';

        infoWindow.setContent(infoContent);
        infoWindow.setPosition(event.latLng);
        infoWindow.open(map);
    });

    map.data.addListener('mouseout', function() {
        infoWindow.close();
    });
}
