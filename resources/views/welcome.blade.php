@extends('layouts.app')

@section('content')


 <!-- Page Content -->

 <div class="container">

    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-lg-8">
            <img class="img-fluid rounded" src="{{ asset('assets/img/agric2.jpg') }}" alt="">
              </div>
                  <!-- /.col-lg-8 -->
                  <div class="col-lg-4">
                      
                    <h1>Agricultural Advice at your finger tips</h1>
                    <p>Get quality answers to your agricultural questions in less than 10 minutes.</p>
                    <br><br>
                    <a class="btn btn-primary btn-lg" style=" background-color: #008000 !important; border-color:#008000 !important; width: 100%;" href="{{url('user')}}">Ask Questions Now</a>
                  </div>
                  <!-- /.col-md-4 -->
              </div><br>
              <hr>
        </div>
    </div>
    </div>
 
<!-- Content Row -->
<div class="container">
    <div class="row">
          <div class="col-md-12">
            <h3 class="text-center" style="margin-top:40px; color:#000; font-weight: 6000;">Welcome To Agrovest Online Consultancy Service</h3>
          </div>
          <div class="col-sm-2">

          </div>
          <div class="col-sm-8">
              <p class="text-center lead" data-aos="zoom-up" data-aos-once="true" style="margin-bottom:38px">
                  We are Nigeria Number 1 Online Agricultural Consultant Where You can Get all Your Agricultural Questions answered By top Professionals and Experts.</p>
          </div>
      </div>
</div>


  <div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                  <div class="card-body">
                      <img class="img-fluid rounded" src="{{ asset('assets/img/about/fish.jpg') }}" alt="">
                      <h3 class="card-title" style="margin-top:18px">Aquaculture</h3>
                      <p class="card-text">Are you Planning to Start up a Fish Farming Business, Let us Walk you Through how to build a successful Fish Farming Business In Nigeria and Africa</p>
                  </div>
                  <div class="card-footer">
                      <a href="{{url('user')}}" class="btn btn-primary" style=" background-color: #008000 !important; border-color:#008000 !important; width: 100%;">Ask Your Questions</a>
                  </div>
            </div>
        </div>

        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                  <div class="card-body">
                    <img class="img-fluid rounded" src="{{ asset('assets/img/about/chicken.jpg') }}" alt="">
                    <h3 class="card-title" style="margin-top:18px">Poultry</h3>
                    <p class="card-text">We Have Expert and Successful Poultry Farmers who would put you through how to be successful at poultry Farming, Things You Need to start up and how to manage the Business</p>
                  </div>
                <div class="card-footer">
                    <a href="{{url('user')}}" class="btn btn-primary" style=" background-color: #008000 !important; border-color:#008000 !important; width: 100%;">Ask Your Questions</a>
                </div>
            </div>
        </div>

        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <img class="img-fluid rounded" src="{{ asset('assets/img/about/crops.jpg') }}" alt="">
                    <h3 class="card-title" style="margin-top:18px">Crops</h3>
                    <p class="card-text">As us any Question about starting out as a crop farmer in Nigeria and we would provide you accurate answers, mentor you and teach you all about setting up as a successful crop farmer</p>
                </div>
                <div class="card-footer">
                    <a href="{{url('user')}}" class="btn btn-primary" style=" background-color: #008000 !important; border-color:#008000 !important; width: 100%;">Ask Your Questions</a>
                </div>
            </div>
        </div>

    </div>
    <br>

      <!-- /.col-md-4 -->
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
          <div class="card h-100">
              <div class="card-body">
                  <img class="img-fluid rounded" src="{{ asset('assets/img/about/organic.jpg') }}" alt="">
                  <h3 class="card-title" style="margin-top:18px">Organic Farming</h3>
                  <p class="card-text">We have professionals and experts organic farmers in Nigeria that would provide answers to all questions you may have about organic agriculturan farming and practices in Nigeria.</p>
              </div>
              <div class="card-footer">
                    <a href="{{url('user')}}" class="btn btn-primary" style=" background-color: #008000 !important; border-color:#008000 !important; width: 100%;">Ask Your Questions</a>
              </div>
          </div>
      </div>
    </div>
    <!-- /.col-md-4 -->
</div>
<!-- /.row -->


{{-- Ask Experts Agric --}}
<section class="bg-light" style="margin-top:50px">
      <div class="container" style="padding-top:30px; padding-bottom:30px;">
        <div class="row">
          <div class="col-md-7 about-text-inner">
            <h2  style="font-size:36px; font-weight: 600; margin-top:30px;">Ask Experts Agricultural Questions Online</h2>
            <p class="" style="line-height: 1.8em;">
                Agrovest Expert Consultants are able to give you the best precise Agricultural Advice for all kinds of
                agricultural businesses you want to start or invest in.
                We have expert professionals in different sectors of Agriculture including Fish Farming, Crops Farming, Organic Farming,
                Animal Husbandry, Agricultural Investment, etc.
                We answer questions in different areas and forms as long as it is related to agriculture, you can consult us about 
                starting a poultry farm, getting a fertile land for your crops, Getting fertilizers, building a pen house, irrigation,
                purchasing agricultural equipments and machines.
              </p>
          </div>
          <div class="col-md-5" style="margin-top: 30px;">
            {{-- <iframe width="460" height="315" src="https://www.youtube.com/embed/5oy_WbfTBUw" frameborder="0" allowfullscreen></iframe> --}}
            <img class="img-fluid rounded" src="{{ asset('assets/img/agric3.jpg') }}" alt="">
        </div>
        </div>
      </div>

  </section>


<!-- Agric Business Expo -->
<section>
    <div class="container" style="padding-top:40px; padding-bottom:30px;">
      <div class="row">
        <div class="col-md-5" style="margin-top: 30px;">
            {{-- <iframe width="460" height="315" src="https://www.youtube.com/embed/5oy_WbfTBUw" frameborder="0" allowfullscreen></iframe> --}}
            <img class="img-fluid rounded" src="{{ asset('assets/img/agric3.jpg') }}" alt="">
        </div>
        <div class="col-md-7 about-text-inner">
          <h2  style="font-size:36px; font-weight: 600; margin-top:30px;">Agric Business Expo 2018</h2>
          <p class="" style="line-height: 1.8em;">
             Agric Business Expo is a yearly Agricultural conference organized by Agrovest Online Consultancy, This is one 
             of the largest gathering of agricultural Experts, Enthusiasts and other stake holders. This year's Edition features various important
              agricultural topics including Food Security, Investing in Agriculture in Nigeria, Government Inputs in Agriculture, etc.
              Top Professionals would be invited to give talks on how existing farmers can maximize their profits while running their businesses.
              Apply Below
            </p><br>
            <a href="{{url('agric-business-expo')}}" class="btn btn-primary" style=" background-color: #008000 !important; border-color:#008000 !important; width: 100%;">Click Here To Apply For Agric Business Expo 2018</a>
           
        </div>
       
      </div>
    </div>

</section>

  <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/logos/envato.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/logos/designmodo.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/logos/themeforest.jpg') }}" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/logos/creative-market.jpg') }}" alt="">
            </a>
          </div>
        </div>
      </div>
    </section> 


 <!-- footer section start -->


@endsection('content')

