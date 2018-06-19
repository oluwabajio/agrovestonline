@extends('layouts.app')

@section('content')


<main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="background-image:url(assets/img/background.jpg);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;">
          <div class="container">
            <h1 class="display-3" style="color:white">About Us!</h1>
            <p style="color:white; font-size: 20px"><b>We are Nigeria's 1st online agricultural consultancy services that provides answers to questions concerning setting up an agricultural business. We are a team of expert and experienced farmers who have been in the business for so Long.</b></p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Ask Us Questions &raquo;</a></p>
          </div>
        </div>
  
        <div class="container" style="margin-top: 80px">
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <h2>Our Thoughts</h2>
              <p>Agriculture is the future of Nigeria, it is the Next oil well and those who invest in it early would benefit greatly for it. This is why we have set up this platform to make it easier for you to go into agriculture </p>
              {{-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> --}}
               <br>
            </div>
            <div class="col-md-4">
              <h2>Focus Areas</h2>
              <p>We answer all kinds of agricultural questions ranging from setting up a farmland for crops, Animal Farming, Poultry, Aquaculture or Fish Farming, Organic Farming and other General Agricultural consultancy services </p>
              {{-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> --}}
              <br>
            </div>
            <div class="col-md-4">
              <h2>Contact Us</h2>
              <p><b>Email:   </b>admin@agrovestonline.com</p>
              <p><b>Phone:   </b>08169242925</p>
              <p><b>Address: </b>Nigeria</p>
            </div>
          </div>
  
          <hr>
  
        </div> <!-- /container -->
  
      </main>
  

@endsection('content')
 <!-- footer section start -->
