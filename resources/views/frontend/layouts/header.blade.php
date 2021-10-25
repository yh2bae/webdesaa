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
                    <a class="nav-link {{ set_active('pemerintahan.index') }} {{ set_active('pemerintahan.detail') }}" href="{{ route('pemerintahan.index') }}">
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
                              <a class="dropdown-item {{ set_active('data.agama') }}" href="{{ route('data.agama') }}">Data Agama</a>
                          </li>
                          <li>
                              <a class="dropdown-item {{ set_active('data.pendidikan') }}" href="{{ route('data.pendidikan') }}">Data Pendidikan</a>
                          </li>
                          <li><a class="dropdown-item {{ set_active('data.pekerjaan') }}" href="{{ route('data.pekerjaan') }}">Data Pekerjaan</a></li>
                          <li>
                              <a class="dropdown-item {{ set_active('data.darah') }}" href="{{ route('data.darah') }}">Data Golongan Darah</a>
                          </li>
                          <li>
                              <a class="dropdown-item {{ set_active('data.umur') }}" href="{{ route('data.umur') }}">Data Kelompok Umur</a>
                          </li>
                          <li><a class="dropdown-item {{ set_active('data.perkawinan') }}" href="{{ route('data.perkawinan') }}">Data Perkawinan</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link {{ set_active('laporan-apbdes') }}" href="{{ route('laporan-apbdes') }}">
                        APBDes
                    </a>
                 </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link {{ set_active('peta.index') }}" href="{{ route('peta.index') }}">
                        Peta Desa
                    </a>
                 </li>
                  
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link {{ set_active('berita.index') }} {{ set_active('detail.berita') }}" href="{{ route('berita.index') }}">
                        Berita
                    </a>
                  </li>
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
