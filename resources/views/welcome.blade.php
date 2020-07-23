@extends('frontlayout/layout')

@section('header')
    @parent
@endsection

@section('content')

      <section id="banner" class="home-one">
        <div class="container text-center parallax-section">
          <div class="row text-center">
            <div class="col-md-12">
              <h1 class="panel-heading pan-heading">Ready to Live Smarter?</h1>
              <p class="caption">Book Expert home cleaners and handymen at a moment's notice. just pick a<br>
                time and we'll do the rest</p>
              <form class="form-inline book-now-home">
                <div class="form-group">
                  <div class="input-group">
                    <div class="dropdown category-dropdown text-left"> <a data-toggle="dropdown" href="#"><i class="fa fa-list" aria-hidden="true"></i> <span class="change-text">Select Service</span> <i class="fa fa-caret-down pull-right" aria-hidden="true"></i> </a>
                      <ul class="dropdown-menu category-change">
                        <li><a href="/ac">AC repair</a></li>
                        <li><a href="/ac">servicing Fridge</a></li>
                        <li><a href="/ac">Washing machine service</a></li>
                        <li><a href="/ac">Electrical services</a></li>
                        <li><a href="/ac">Salon at Home</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group location-code">
                    <input type="text" class="form-control zipcode" id="zipcode" placeholder="Pincode">
                  </div>
                </div>
                <a type="submit" class="btn btn-primary booknow btn-skin" href="/booking">Book now</a>
              </form>
            </div>
          </div>
        </div>
      </section>


      <section id="howitwork">
        <div class="container text-center">
          <h1 class="panel-heading">How it works</h1>
          <div class="row pl-5">
            <div class="col-md-3 col-xs-offset-0 step-one"> <img src="{{asset('frontend/image/Book.png')}}" alt="Book" class="img-circle htw">
              <h4>Book</h4>
              <p>Select the date and time like<br>
                your perofessional to show up</p>
            </div>
            <div class="col-md-1 hidden-xs hidden-sm"> </div>
            <div class="col-md-3 step-two"> <img src="{{asset('frontend/image/Schedule.jpg')}}" alt="Schedule" class="img-circle">
              <h4>Schedule</h4>
              <p>Certified Taskers comes over<br>
                and done your task</p>
            </div>
            <div class="col-md-1 hidden-xs hidden-sm"> </div>
            <div class="col-md-3 step-three"> <img src="{{asset('frontend/image/Relax.jpg')}}" alt="Relax" class="img-circle">
              <h4>Relax</h4>
              <p>your task is completed to your<br>
                satisfaction - guranteed</p>
            </div>
          </div>
        </div>
      </section>

      <section id="services">
        <div class="container text-center">
          <h1 class="panel-heading">Our services</h1>
          <ul class="services-list">
            <li><a href="/ac"><img src="{{asset('frontend/image/vehicle.png')}}" alt="cleaning"><br>
                AC repair</a></li>
            <li><a href="/ac"><img src="{{asset('frontend/image/painting.png')}}" alt="electrical"><br>
                servicing
                Fridge</a></li>
            <li><a href="#"><img src="{{asset('frontend/image/appliances.png')}}" alt="plumbing"><br>
                Washing machine service</a></li>
            <li><a href="/ac"><img src="{{asset('frontend/image/electrical.png')}}" alt="appliances"><br>
                Electrical services</a></li>
            <li><a href="/ac"><img src="{{asset('frontend/image/cleaning.png')}}" alt="carpentry"><br>
                Salon at Home</a></li>
          </ul>
        </div>
      </section>


      <section id="trust-security">
        <div class="container text-center">
          <h1 class="panel-heading pan-heading">Your Trust and Security</h1>
          <div class="row text-left">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="icon_box_one">
                <div class="icons"><img src="{{asset('frontend/image/time.png')}}" alt="SAVES"></div>
                <div class="box_content">
                  <h4>SAVES YOU TIME</h4>
                  <p>We helps you live smarter, giving you time to focus on what's most important.</p>
                  <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a> </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="icon_box_one">
                <div class="icons"><img src="{{asset('frontend/image/Safety.png')}}" alt="Safety"></div>
                <div class="box_content">
                  <h4>For Your Safety</h4>
                  <p>All of our Helpers undergo rigorous identity checks and personal interviews. Your safety is even our concern too.</p>
                  <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a> </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="icon_box_one">
                <div class="icons"><img src="{{asset('frontend/image/best.png')}}" alt="Best"></div>
                <div class="box_content">
                  <h4>Best-Rated Professionals</h4>
                  <p>Our experienced taskers perform their tasks with dedication and perfection. We appreciate your reviews about the service.</p>
                  <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a> </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="icon_box_one">
                <div class="icons"><img src="{{asset('frontend/image/Equipped.png')}}" alt="Equipped"></div>
                <div class="box_content">
                  <h4>We Are Well Equipped</h4>
                  <p>Let us know if you have any specific equirement, otherwise our guys carry their own supplies.</p>
                  <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a> </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="icon_box_one">
                <div class="icons"><img src="{{asset('frontend/image/touch.png')}}" alt="Always"></div>
                <div class="box_content">
                  <h4>Always In Touch</h4>
                  <p>Book your service online on one tap, keep a track of your service status and also keep in touch with your Helper.</p>
                  <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a> </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="icon_box_one">
                <div class="icons"><img src="{{asset('frontend/image/cash.png')}}" alt="cash"></div>
                <div class="box_content">
                  <h4>Cash-Free Facility</h4>
                  <p>Pay through secure online mode only after your job is done.</p>
                  <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a> </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="numbers">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6"> 
              <!--counter box-->
              <div class="counter_box text-center">
                <div class="counter_icon"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>
                <div class="counter_number counter"><span class="stat-count">100</span>%</div>
                <h4 class="counter_name">Quality</h4>
              </div>
              <!--counter box end--> 
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6"> 
              <!--counter box-->
              <div class="counter_box text-center">
                <div class="counter_icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <div class="counter_number counter"><span class="stat-count">2500</span>+</div>
                <h4 class="counter_name">People Working</h4>
              </div>
              <!--counter box end--> 
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6"> 
              <!--counter box-->
              <div class="counter_box text-center">
                <div class="counter_icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></div>
                <div class="counter_number counter"><span class="stat-count">8</span> Years</div>
                <h4 class="counter_name">Years Experience</h4>
              </div>
              <!--counter box end--> 
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6"> 
              <!--counter box-->
              <div class="counter_box text-center">
                <div class="counter_icon"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
                <div class="counter_number counter"><span class="stat-count">900</span>+</div>
                <h4 class="counter_name">Happy Smiles</h4>
              </div>
              <!--counter box end--> 
            </div>
          </div>
        </div>
      </section>

      <section id="features">
        <div class="container text-center features-section">
          <div class="row text-left">
            <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <img src="{{asset('frontend/image/qualit_work.png')}}" alt="Meet the Hire Pros" class="top-skid"> </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <h2>Meet the Hire Pros</h2>
              <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                <div class="box_content">
                  <h4>Lorem Ipsum is simply dummy text</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
              </div>
              <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                <div class="box_content">
                  <h4>Lorem Ipsum is simply dummy text</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                </div>
              </div>
              <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                <div class="box_content">
                  <h4>Lorem Ipsum is simply dummy text</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
                </div>
              </div>
              <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                <div class="box_content">
                  <h4>Lorem Ipsum is simply dummy text</h4>
                  <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>

        <div class="slideshow-container container">

            <h1 class="panel-heading text-center testi">Testimonails</h1>

            <div class="owl-carousel owl-theme">
                
                @foreach($sliders as $key=>$slider)
                <div class="item">
                  <div class="avatar"><img class="img-circle" src="{{ asset('uploads/slider/'.$slider->image) }}" alt="Client 1"></div>
                  <h3>{{ $slider->title }}</h3>
                  <p>{{ $slider->sub_title }}</p>
                </div>
              @endforeach  
            </div>
        </div>
      </section>


    <section id="downlod_app">
        <div class="container text-center">
          <div class="row text-left">
            <div class="col-md-5 col-sm-12 col-xs-12 responsive-look"> <img src="{{asset('frontend/image/mobile.png')}}" alt="DOWNLOAD APP NOW"> </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
              <div class="downlod_text text-center">
                <h2><strong>DOWNLOAD</strong> APP NOW</h2>
                <p>Slect your device platform and get<br>
                  download start</p>
                <button type="button" class="btn btn-primary btn-outline"><i class="fa fa-apple" aria-hidden="true"></i> APPLE USER</button>
                <button type="button" class="btn btn-primary btn-outline"><i class="fa fa-android" aria-hidden="true"></i> ANDROAID USER</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="trusted">
        <div class="container text-center">
          <div class="row text-left">
            <div class="col-md-2 col-sm-3 col-xs-12">
              <h3 class="panel-heading">TRUSTED BY</h3>
            </div>
            <div class="col-md-10 col-sm-12 col-xs-12">
               
            </div>
          </div>
        </div>
      </section>

      <section id="call-to-action" class="mt-5">
        <div class="container free_consultation">
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 text-left">
              <h2>Wanted a Free Consultation?</h2>
              <p>we are always ready to welcome you!</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 m-text-center text-right"> <a class="btn btn-primary btn-outline">Schedule Cleaning </a> </div>
          </div>
        </div>
      </section>

@endsection

@section('footer')
    @parent
@endsection