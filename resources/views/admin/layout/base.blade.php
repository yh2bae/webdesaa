<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('') }}">
    @yield('head-title')
    <link rel="icon" type="image/x-icon" href="{{ asset('upload/desa/'.$desa->logo) }}"/>
    <link href="{{ asset('admin/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin/assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-icons/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/sweetalerts/sweetalert.css') }}">
    <!-- END GLOBAL MANDATORY STYLES -->
    @stack('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>

    <?php 
    if(Session()->get('username')=="") {
        // $last_page = url()->full();
        return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
    }
    ?>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('admin.layout.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    @include('admin.layout.begin-navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('admin.layout.sidebar')
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                @yield('content')
            </div>
            @include('admin.layout.footer')
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script>
        const baseURL = $('meta[name="base-url"]').attr('content');
        
        @if ($message = Session::get('success'))
        // Notifikasi
        // swal( "Berhasil" ,  "<?php echo $message ?>" ,  "success" )
        swal({
        title: 'Berhasil',
        text: "<?php echo $message ?>",
        type: 'success',
        padding: '2em'
        })
        @endif

        @if ($message = Session::get('error'))
        // Notifikasi
        swal({
        title: 'Opsss...',
        text: "<?php echo $message ?>",
        type: 'error',
        padding: '2em'
        })
        @endif
    </script>
    @stack('js-external')
    @stack('js-internal')
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>