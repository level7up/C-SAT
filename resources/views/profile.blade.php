<!--
=========================================================
* BLK Design System- v1.0.0
=========================================================
 
* Product Page: https://www.creative-tim.com/product/blk-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="../assets/img/favicon.png">
   @if (Auth::user())
   <title>{{$user->name}}'s Profile</title>
   @else
   <title>CSAT</title>
  @endif

   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Nucleo Icons -->
   <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
   <!-- CSS Files -->
   <link href="../assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="../assets/demo/demo.css" rel="stylesheet" />
 </head>
 
 <body class="profile-page">
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="This is C SAT" data-placement="bottom">
          <img src="imgs/icon2.png" width="40px">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        
        
        <ul class="navbar-nav">
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#twitter" target="">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#facebook" target="">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#insta" target="">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
          @if (Auth::guest())
           <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
          @else
          <li class="dropdown nav-item">
              <img src="/avatars/{{ Auth::user()->avatar }}" style=" width:50px" class="rounded-circle">

          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" rel="tooltip" title="{{Auth::user()->name}}" >
              <i class="fa fa-cogs d-lg-none d-xl-none"></i>{{ Auth::user()->name }} 
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="/profile" class="dropdown-item">
                <i class="tim-icons icon-single-02"></i>{{ Auth::user()->name }} Profile
              </a>
              <a href="/home" class="dropdown-item">
                <i class="tim-icons icon-paper"></i> Dashboard
              </a>
              <a href="/dr" class="dropdown-item">
                <i class="tim-icons icon-bullet-list-67"></i>Doctors
              </a>
              <a href="/ta" class="dropdown-item">
                <i class="tim-icons icon-image-02"></i>Teacher Assestant
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="tim-icons icon-image-02"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
              

              
            </div>
          </li>
          
          @endif
          {{-- <li class="nav-item">
            <a class="nav-link btn btn-default d-none d-lg-block" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="tim-icons icon-cloud-download-93"></i> Download
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
   <!-- End Navbar -->
   <div class="wrapper">
     <div class="page-header">
       <img src="../assets/img/dots.png" class="dots">
       <img src="../assets/img/path4.png" class="path">
       <div class="container align-items-center">
         <div class="row">
           
           @if (Auth::user())
           <div class="col-lg-6 col-md-6">
              <h1 class="profile-title text-left">{{$user->name}} </h1>
              <h5 class="text-on-back">{{$user->id}}</h5>
              <p class="profile-description">Offices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles.</p>
              <div class="btn-wrapper profile pt-3">
                <a target="_blank" href="#" class="btn btn-icon btn-twitter btn-round" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-icon btn-facebook btn-round" data-toggle="tooltip" data-original-title="Like us">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-icon btn-dribbble  btn-round" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-dribbble"></i>
                </a>
              </div>
            </div>
           
           <div class="col-lg-4 col-md-6 ml-auto mr-auto">
             <div class="card card-coin card-plain">
               <div class="card-header">
                 <img src="/avatars/{{$user->avatar}}" class="img-center img-fluid rounded-circle">
                 
                 <h4 class="title">{{$user->name}}</h4>
               </div>
               <div class="card-body">
                 <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                   <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#linka">
                       Profile
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#linkb">
                       Update
                     </a>
                   </li>



                   <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#linkb">
                   <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                    </a>
                  </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


                   
                 </ul>
                 <div class="tab-content tab-subcategories">
                   <div class="tab-pane active" id="linka">
                     <div class="table-responsive">
                            <p>HR</p><span>{{$user->name}}</span>
                            <p>Department</p><span> Computer Science</span>
                            <p>Phone </p><span>{{$user->phone}}</span>
                            <p>Email </p><span>{{$user->email}}</span>
                            
                     </div>
                   </div>
                   <div class="tab-pane" id="linkb">
                     <div class="row">
                       Update  Profile Pictute
                            <form enctype="multipart/form-data" action="/profile" method="POST">
                                <input  class="btn btn-simple btn-primary" style="width:199px" type="file" name="avatar">
                                <input type="hidden"  name="_token" value="{{csrf_token()}}"><br> Update
                                <button type="submit" class="btn btn-simple btn-primary "><i class="tim-icons icon-send"></i></button>
                            </form>
                     </div>
                    
                   </div>
                   
                 </div>
               </div>
             </div>
           </div>
           @else
           <div class="col-lg-6 col-md-6">
              <h1 class="profile-title text-left">Mike Scheinder</h1>
              <h5 class="text-on-back">01</h5>
              <p class="profile-description">Offices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles.</p>
              <div class="btn-wrapper profile pt-3">
                <a target="_blank" href="#" class="btn btn-icon btn-twitter btn-round" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-icon btn-facebook btn-round" data-toggle="tooltip" data-original-title="Like us">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-icon btn-dribbble  btn-round" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-dribbble"></i>
                </a>
              </div>
            </div>
           <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-coin card-plain">
              <div class="card-header">
                <img src="../assets/img/mike.jpg" class="img-center img-fluid rounded-circle">
                <h4 class="title">Join Us...</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link nav-info active"  href="{{ route('login') }}">
                      Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('register') }}">
                      Register
                    </a>
                  </li>
                  
                </ul>
                <div class="tab-content tab-subcategories">
                  <div class="tab-pane active" id="linka">
                    <div class="table-responsive">
                      <table class="table tablesorter " id="plain-table">
                        
                      </table>
                    </div>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
           @endif
         </div>
       </div>
     </div>
     <div class="section">
       <div class="container">
         <div class="row justify-content-between">
           <div class="col-md-6">
             <div class="row justify-content-between align-items-center">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner" role="listbox">
                   <div class="carousel-item active">
                     <img class="d-block" src="../assets/img/denys.jpg" alt="First slide">
                     <div class="carousel-caption d-none d-md-block">
                       <h5>Big City Life, United States</h5>
                     </div>
                   </div>
                   <div class="carousel-item">
                     <img class="d-block" src="../assets/img/fabien-bazanegue.jpg" alt="Second slide">
                     <div class="carousel-caption d-none d-md-block">
                       <h5>Somewhere Beyond, United States</h5>
                     </div>
                   </div>
                   <div class="carousel-item">
                     <img class="d-block" src="../assets/img/mark-finn.jpg" alt="Third slide">
                     <div class="carousel-caption d-none d-md-block">
                       <h5>Stocks, United States</h5>
                     </div>
                   </div>
                 </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <i class="tim-icons icon-minimal-left"></i>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <i class="tim-icons icon-minimal-right"></i>
                 </a>
               </div>
             </div>
           </div>
           <div class="col-md-5">
             <h1 class="profile-title text-left">Projects</h1>
             <h5 class="text-on-back">02</h5>
             <p class="profile-description text-left">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
             <div class="btn-wrapper pt-3">
               <button href="javascript:void(0)" class="btn btn-simple btn-primary">
                 <i class="tim-icons icon-book-bookmark"></i> Bookmark
               </button>
               <button href="javascript:void(0)" class="btn btn-simple btn-info">
                 <i class="tim-icons icon-bulb-63"></i> Check it!
               </button>
             </div>
           </div>
         </div>
       </div>
     </div>
     <section class="section">
       <div class="container">
         <div class="row">
           <div class="col-md-6">
             <div class="card card-plain">
               <div class="card-header">
                 <h1 class="profile-title text-left">Contact</h1>
                 <h5 class="text-on-back">03</h5>
               </div>
               <div class="card-body">
                 <form>
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Your Name</label>
                         <input type="text" class="form-control" value="Mike">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Email address</label>
                         <input type="email" class="form-control" placeholder="mike@email.com">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Phone</label>
                         <input type="text" class="form-control" value="001-12321345">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Company</label>
                         <input type="text" class="form-control" value="CreativeTim">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                         <label>Message</label>
                         <input type="text" class="form-control" placeholder="Hello there!">
                       </div>
                     </div>
                   </div>
                   <button type="submit" class="btn btn-primary btn-round float-right" rel="tooltip" data-original-title="Can't wait for your message" data-placement="right">Send text</button>
                 </form>
               </div>
             </div>
           </div>
           <div class="col-md-4 ml-auto">
             <div class="info info-horizontal">
               <div class="icon icon-primary">
                 <i class="tim-icons icon-square-pin"></i>
               </div>
               <div class="description">
                 <h4 class="info-title">Find us at the office</h4>
                 <p> Bld Mihail Kogalniceanu, nr. 8,
                   <br> 7652 Bucharest,
                   <br> Romania
                 </p>
               </div>
             </div>
             <div class="info info-horizontal">
               <div class="icon icon-primary">
                 <i class="tim-icons icon-mobile"></i>
               </div>
               <div class="description">
                 <h4 class="info-title">Give us a ring</h4>
                 <p> Michael Jordan
                   <br> +40 762 321 762
                   <br> Mon - Fri, 8:00-22:00
                 </p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <footer class="footer">
       <div class="container">
         <div class="row">
           <div class="col-md-3">
             <h1 class="title">BLK•</h1>
           </div>
           <div class="col-md-3">
             <ul class="nav">
               <li class="nav-item">
                 <a href="../index.html" class="nav-link">
                   Home
                 </a>
               </li>
               <li class="nav-item">
                 <a href="../examples/landing-page.html" class="nav-link">
                   Landing
                 </a>
               </li>
               <li class="nav-item">
                 <a href="../examples/register-page.html" class="nav-link">
                   Register
                 </a>
               </li>
               <li class="nav-item">
                 <a href="../examples/profile-page.html" class="nav-link">
                   Profile
                 </a>
               </li>
             </ul>
           </div>
           <div class="col-md-3">
             <ul class="nav">
               <li class="nav-item">
                 <a href="https://creative-tim.com/contact-us" class="nav-link">
                   Contact Us
                 </a>
               </li>
               <li class="nav-item">
                 <a href="https://creative-tim.com/about-us" class="nav-link">
                   About Us
                 </a>
               </li>
               <li class="nav-item">
                 <a href="https://creative-tim.com/blog" class="nav-link">
                   Blog
                 </a>
               </li>
               <li class="nav-item">
                 <a href="https://opensource.org/licenses/MIT" class="nav-link">
                   License
                 </a>
               </li>
             </ul>
           </div>
           <div class="col-md-3">
             <h3 class="title">Follow us:</h3>
             <div class="btn-wrapper profile">
               <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                 <i class="fab fa-twitter"></i>
               </a>
               <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                 <i class="fab fa-facebook-square"></i>
               </a>
               <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                 <i class="fab fa-dribbble"></i>
               </a>
             </div>
           </div>
         </div>
       </div>
     </footer>
   </div>
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
   <script src="../assets/demo/demo.js"></script>
   <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
   <script src="../assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
 </body>
 
 </html>
 