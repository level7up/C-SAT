@extends('layouts.app')

@section('content')
<body class="index-page">
  <div class="wrapper">
      <div class="page-header header-filter">
          <div class="squares square1"></div>
          <div class="squares square2"></div>
          <div class="squares square3"></div>
          <div class="squares square4"></div>
          <div class="squares square5"></div>
          <div class="squares square6"></div>
          <div class="squares square7"></div>
          <div class="container">
              <div class="content-center">
                  <div class="row row-grid justify-content-between align-items-center text-left">
                    <div class="col-lg-6 col-md-6">
                      <h1 class="text-white">Say Hello to our new 
                        <br/>
                        <span class="text-white">CSAT</span>
                      </h1>
                      <p class="text-white mb-3">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel...</p>
                      
                      <div class="btn-wrapper">
                        <div class="button-container">
                          <button href="javascript:void(0)" class="btn btn-icon btn-simple btn-round btn-neutral">
                            <i class="fab fa-twitter"></i>
                          </button>
                          <button href="javascript:void(0)" class="btn btn-icon btn-simple btn-round btn-neutral">
                            <i class="fab fa-dribbble"></i>
                          </button>
                          <button href="javascript:void(0)" class="btn btn-icon btn-simple btn-round btn-neutral">
                            <i class="fab fa-facebook"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                      <img src="imgs/3d.gif" alt="Circle image" class="img-fluid">
                    </div>
                  </div>
                </div>
                
          </div>
        </div>
        <section class="section section-lg">
            
            <div class="col-md-12">
              <div class="card card-chart card-plain">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-6 text-left">
                      <hr class="line-primary">
                      <h5 class="card-category">Total Investments</h5>
                      <h2 class="card-title">Performance</h2>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="chartBig"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="Creators" class="section section-lg section-coins">
              <img src="../assets/img/path3.png" class="path">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <hr class="line-info">
                    <h1>Who We Are.....
                      <span class="text-info">The Founder</span>
                    </h1>
                  </div>
                </div>
                <div class="row">
                  <div  class="col-lg-15 col-md-15 ml-auto mr-auto">
                    <div class="card card-coin card-plain">
                      <div class="card-header">
                        <img src="imgs/person3.jpg" class="img-center img-fluid2">
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <h4 class="text-uppercase">Abdulalim Mohamed</h4>
                            <span>Web Developer</span>
                            <hr class="line-primary">
                          </div>
                        </div>
                        <div class="row">
                          <ul class="list-group">
                            <li class="list-group-item">CSAT Founder</li>
                            <li class="list-group-item">Front-End Developer</li>
                            <li class="list-group-item">Back-End Developer</li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-footer text-left">
                        <div class="p-4">
                            <a href="#"><i class="fab fa-facebook"></i> Follow us on Facebook</a>
                          </div>
                          <div class="p-4">
                            <a href="#"><i class="fab fa-twitter"></i> Follow us on twitter</a>
                          </div>
                          <div class="p-4">
                            <a href="#"><i class="fab fa-instagram"> </i> Follow us on Instagram</a>
                          </div>
                      </div>
                    </div>
                  </div>

                  
                </div>
              </div>
              
            </section>
            

        
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  </div>
  

@endsection
