<style>
   h1 span {
    color: #5383d3;}
.logo{
  
  color: #ffffff;
  font: normal 36px 'Cookie', cursive;
  
  }
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a href="/">
        <div class="logo" rel="tooltip" title="This Is CSAT" data-placement="bottom">
          <h1>C<span>SAT</span></h1>
        </div>
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
