@extends('frontlayout/layout')

@section('header')
    @parent
@endsection


@section('content')

    <div id="page_title">
      <div class="container text-center">
        <div class="panel-heading">Service</div>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li class="active">Service</li>
        </ol>
      </div>
    </div>


    <section id="service_page">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"><div class="box-shad"><a href="service_detail.html"><img src="{{ asset('frontend/image/ac-repair.png')}}" class="img-circle htw" alt="cleaning"></a>
            <h4><a href="service_detail.html">AC repair</a></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry.</p></div> 
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 srevice_img active"><div class="box-shad"> <a href="service_detail.html"><img src="{{ asset('frontend/image/fridge-repair.jpg')}}" class="img-circle htw" alt="electrical"></a>
            <h4><a href="service_detail.html">servicing Fridge</a></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry.</p></div> 
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"><div class="box-shad"><a href="service_detail.html"> <img src="{{ asset('frontend/image/washing-machine-repair.jpg')}}" class="img-circle htw" alt="plumbing"></a>
            <h4><a href="service_detail.html">Washing machine service</a></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry.</p></div> 
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"><div class="box-shad"> <a href="service_detail.html"><img src="{{ asset('frontend/image/electrical-service.jpg')}}" class="img-circle htw" alt="appliances"></a>
            <h4><a href="service_detail.html">Electrical services</a></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry.</p></div> 
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"><div class="box-shad"><a href="service_detail.html"> <img src="{{ asset('frontend/image/salon-home.jpeg')}}" class="img-circle htw" alt="carpentry"></a>
            <h4><a href="service_detail.html">Salon at Home</a></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry.</p></div> 
          </div>
        </div>
      </div>
    </section>
    @endsection
@section('footer')
    @parent
@endsection
