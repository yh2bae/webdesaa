<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/x-icon" href="{{ asset('upload/desa/'.$desa->logo) }}"/>

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('frontend/styles/style.css') }}" />
  <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/styles/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/styles/css/slider.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <title>Desa</title>
</head>


<body>
  @include('frontend.layouts.header')
  <!-- owl-carousel -->
    @include('frontend.layouts.slider')
  <!-- body -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <!-- content -->
                <div class="col-md-9 col-lg-9 my-3">
                    <section>
                        <div class="container bg-body rounded p-4">
                            @yield('content')
                        </div>

                    </section>
                </div>
                <!-- end content -->
    @include('frontend.layouts.side')
      </div>
    </div>
  </section>
  <!-- Footer -->
  <!-- Footer -->
 @include('frontend.layouts.footer')
  <!-- Footer -->
  <!-- end footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="styles/js/jquery-3.6.0.min.js"></script> -->
  <script src="{{ asset('frontend/styles/js/owl.carousel.min.js') }}"></script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    
  -->
  <!-- Navbar sticky top -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
          document.getElementById("navbar_top").classList.add("fixed-top");
          // add padding top to show content behind navbar
          navbar_height = document.querySelector(".navbar").offsetHeight;
          document.body.style.paddingTop = navbar_height + "px";
        } else {
          document.getElementById("navbar_top").classList.remove("fixed-top");
          // remove padding top from body
          document.body.style.paddingTop = "0";
        }
      });
    });
  </script>

  <!-- owl -->
  <script>
    $(document).ready(function () {
      $('.slider .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        items: 1,
        autoplay: true,
        smartSpeed: 1200,
        animateOut: 'fadeOut'

      });
    });
  </script>


</body>


</html>