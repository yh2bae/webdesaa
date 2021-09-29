 <footer class="text-center text-lg-start bg-white text-muted mt-5">
     <!-- Section: Social media -->
     <section class="d-flex justify-content-center justify-content-lg-between p-4 ">

     </section>
     <!-- Section: Social media -->

     <!-- Section: Links  -->
     <section class="">
         <div class="container text-center text-md-start mt-5">
             <!-- Grid row -->
             <div class="row">
                 <!-- Grid column -->
                 <div class="col-md-3 col-lg-3 col-xl-3  mb-4">
                     <!-- Content -->
                     <h6 class="text-uppercase fw-bold mb-4">
                         <i class="fa fa-diamond" aria-hidden="true"></i>{{ $desa->nama_desa }}
                     </h6>
                 </div>
                 <!-- Grid column -->
                 <!-- Grid column -->
                 <div class="col-md-6 col-lg-6 col-xl-6  mb-4">
                 </div>
                 <!-- Grid column -->


                 <!-- Grid column -->
                 <div class="col-md-3 col-lg-3 col-xl-3 mb-md-0 mb-4">
                     <!-- Links -->
                     <h6 class="text-uppercase fw-bold mb-4">
                         Contact
                     </h6>
                     <p><i class="fa fa-home" aria-hidden="true"></i></i> {{ $desa->alamat }}</p>
                     <p>
                         <i class="fa fa-envelope" aria-hidden="true"></i>
                        {{ $config->email }}
                     </p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i>{{ $config->whatsapp }}</p>
                 </div>
                 <!-- Grid column -->
             </div>
             <!-- Grid row -->
         </div>
     </section>
     <!-- Section: Links  -->

     <!-- Copyright -->
     <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
         © 2021 Copyright:
         <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Trisula Indonesia</a>
     </div>
     <!-- Copyright -->
 </footer>
