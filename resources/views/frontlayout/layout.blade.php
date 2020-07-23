<!doctype html>
<html lang="en">
    @section('header')
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <title>Hello, world!</title>
  </head>
<body>
    <section class="no-pad-top">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="/"><img src="{{ asset('frontend/image/logo.jpeg') }}" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/user">About</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="/service" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Service
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/ac">AC repair</a>
                      <a class="dropdown-item" href="/ac">servicing Fridge</a>
                      <a class="dropdown-item" href="/ac">Washing machine servicee</a>
                      <a class="dropdown-item" href="/ac">Electrical services</a>
                      <a class="dropdown-item" href="/ac">Salon at Home</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact">Contact</a>
                  </li>
              </ul>
              <span class="navbar-text">
                  <a href=""><i class="fa fa-phone" aria-hidden="true"></i> +91 9999999999</a>
                  <a href="" class="btn btn-primary btn-skin text-white ml-2">Get Free Quote</a> 
              </span>
              </div>
          </nav>
        </div>
    </section>
    @show

    @yield('content')


    @section('footer')

    <footer>
        <div class="container-fluid footerbg">
          <div class="container">
            <div class="row">
              <div class="col-md-3"> <a href="#" class="footer-logo"> <img class="logo-dark" src="{{ asset('frontend/image/logo.jpeg') }}" alt="Hire A Helper"> </a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="about_info">
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem Ipsum is simply dummy</p>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i> infor@example.com</p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i> +919999999999</p>
                </div>
              </div>
              <div class="col-md-3">
                <h4>Services</h4>
                <ul>
                  <li><a href="ac"><i class="fa fa-caret-right" aria-hidden="true"></i>AC repair</a></li>
                  <li><a href="ac"><i class="fa fa-caret-right" aria-hidden="true"></i>servicing Fridge</a></li>
                  <li><a href="ac"><i class="fa fa-caret-right" aria-hidden="true"></i>Washing machine service</a></li>
                  <li><a href="ac"><i class="fa fa-caret-right" aria-hidden="true"></i>Electrical services</a></li>
                  <li><a href="ac"><i class="fa fa-caret-right" aria-hidden="true"></i>Salon at Home</a></li>
                </ul>
                
              </div>
              <div class="col-md-2">
                <h4>About Us</h4>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/user">About us</a></li>
                  <li><a href="/service">Services</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h4>Singn up Newsletter</h4>
                <form action="#" method="post" class="newsletter">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Email Address">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                    </span> </div>
                  <!-- /input-group -->
                </form>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
              </div>
            </div>
            <div class="top_awro pull-right" id="back-to-top" data-original-title="" title="" style="display: block;"><i class="fa fa-chevron-up" aria-hidden="true"></i> </div>
          </div>
        </div>
        
        <!--Boottom Footer-->
        <div class="container-fluid bottom-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p class="copyright pull-left">© We4uindia 2020 All Right Reserved</p>
                <ul class="footer-scoails pull-right">
                  <li><a href="https://www.facebook.com/search/top?q=we4uindia"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
    </script>
    
  </body>
</html>

@show