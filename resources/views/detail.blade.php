<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Detail Informasi Stunting 
            Kecamatan {{$data->kecamatan}}</h1>
            <p>Faktor faktor yang mempengaruhi secara signifikan terhadap kejadian stunting</p>
        </div>
    </div>
    <!-- end jumbotron -->

    <div class="container mt-5">
        <!-- info panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <h5>Informasi</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Jumlah kasus stunting</td>
                                    <td class="text-right"><span style="font-weight: bold;">{{$data->jumlah_kasus}}</span></td>
                                </tr>
                                <tr>
                                    <td>Presentase Balita Imunisasi Dasar Lengkap</td>
                                    <td class="text-right"><span style="font-weight: bold;">{{$data->balita_idl}}%</span></td>
                                </tr>
                                <tr>
                                    <td>Persentase Bayi Diberi ASI Eksklusif</td>
                                    <td class="text-right"><span style="font-weight: bold;">{{$data->asi_eksklusif}}%</span></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Balita Kurang Gizi</td>
                                    <td class="text-right"><span style="font-weight: bold;">{{$data->balita_gizi_kurang}}</span></td>
                                </tr>
                                <tr>
                                    <td>Persentase Akses Sanitasi Layak</td>
                                    <td class="text-right"><span style="font-weight: bold;">{{$data->akses_sanitasi_layak}}%</span></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Balita Diberi Vitamin A</td>
                                    <td class="text-right"><span style="font-weight: bold;">{{$data->vit_a}}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg">
                        <div id="map" class="map-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end info panel -->
    </div>

    <!-- Google Maps API -->
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.6/mapsJavaScriptAPI.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOVYRIgupAurZup5y1PRh8Ismb1A3lLao&libraries=places&callback=initMap" async defer></script> -->
    <script>
        var jumlahStunting = "{{ $data->jumlah_kasus }}";
        var kecamatan = "{{ $data->kecamatan }}";
        var latitude = {{ $data->latitude }};
        var longitude = {{ $data->longitude }};
    </script>
    <script src="{{ asset('js/detail.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
