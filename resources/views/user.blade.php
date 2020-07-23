@extends('frontlayout/layout')

@section('header')
    @parent
@endsection




      {{-- <section class="no-pad-top">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="{{asset('frontend/image/logo.jpeg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Service
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">AC repair</a>
                        <a class="dropdown-item" href="#">servicing Fridge</a>
                        <a class="dropdown-item" href="#">Washing machine servicee</a>
                        <a class="dropdown-item" href="#">Electrical services</a>
                        <a class="dropdown-item" href="#">Salon at Home</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a href=""><i class="fa fa-phone" aria-hidden="true"></i> +91 9999999999</a>
                    <a href="" class="btn btn-primary btn-skin text-white ml-2">Get Free Quote</a> 
                </span>
                </div>
            </nav>
          </div>
      </section> --}}

      @section('content')

      <div id="page_title">
        <div class="container text-center">
          <div class="panel-heading">About Us</div>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li class="active">About Us</li>
          </ol>
        </div>
      </div>

      <div id="about">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 about_l"> <img src="{{ asset('frontend/image/salon.jpg') }}" alt="desk"> </div>
            <div class="col-md-6 col-sm-6">
              <p>We are a creative team, provide you a great Cleaning WordPress theme. A long time working in this field brings us enough experience to serve every customer, even the hardest one. That is the reason why we are acclaimed by all our valuable customers. "If you have passion and you are hardworking", you can create a masterpiece, and we think we have that. We are trying everyday to bring our dear customers, dear partners the best thing you have ever had, believe us, your visitors will be immersed in a remarkable browsing experience.</p>
              <p>We base on the latest and most modern technology to create and provide you a perfect  blog theme WordPress. Cleaning is also compatible with many utility tools which help you to use Cleaning WordPress theme easily. Some of them are: </p>
              <ul class="list-star">
                <li>Full responsive &amp; Retina Ready</li>
                <li>Retina Compatible</li>
                <li>A Range of Layout</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <section class="team-area">
        <div class="container">
          <h1 class="panel-heading text-center">Our Team</h1>
          <div class="row"> 
            <!--Start single team member-->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-team-member text-center">
                <div class="img-holder"> <img src="{{asset('frontend/image/Team1.png')}}" class="img-circle" alt="Awesome Image"> </div>
                <div class="text-holder text-center">
                  <h3>ADAM FINLAY</h3>
                  <p>Expert Cleaner</p>
                  <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--End single team member--> 
            <!--Start single team member-->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-team-member text-center">
                <div class="img-holder"> <img src="{{asset('frontend/image/Team2.png')}}" class="img-circle" alt="Awesome Image"> </div>
                <div class="text-holder text-center">
                  <h3>ADAM FINLAY</h3>
                  <p>Expert Cleaner</p>
                  <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--End single team member--> 
            <!--Start single team member-->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-team-member text-center">
                <div class="img-holder"> <img src="{{asset('frontend/image/Team3.png')}}" class="img-circle" alt="Awesome Image"> </div>
                <div class="text-holder text-center">
                  <h3>ADAM FINLAY</h3>
                  <p>Expert Cleaner</p>
                  <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--End single team member--> 
            <!--Start single team member-->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-team-member text-center">
                <div class="img-holder"> <img src="{{asset('frontend/image/Team4.png')}}" class="img-circle" alt="Awesome Image"> </div>
                <div class="text-holder text-center">
                  <h3>ADAM FINLAY</h3>
                  <p>Expert Cleaner</p>
                  <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--End single team member--> 
          </div>
        </div>
      </section>


      <section id="service_provider">
        <div class="container text-center">
          <h1 class="panel-heading pan-heading">Worldwide largest home service provider</h1>
          <div class="row">
            <div class="col-md-12"> 
              <!--counter box-->
              <div class="counter_box">
                <div class="counter_number_right">
                  <div class="counter_number counter"><span class="stat-count">20000</span>+</div>
                  <h4 class="counter_name">HAPPY CUSTOMERS</h4>
                </div>
              </div>
              <!--counter box end--> 
              <!--counter box-->
              <div class="counter_box">
                <div class="counter_number_right">
                  <div class="counter_number counter"><span class="stat-count">10000</span>+</div>
                  <h4 class="counter_name">SERVICE PROVIDERS</h4>
                </div>
              </div>
              <!--counter box end--> 
            </div>
          </div>
        </div>
      </section>
      @endsection

@section('footer')
    @parent
@endsection