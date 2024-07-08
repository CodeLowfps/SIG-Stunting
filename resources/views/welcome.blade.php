<x-navbar></x-navbar>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Stunting Modeling</h1>
        <p class="lead">Sistem informasi ini merupakan aplikasi pemetaan geografis kasus stunting di setiap kecamatan di Kabupaten Kupang. Aplikasi ini memuat informasi dan lokasi dari kasus stunting di Kabupaten Kupang.</p>
      </div>
    </div>
    <!-- end jumbotron -->

    <!-- container -->
     <div class="container">
        <!-- info panel -->
         <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <a href="#lokasi-peta">
                            <img src="img/map.png" alt="map" class="float-left">
                            <h4>PETA LOKASI</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="#data-stunting">
                            <img src="img/data.png" alt="data" class="float-left">
                            <h4>DATA STUNTING</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="#about-us">
                            <img src="img/about.png" alt="about" class="float-left">
                            <h4>ABOUT US</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
            </div>
         </div>
         <!-- end info panel -->

        <!-- Map Space -->
        <div class="row map" id="lokasi-peta">
            <div class="col-12 order-0 order-md-0 map-content">
                <h3>LOKASI <span class="text-primary">KASUS STUNTING</span></h3>
                <h5>Distribusi Kasus Stunting</h5>
                <div class="legend">
                    <div><div class="color-box color-1"></div> 90 - 147</div>
                    <div><div class="color-box color-2"></div> 147 - 252</div>
                    <div><div class="color-box color-3"></div> 252 - 389</div>
                    <div><div class="color-box color-4"></div> 389 - 591</div>
                </div>
            </div>
            <div class="col-12 order-1 order-md-1 map-container">
                <div id="map" class="map-responsive"></div>
            </div>
        </div>
        <!-- end Map -->

        <!-- Data Stunting Space -->
        <div class="row justify-content-center data-section mb-5" id="data-stunting">
            <div class="col-lg-10">
                <h2 class="text-center mb-4">DATA STUNTING PER KECAMATAN <span class="text-primary">2023</span></h2>
                <p class="lead text-center mb-5">Detailed information about stunting cases in each district, helping us to identify areas that need more attention and resources.</p>
                
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Persentase Stunting</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->kecamatan}}</td>
                                <td>{{number_format($item->persentase, 2)}}%</td>
                                </td>
                                <td>
                                    <a href="{{ route('detail', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Detail info</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination-container d-flex justify-content-center">
                    {{ $data->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
          <!-- end Data -->
     </div>
    <!-- end container -->

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
    <script src="{{ asset('js/map.js') }}"></script>
</body>
</html>

<!-- About -->
<x-about></x-about>
<!-- end About -->