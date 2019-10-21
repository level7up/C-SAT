<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'title Error') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="imgs/title.png" />

  <!-- OLD Styles -->

  {{-- 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/demo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/profile.css')}}">
    <link rel="stylesheet" href="{{ asset('css/newnav.css')}}"> 
   --}}

 {{-- Footer --}}
 <link href="{{ asset('css/footer-distributed-with-address-and-phones.css') }}" rel="stylesheet">
 <link href="{{ asset('css/footer-distributed.css') }}" rel="stylesheet">
 <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

 
  {{-- NEW STYLES --}}

  <link rel="stylesheet" href="{{ asset('newcss/blk-design-system.css')}}">
  <link rel="stylesheet" href="{{ asset('newcss/blk-design-system.css.map')}}">
  <link rel="stylesheet" href="{{ asset('newcss/blk-design-system.min.css')}}"> 
  <link rel="stylesheet" href="{{ asset('newcss/nucleo-icons.css')}}">

  {{-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"> --}}
 
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->


      {{--IMPORTANT FOR ADD DATA--}}
  <script src="https://www.gstatic.com/firebasejs/5.8.6/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.8.6/firebase-database.js"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script> 

   

     

  <style>
    body {
      margin-top: 105px; }

    .navbar {
      opacity: 0.9;
       }
    .navbar .nav-item {
        font-size: 1.4rem;
        padding-right: -5px;
        padding-left: 10px;
      }

        a{
          border-radius: 10px; 
        }


    .dropdown-menu {
        
      border-radius: 0px;
      background: white;
    }


  /* login style */

    #Login {
        position: relative;
        background: url("imgs/login2.jpeg");
        min-height: 560px;
    }
    #Login .container{
    padding: 10px;
    }

    #Login .panel {
      border-radius: 25px;
      box-shadow: 2px 2px 5px #6D3151;
    }
    .panel-heading{
      border-radius: 25px;
    }
    #Login #email {
      border-radius: 20px;
    }
    #Login #password {
      border-radius: 20px;
    }
    #Login .btn {
      border-radius: 15px;
    }

    </style>
    

</head>
<body>

    <div id="app">
        @include('inc.navbar')
        <div class="container">
        
            @include('inc.messages')
            @yield('content')
            
        </div>
        @include('inc.footer')
    </div>
    

    <!-- Scripts -->
    
  
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>



  
  
 
</body>

</html>
