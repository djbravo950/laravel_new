@extends('frontlayout/layout')

@section('header')
    @parent
@endsection


@section('content')

    <div id="page_title">
      <div class="container text-center">
        <div class="panel-heading">Contact</div>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li class="active">Contact</li>
        </ol>
      </div>
    </div>


    <section>
        <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="booking_form">
                  <div class="container-fluid">
                    
                      <form method="post">
                        <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" id="name" name="name" placeholder="Full Name" type="text">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" id="Email" name="Email" placeholder="Email" type="text">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" id="Subject" name="Subject" placeholder="Subject*" type="text">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" id="Phone_number" name="Phone_number" placeholder="Phone Number" type="text">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                          <div class="input-group">
                            <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                          </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <button class="btn btn-primary btn-skin custom-bton" name="submit" type="submit"> Send Message</button>
                        </div>
                        </div>
                      </form>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="about_info about-info-2">
                  <h2 class="title_block"><span>Our</span> Contacts</h2>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem Ipsum is simply dummy</p>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i> infor@example.com</p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i> +91 9243434343</p>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=pjsoft&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
    </section>
    @endsection

@section('footer')
    @parent
@endsection
