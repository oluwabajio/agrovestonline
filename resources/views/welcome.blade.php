@extends('layouts.app')

@section('content')


 <!-- Page Content -->
 <div class="container">

    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-lg-8">
            <img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
              </div>
                  <!-- /.col-lg-8 -->
                  <div class="col-lg-4">
                    <h1>Agricultural Advice at your finger tips</h1>
                    <p>Get quality answers to your agricultural questions in less than 10 minutes.</p>
                    <a class="btn btn-primary btn-lg" href="questions">Ask Questions Now</a>
                  </div>
                  <!-- /.col-md-4 -->
              </div>
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
                      <a href="#" class="btn btn-primary" style="width:100%">>Ask Your Question</a>
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
                    <a href="#" class="btn btn-primary" style="width:100%">Ask Your Question</a>
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
                    <a href="#" class="btn btn-primary" style="width:100%">>Ask Your Question</a>
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
                    <a href="#" class="btn btn-primary" style="width:100%">>Ask Your Question</a>
              </div>
          </div>
      </div>
    </div>
    <!-- /.col-md-4 -->
</div>
<!-- /.row -->



<!-- Team -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h3 class="text-center" style="margin-top:40px; color:#000; font-weight: 6000;">The AgriBusiness Expo 2018</h3>
            </div>
            <div class="col-sm-2">
  
            </div>
            <div class="col-sm-8">
                <p class="text-center lead" data-aos="zoom-up" data-aos-once="true" style="margin-bottom:38px">
                    We are Nigeria Number 1 Online Agricultural Consultant Where You can Get all Your Agricultural Questions answered By top Professionals and Experts.</p>
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

