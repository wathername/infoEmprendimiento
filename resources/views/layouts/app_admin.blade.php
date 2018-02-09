<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Info-Emprendimiento') }}</title>

        <!-- Bootstrap -->
    <link href="{{ asset('bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('bower_components/gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('bower_components/gentelella/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('bower_components/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('bower_components/gentelella/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('bower_components/gentelella/build/css/custom.min.css')}}" rel="stylesheet">

    <script src="{{ asset('selec2/jquery.min.js')}}"></script>
    <script src="{{ asset('selec2/bootstrap.min.js')}}" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link href="{{ asset('selec2/select2.min.css')}}" rel="stylesheet" />
    <script src="{{ asset('selec2/select2.min.js')}}"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="nav-md">
 <div class="container body">
     <div class="main_container">
         <div class="col-md-3 left_col">
             <div class="left_col scroll-view">
                 <div class="navbar nav_title" style="border: 0;">
                     <a href="{{route('home')}}" class="site_title"><img src="{{ asset('assets/images/logo3.png') }}" width="50" > <span>Info Empre.</span></a>
                 </div>
                 @include('layouts.partials.admin_menu')
                 <!-- /menu footer buttons -->
                 @include('layouts.partials.admin_footer_menu')
                 <!-- /menu footer buttons -->
             </div>
         </div>

         <!-- top navigation -->
         @include('layouts.partials.admin_top_navegation')
         <!-- /top navigation -->

         @if(\Session::has('message'))
         @include('layouts.message')
         @endif

         <!-- page content -->
         @yield('content')
         <!-- /page content -->

         <!-- footer content -->
         @include('layouts.partials.admin_footer')
         <!-- /footer content -->
     </div>
 </div>


 <!-- FastClick -->
 <script src="{{ asset('bower_components/gentelella/vendors/fastclick/lib/fastclick.js')}}"></script>
 <!-- NProgress -->
 <script src="{{ asset('bower_components/gentelella/vendors/nprogress/nprogress.js')}}"></script>
 <!-- Chart.js -->
 <script src="{{ asset('bower_components/gentelella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
 <!-- gauge.js -->
 <script src="{{ asset('bower_components/gentelella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
 <!-- bootstrap-progressbar -->
 <script src="{{ asset('bower_components/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
 <!-- iCheck -->
 <script src="{{ asset('bower_components/gentelella/vendors/iCheck/icheck.min.js')}}"></script>
 <!-- Skycons -->
 <script src="{{ asset('bower_components/gentelella/vendors/skycons/skycons.js')}}"></script>
 <!-- Flot -->
 <script src="{{ asset('bower_components/gentelella/vendors/Flot/jquery.flot.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/Flot/jquery.flot.pie.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/Flot/jquery.flot.time.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/Flot/jquery.flot.stack.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/Flot/jquery.flot.resize.js')}}"></script>
 <!-- Flot plugins -->
 <script src="{{ asset('bower_components/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/flot.curvedlines/curvedLines.js')}}"></script>
 <!-- DateJS -->
 <script src="{{ asset('bower_components/gentelella/vendors/DateJS/build/date.js')}}"></script>
 <!-- JQVMap -->
 <script src="{{ asset('bower_components/gentelella/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
 <!-- bootstrap-daterangepicker -->
 <script src="{{ asset('bower_components/gentelella/vendors/moment/min/moment.min.js')}}"></script>
 <script src="{{ asset('bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

 <!-- Custom Theme Scripts -->
 <script src="{{ asset('bower_components/gentelella/build/js/custom.min.js')}}"></script>
 <!-- select2 -->
 <script type="text/javascript">
     $(document).ready(function () {
         $('select').select2({
             placeholder: 'Select an option'
         });
     });


 </script>
</body>
</html>
