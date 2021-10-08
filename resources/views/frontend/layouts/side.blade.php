    <!-- side -->
    <div class="col-md-3 col-lg-3 ">
        <!-- pelayanan desa -->
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm my-3 bg-body rounded">
                    <div class="card-body">
                        <h3 class="card-title">Layanan Surat Desa</h3>
                        <a href="https://api.whatsapp.com/send/?phone=62{{ $config->whatsapp }}" target="_blank">
                            <img src="{{ asset('frontend/assets/wa.jpg') }}" class="rounded d-block wa-image" alt="wa">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm my-3 bg-body rounded">
            <div class="card-body">
                <h4 class="card-title">Wilayah Desa</h4>
                <hr>
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 col-lg-12 mb-4">
                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center">
                            <!--Google map-->
                            <div id="map-container-google-8" class="z-depth-1-half map-container-5"
                                style="height: 300px">
                                {!! $config->google_maps !!}
                            </div>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
        </div>

        {{-- <div class="card shadow-sm my-3 bg-body rounded">
            <div class="card-body">
                <h4 class="card-title">Aparatur Desa</h4>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 col-lg-12 mb-4 perangkatDesaFoto">
                        <!--Card content-->
                        <img src="{{ asset('frontend/assets/aparatdesa.jpg') }}" class="img-thumbnail" alt="people">
                        <!--/.Card content-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
        </div> --}}

        <!-- facebook -->
        <div class="card shadow-sm my-3 bg-body rounded">
            <div class="card-body">
                <h4 class="card-title">Info Media Sosial</h4>
                <a href="{{ $config->facebook }}" target="_blank">
                    <i class="fab fa-facebook mx-1" style="font-size: 36px"></i>
                </a>

                <a href="{{ $config->twitter }}" target="_blank">
                    <i class="fab fa-twitter mx-1" style="font-size: 36px"></i>
                </a>

                <a href="{{ $config->instagram }}" target="_blank">
                    <i class="fab fa-instagram mx-1" style="font-size: 36px; color:orange;"></i>
                </a>

                <a href="{{ $config->youtube }}" target="_blank">
                    <i class="fab fa-youtube mx-1" style="font-size: 36px; color: red;"></i>
                </a>
            </div>
        </div>

        <!-- sinergi program -->
        <!-- <div class="card shadow-sm my-3 bg-body rounded">
            <div class="card-body">
              <h4 class="card-title">Sinergi Program</h4>
              <div class="row">
                <div class="col-md-6">
                  <img src="assets/sinergi1.JPG" class="rounded float-start" alt="sinergi">
                </div>
                <div class="col-md-6">
                  <img src="assets/sinergi2.jpg" class="rounded float-end" alt="sinergi2">
                </div>
              </div>
            </div>
          </div> -->

        <!-- Artikel -->
        <div class="card shadow-sm my-3 bg-body rounded">
            <div class="card-body">
                <h4 class="card-title">Kategori Barita</h4>
                <div class="list-group">
                    @foreach ($category as $c)  
                    <a href="#" class="list-group-item list-group-item-action">{{ $c->kategori_berita }}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Galeri foto -->
        {{-- <div class="card shadow-sm my-3 bg-body rounded">
            <div class="card-body galeri-text">
                <a href="#">
                    <h4 class="card-title ">Galeri Foto</h4>
                </a>
            </div>
        </div> --}}
        <!-- statistik pengunjung -->
        <div class="card shadow-sm my-3 bg-body rounded">
            <div class="card-body">
                <h4 class="card-title">Statistik Pengunjung</h4>
                <h6>Hari Ini <span class="badge bg-secondary">0029</span></h6>
                <h6>Kemarin <span class="badge bg-secondary">0064</span></h6>
                <h6>Jumlah Pengunjung <span class="badge bg-secondary">000012312</span></h6>
            </div>
        </div>

    </div>
    <!-- end side -->
