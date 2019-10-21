<!-- The content of your page would go here. -->

<footer class="footer-distributed">

<div class="footer-left">

  <h3>C<span>SAT</span></h3>
  @if (Auth::user())
  <p class="footer-links">
    <a href="/">Home</a> 
    ·
    <a href="/profile">{{ Auth::user()->name }}</a>
    ·
    <a href="/home">Dashboard</a>
    ·
    <a href="#Creatros">Creators</a>
    ·
    @else
    <a href="#">Log in</a>
    .
    <a href="#">Register</a>
    @endif
  </p>
  

  <p class="footer-company-name">Csat &copy; 2019</p>
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>21 Revolution Street</span> Cairo, Egypt</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+20 100 287 4060</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@company.com">support@Csat.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About CSAT</span>
  We hope you find what you have been looking for.
  </p>

  <div class="footer-icons">

    <!-- <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a> -->
    <a href="#"><i class="fab fa-github"></i></a>

  </div>

</div>

</footer>
