 <footer class="text-center text-lg-start bg-white text-muted mt-5">
     <!-- Section: Social media -->
     {{-- <section class="d-flex justify-content-center justify-content-lg-between p-4 ">

     </section> --}}
     <!-- Section: Social media -->

     <!-- Section: Links  -->
     <section class="footer" style="background-color: #1b8da6">
         <div class="container text-center text-md-start" >
             <!-- Grid row -->
             <div class="row">
                 <!-- Grid column -->
                 <div class="col-md-3 col-lg-3 col-xl-3 my-5">
                     <!-- Content -->
                     
                     <h5 class="text-uppercase fw-bold mb-4">
                        Hubungi Kami
                    </h5>
                    <p>
                        <i class="fas fa-home" style="margin-right: 5px" aria-hidden="true"></i>{{ $desa->alamat }}
                        <br>
                        <i class="fas fa-envelope" style="margin-right: 5px" aria-hidden="true"></i>
                        {{ $config->email }}
                        <br>
                        <i class="fas fa-phone" style="margin-right: 5px" aria-hidden="true"></i>{{ $config->phone }}
                    </p>
                    
                     {{-- <p>
                         Here you can use rows and columns to organize your footer content. Lorem ipsum
                         dolor sit amet, consectetur adipisicing elit.
                     </p> --}}
                 </div>
                 <!-- Grid column -->
                 <!-- Grid column -->
                 <div class="col-md-4 col-lg-4 col-xl-4  my-5">
                     
                 </div>
                 <!-- Grid column -->


                 <!-- Grid column -->
                 <div class="col-md-5 col-lg-5 col-xl-5 mb-md-0 my-5">
                     <!-- Links -->
                     <h5 class="text-uppercase fw-bold mb-4">
                        <i class="fa fa-diamond" aria-hidden="true"></i>Desa {{ $desa->nama_desa }}
                    </h5>
                    <p>
                        {!! $config->description !!}
                    </p>
                 </div>
                 <!-- Grid column -->
             </div>
             <!-- Grid row -->
         </div>
     </section>
     <!-- Section: Links  -->

     <!-- Copyright -->
     <div class="text-center py-3" style="background-color: #294663">
         © 2021 Copyright:
         <a class="text-reset fw-bold" href="https://trisulaindonesia.com/">Trisula Indonesia</a>
     </div>
     <!-- Copyright -->
 </footer>
