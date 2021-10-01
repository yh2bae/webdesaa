  <header>
      <div class="row text-center">
          <div class="col-md-12 logo">
              <a class="navbar-brand pt-4" href="#">
                  <h1>Desa Prindaphan</h1>
              </a>
          </div>
      </div>
  </header>
  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light shadow-sm p-3 bg-body rounded">
      <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="{{ route('home') }}">
                          Beranda
                      </a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Profile Desa
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah Desa</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Pemerintahan Desa
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{ route('pemerintahan') }}">Visi $ Misi</a></li>
                      </ul>
                  </li>
                  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          LemHas
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{ route('karang.taruna') }}">Karang taruna</a></li>
                      </ul>
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
                  <li class="nav-item">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          PPID
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
              </ul>
              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <!-- <button class="btn btn-outline-success btn-sm" type="submit">
              Search
            </button> -->
              </form>
          </div>
      </div>
  </nav>
