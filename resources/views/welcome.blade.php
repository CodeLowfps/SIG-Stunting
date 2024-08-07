<x-navbar></x-navbar>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logo.png" >
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
                            <p>Pemetaan persebaran kasus stunting</p> 
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="#data-stunting">
                            <img src="img/data.png" alt="data" class="float-left">
                            <h4>DATA STUNTING</h4>
                            <p>Data kasus stunting tiap kecamatan</p> 
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="#about-us">
                            <img src="img/about.png" alt="about" class="float-left">
                            <h4>ABOUT US</h4>
                            <p>Introduce our team</p> 
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
                <h5>Distribusi Kasus Stunting Kabupaten Kupang 2022</h5>
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
                <h2 class="text-center mb-4">DATA STUNTING PER KECAMATAN <span class="text-primary">2022</span></h2>
                <p class="lead text-center mb-5">Daftar kecamatan berdasarkan jumlah kasus stunting tertinggi hingga paling rendah di Kabupaten Kupang, Provinsi Nusa Tenggara Timur tahun 2022</p>
                
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

        <!-- About -->
        <x-about></x-about>
        <!-- end About -->

        <!-- Section team -->
         <section class="team" id="team">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="img/robert.jpg" class="img-fluid rounded-start h-100" alt="ian" style="object-fit: cover;">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                              <div class="card-body p-2">
                                <h5 class="card-title mb-1">Robertus Dole Guntur, S.SI, M.Math.Sc., GC-Resim., PHD</h5>
                                <p class="card-text mb-1 role"><small class="text-body-secondary">Supervisor</small></p>
                                <div class="bio">
                                    <p class="card-text">Dosen Prodi Matematika</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="img/ernus.jpg" class="img-fluid rounded-start h-100" alt="ian" style="object-fit: cover;">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                              <div class="card-body p-2">
                                <h5 class="card-title mb-1">Bernadinus Jeharu</h5>
                                <p class="card-text mb-1 role"><small class="text-body-secondary">Team Leader</small></p>
                                <div class="bio">
                                    <p class="card-text mb-1">NIM : 2106040023</p>
                                    <p class="card-text">Prodi : Matematika-FST</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="img/jose.jpg" class="img-fluid rounded-start h-100" alt="ian" style="object-fit: cover;">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                              <div class="card-body p-2">
                                <h5 class="card-title mb-1">Joseph F. Seran Berek</h5>
                                <p class="card-text mb-1 role"><small class="text-body-secondary">GPR-Model Analis</small></p>
                                <div class="bio">
                                    <p class="card-text mb-1">NIM : 2106040033</p>
                                    <p class="card-text">Prodi : Matematika-FST</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="img/marlen.jpg" class="img-fluid rounded-start h-100" alt="marlen" style="object-fit: cover;">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                              <div class="card-body p-2">
                                <h5 class="card-title mb-1">Marlen Paru</h5>
                                <p class="card-text mb-1 role"><small class="text-body-secondary">GPR-Model Analis</small></p>
                                <div class="bio">
                                    <p class="card-text mb-1">NIM : 2106040014</p>
                                    <p class="card-text">Prodi : Matematika-FST</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="img/ian1.jpg" class="img-fluid rounded-start h-100" alt="ian" style="object-fit: cover;">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                              <div class="card-body p-2">
                                <h5 class="card-title mb-1">Felixiano B. koten</h5>
                                <p class="card-text mb-1 role"><small class="text-body-secondary">Developer</small></p>
                                <div class="bio">
                                    <p class="card-text mb-1">NIM : 2106080007</p>
                                    <p class="card-text">Prodi : Ilmu Komputer-FST</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="img/jofi.jpg" class="img-fluid rounded-start h-100" alt="jofy" style="object-fit: cover;">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                              <div class="card-body p-2">
                                <h5 class="card-title mb-1">Joffy Mauty</h5>
                                <p class="card-text mb-1 role"><small class="text-body-secondary">GPR-Model Analis</small></p>
                                <div class="bio">
                                    <p class="card-text mb-1">NIM : 2306040023</p>
                                    <p class="card-text">Prodi : Matematika-FST</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
     </div>
    <!-- end container -->

    <!-- Google Maps API -->
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.6/mapsJavaScriptAPI.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARsR6faVAaWN3UoBMW6OejamqnEV1n6o4&callback=initMap" async defer></script>
    <script src="{{ asset('js/map.js') }}"></script>

    <!-- View Team Section -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.btn-about').addEventListener('click', function(event) {
          event.preventDefault();
          document.querySelector('.team').style.display = 'block';
          document.getElementById('team').scrollIntoView({ behavior: 'smooth' });
        });
      });
    </script>

    <!-- Paginator -->
     <script>
        document.addEventListener('DOMContentLoaded', function () {
          if (window.location.hash === '#data-stunting') {
              document.getElementById('data-stunting').scrollIntoView();
          }

          document.querySelectorAll('.pagination a').forEach(link => {
              link.addEventListener('click', function (event) {
                  event.preventDefault();
                  const url = new URL(this.href);
                  url.hash = 'data-stunting';
                  window.location.href = url.toString();
              });
          });
      });
     </script>
</body>
</html>

