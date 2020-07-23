@extends('frontlayout/layout')

@section('header')
    @parent
@endsection


@section('content')
    <div id="page_title">
      <div class="container text-center">
        <div class="panel-heading">Booking</div>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li class="active">Booking</li>
        </ol>
      </div>
    </div>


    <section id="contact_information" class="mb-5">
        <div class="container">
          <div class="row"> 
            <!--Left Form Part-->
            <div class="col-md-8 col-sm-8 col-xs-12"> 
              
              <!--Contact Information-->
              <div class="contact_information_left "> 
                
                <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
                <div class="booking_form">
                  <div class="container-fluid">
                    
                      <form method="post">
                        
                        <h2>Contact Information</h2>
                        <p>This information will be used to contact you about your service</p>
                        <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" id="name" name="name" placeholder="First Name" type="text">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                          <input class="form-control" id="name1" name="name1" placeholder="Last Name" type="text">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" id="email" name="email" placeholder="Email*" type="text">
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                          <input class="form-control" id="tel" name="tel" placeholder="Phone Number*" type="text">
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <!--Service Address-->
                        <h2>Service Address</h2>
                        <p>Where would you like us to clean?</p>
                        <div class="row">
                        <div class="form-group col-md-8 col-sm-8 col-xs-12 ">
                          <input class="form-control" id="address" name="address" placeholder="Address*" type="text">
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12 padding-r">
                          <input class="form-control" id="apt_suite" name="apt_suite" placeholder="Apt/Suite #" type="text">
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                          <input class="form-control" id="city" name="city" placeholder="City*" type="text">
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12 select_box ">
                          <input type="hidden" name="state" id="state">
                          <a class="dropdown-toggle select_options" data-toggle="dropdown" href="#"> <span class="change-text pull-left">Select Service</span> <i class="fa fa-angle-down pull-right"></i> </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Option one</a></li>
                            <li><a href="#">Option two</a></li>
                            <li><a href="#">Option three</a></li>
                          </ul>
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12 padding-r">
                          <input class="form-control" id="postcode" name="postcode" placeholder="Postcode*" type="text">
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <!--Choose Service-->
                        
                        <hr>
                        <!--Select Date Time-->
                        <h2>When would you like us to come?</h2>
                        <p></p>
                        <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group date" id="datetimepicker1">
                            <input type="text" class="form-control">
                            <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                          <div class="input-group date" id="datetimepicker3">
                            <input type="text" class="form-control">
                            <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span> </div>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        
                        <h2>How often?</h2>
                        <p>it's all about matching you with the perfect cleaner for your home.<br>
                          Scheduling is flexible. Cancel or reschedule anytime.</p>
                        <div class="form-group col-md-12 padding-r">
                          <input type="hidden" name="how_opten" id="how_opten">
                          <ul class="how_often">
                            <li><a href="#">1 time service</a></li>
                            <li><a href="#">Every week</a></li>
                            <li><a href="#">Every 2 weeks</a></li>
                            <li><a href="#">Every 4 weeks</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <!--Promo Code-->
                        <div class="row">
                        <div class="form-group col-md-8 col-sm-8 col-xs-12">
                          <input class="form-control" id="Promo_code" name="Promo_code" placeholder="Promo code (optional)" type="text">
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12 padding-r">
                          <button class="btn btn-primary promo_apply" name="Apply" type="submit"> Apply </button>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <!--Choose Your Service-->
                        <h2>Choose Your Service</h2>
                        <p>Enter your card information below. You will be charged after service has been rendered.</p>
                        <div class="row">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" id="card_number" name="card_number" placeholder="card number" type="text">
                        </div>
                        <div class="form-group col-md-3 col-sm-3 col-xs-12 ">
                          <input class="form-control" id="month" name="month" placeholder="MM/YYYY" type="text">
                        </div>
                        <div class="form-group col-md-3 col-sm-3 col-xs-12 padding-r">
                          <input class="form-control" id="cvc" name="cvc" placeholder="CVC" type="text">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="help-block"><img src="{{ asset('frontend/image/cards.png') }}" alt="booking"></p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p class="help-block"><i class="fa fa-lock" aria-hidden="true"></i> <span>Safe and secure 256-BIT<br>
                            SSL encrypted payment.</span></p>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <!--BOOK NOW-->
                        
                        <div class="booking_summary hidden-lg  hidden-md hidden-sm">
                          <h1>Booking Summary</h1>
                          <ul>
                            <li><i class="fa fa-home" aria-hidden="true"></i>AC service</li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>servicing date</li>
                            <li><i class="fa fa-refresh" aria-hidden="true"></i>Every 2 weeks</li>
                          </ul>
                          <div class="price_totle">
                            <div class="subtotal">
                              <div class="heading text-left">SUBTOTAL</div>
                              <div class="price text-right">$119.00</div>
                            </div>
                            <div class="subtotal">
                              <div class="heading text-left">DISCOUNT</div>
                              <div class="price text-right">$17.85</div>
                            </div>
                            <div class="subtotal">
                              <div class="heading text-left">TOTAL:</div>
                              <div class="price text-right">$101.15</div>
                            </div>
                          </div>
                        </div>
                        <p>By clicking the Book Now button you are agreeing to our Terms of Service and Privacy Policy.</p>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <button class="btn btn-primary btn-skin" name="submit" type="submit"> BOOK NOW</button>
                        </div>
                      </form>
                    
                  </div>
                </div>
              </div>
              <!--Contact Information--> 
              
            </div>
            <!--/Left Form Part-->
            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact_information_right text-center">
                <div class="booking_summary">
                  <div class="icon_box_one">
                    <div class="icons"><img src="{{ asset('frontend/image/time3.png') }}" alt="time3"></div>
                    <div class="box_content">
                      <h4>SAVES YOU TIME</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                  </div>
                  <div class="icon_box_one">
                    <div class="icons"><img src="{{ asset('frontend/image/Safety3.png') }}" alt="Safety3"></div>
                    <div class="box_content">
                      <h4>For Your Safety</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                  </div>
                  <div class="icon_box_one">
                    <div class="icons"><img src="{{ asset('frontend/image/best3.png') }}" alt="best3"></div>
                    <div class="box_content">
                      <h4>Best-Rated Professionals</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                  </div>
                  <div class="icon_box_one">
                    <div class="icons"><img src="{{ asset('frontend/image/Equipped3.png') }}" alt="Equipped3"></div>
                    <div class="box_content">
                      <h4>We Are Well Equipped</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                  </div>
                  <div class="icon_box_one">
                    <div class="icons"><img src="{{ asset('frontend/image/touch3.png') }}" alt="touch3"></div>
                    <div class="box_content">
                      <h4>Always In Touch</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                  </div>
                  <div class="icon_box_one">
                    <div class="icons"><img src="{{ asset('frontend/image/cash3.png') }}" alt="cash3"></div>
                    <div class="box_content">
                      <h4>Cash-Free Facility</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                  </div>
                  <div class="box_btn">
                    <button class="btn btn-primary booknow btn-skin" type="submit">LEARN MORE</button>
                  </div>
                </div>
                <div class="booking_summary hidden-xs">
                  <h1>Booking Summary</h1>
                  <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i>Home Cleaning</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Cleaning date</li>
                    <li><i class="fa fa-refresh" aria-hidden="true"></i>Every 2 weeks</li>
                  </ul>
                  <div class="price_totle">
                    <div class="subtotal">
                      <div class="heading text-left">SUBTOTAL</div>
                      <div class="price text-right">$119.00</div>
                    </div>
                    <div class="subtotal">
                      <div class="heading text-left">DISCOUNT</div>
                      <div class="price text-right">$17.85</div>
                    </div>
                    <div class="subtotal">
                      <div class="heading text-left">TOTAL:</div>
                      <div class="price text-right">$101.15</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection
    

        @section('footer')
            @parent
        @endsection