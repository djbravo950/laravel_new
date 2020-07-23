@extends('frontlayout/layout')

@section('header')
    @parent
@endsection


@section('content')

    <div id="page_title">
      <div class="container text-center">
        <div class="panel-heading">AC Service</div>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li class="active">Service</li>
          <li class="active">Ac Service</li>
        </ol>
      </div>
    </div>


    <section id="service_banner">
        <div class="container text-center service_banner_layer">
          <div class="banner_content">
            <div class="row text-left">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <h1 class="service-heading">Book a AC Service Today</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                <h2>Why choose WE4U?</h2>
                <ul class="featurs_list">
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
                  <li><i class="fa fa-check-square-o" aria-hidden="true"></i> High end cleaning machinery</li>
                </ul>
                <a class="btn btn-warning btn-booknow" href="booking"> Book now </a> </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="quick_contact">
                  <p>NEED AN AC EXPERT FOR</p>
                  <form class="form-horizontal">
                    <button type="button" class="btn btn-light d-block mb-3">AC Service</button>
                    <button type="button" class="btn btn-light d-block mb-3">AC Installation</button>
                    <button type="button" class="btn btn-light d-block">AC not cooling/Repair</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ac-main-section">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 do-you-ac">
                    <div class="ac-about"><h2>All About AC Repair</h2></div>
                    <div class="ac-about-bottom">
                        <h3 class="">Services offered in AC Service and Repair</h3>
                        <ul class="after-ac">
                            <li class="">
                                <p class="">
                                    Installing an AC: Choose this service for AC installation at your place. The professional will ensure that the AC is running properly as gas pressure and performance of the appliance will be checked post AC installation.
                                </p>
                            </li>
                            <li class="">
                                <p class="">Uninstalling an existing AC: Select this option when you need professionals to dismount an AC. The appliance will be checked before the AC uninstallation.</p>
                            </li>
                            <li class="">
                                <p class="">
                                    Wet services: This service includes an end to end cleaning of your AC (which is not faulty). Cooling coils, condenser coils, outer panel, drain and filet pipes will be extensively cleaned and washed. However, high-pressure jet
                                    pumps will not be used for the cleaning purpose. Tick this service when you want your AC to be properly cleaned.
                                </p>
                            </li>
                            <li class="">
                                <p class="">
                                    Repairs: Choose this option for diagnosis and repair of your AC. The professional will check the AC upon visitation and provide with quotation depending on the condition of the appliance.
                                </p>
                            </li>
                        </ul>

                        <ul class="after-ac">
                            <li class="">
                                <p class="">Customer Protection: Unlike any other service provider, Urban Company provides a customer protection of Rs. 10,000 against damages.</p>
                            </li>
                            <li class="">
                                <p class="">Verified Professionals: All the professionals on board with Urban Company are taken through a screening process to check for their expertise.</p>
                            </li>
                            <li class="">
                                <p class="">Service Warranty: We at Urban Company take full ownership of our services and hence, this is the reason that we provide a service warranty of 30 days.</p>
                            </li>
                            <li class=""><p class="">Customer Centric: All our services are curated keeping our customers in mind and AC repair service is no exception.</p></li>
                            <li class="">
                                <p class="">Standardized pricing: To save our customers from unfair pricing, we have come up with the idea of standardized pricing with the rate card shared on both our website and App.</p>
                            </li>
                            <li class="">
                                <p class="">Online payment: Now pay hassle free post your service through our online portal. You will receive a link via SMS and/or email which will take you to the online payment portal.</p>
                            </li>
                        </ul>
                        
                        
                    </div>
                   
                    
                  </div>
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-8 do-you-ac do-you-2">
                    <div class="">
                        <p class="">Are you a professional looking for customers?</p>
                        <a target="_blank" rel="noopener" href=""><span class="">join now</span></a>
                    </div>
                  </div>
                  <div class="col-md-4"></div>
              </div>
          </div>
      </section>
      @endsection

@section('footer')
    @parent
@endsection
