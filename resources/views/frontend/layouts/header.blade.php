  <header>
      <div class="" style="background-color: #294663">
          <div class="col-md-12 logo">
              
              <div class="navbar-brand">
                <div class="d-flex justify-content-center my-4" >
                   <a href="{{ route('home') }}">
                    <img src="{{ asset('upload/desa/'. $desa->logo) }}" alt="logo" width="50px">
                   </a>
                   <a href="{{ route('home') }}" style="text-decoration: none;">
                       <h3 class="px-3 mt-2 title-brand">Desa {{ $desa->nama_desa }}</h3>
                   </a>
                </div>
              </div>
          </div>
      </div>
  </header>
  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light shadow-sm p-3">
      <div class="container" >

       <div class="brand-mobile">
           <div class="d-flex justify-content-center">
               <a href="{{ route('home') }}">
                   <img src="{{ asset('upload/desa/'. $desa->logo) }}" alt="logo" width="30px">
               </a>
               <a href="{{ route('home') }}" style="text-decoration: none;">
                   <h3 class="px-3 mt-2 title-brand">Desa {{ $desa->nama_desa }}</h3>
               </a>
           </div>
       </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                      <a class="nav-link {{ set_active('home') }}" href="{{ route('home') }}">
                          Beranda
                      </a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link {{ set_active('sejarah') }} {{ set_active('visimisi') }} dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Profile Desa
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item {{ set_active('sejarah') }}" href="{{ route('sejarah') }}">Sejarah Desa</a></li>
                          <li>
                              <a class="dropdown-item {{ set_active('visimisi') }}" href="{{ route('visimisi') }}">Visi & Misi</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link {{ set_active('pemerintahan.index') }}" href="{{ route('pemerintahan.index') }}">
                        Pemerintahan Desa
                    </a>
                  </li>
                 
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Data Desa
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li>
                              <a class="dropdown-item" href="#">Data Wilayah Administratif</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#">Data Pendidikan dalam KK</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#">Data Pendidikan Ditempuh</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Data Pekerjaan</a></li>
                          <li>
                              <a class="dropdown-item" href="#">Data Jenis Kelamin</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#">Data Golongan Darah</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#">Data Kelompok Umur</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Data Perkawinan</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link {{ set_active('laporan-apbdes') }}" href="{{ route('laporan-apbdes') }}">
                        APBDes
                    </a>
                 </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          SIG
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Lokasi Balai Desa</a></li>
                          <li><a class="dropdown-item" href="#">Lokasi Pura</a></li>
                          <li>
                              <a class="dropdown-item" href="#">Lokasi Rumah Tangga Miskin</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Surat Online
                      </a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Transparansi Keuangan
                      </a>
                  </li>
                  {{-- <li class="nav-item dropdown">
                    <a class="nav-link {{ set_active('detail.artikel') }}" href="{{ route('detail.artikel') }}">
                        Berita
                    </a>
                  </li> --}}
              </ul>
              {{-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <!-- <button class="btn btn-outline-success btn-sm" type="submit">
              Search
            </button> -->
              </form> --}}
          </div>
      </div>
  </nav>
