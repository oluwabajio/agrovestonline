@extends('dashboard.layouts.nav2')

@section('content2')

  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Select Your Package</h1>
        <p class="lead">Are you confused about starting that agricultural endeavour or idea because you have little information about it, we are here for you as you can get all your questions answered by our expert agriculuralist</p>
      </div>
  
      <div class="container">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Basic</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">#500</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>2 Questions</li>
                <li>Any Category</li>
                <li>Fast Response</li>
                <li>Email Support</li>
              </ul>
              <a href="{{ url('user/question/create') }}" class="btn btn-lg btn-block btn-outline-primary">Ask Your Questions</a>
            </div>
          </div>
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Standard</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">#1,500</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>5 Questions</li>
                <li>All Categories</li>
                <li>Fast Response</li>
                <li>Email Support</li>
              </ul>
              <a href="{{ url('/user/standard-question/create') }}" class="btn btn-lg btn-block btn-primary">Ask Your Questions</a>
            </div>
          </div>
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Premium</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">#3,000</h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Unlimited Questions</li>
                <li>All Categories</li>
                <li>Fast Response</li>
                <li>Email Support</li>
              </ul>
              <a href="{{ url('/user/premium-question/create') }}" class="btn btn-lg btn-block btn-primary">Ask Your Questions</a>
            </div>
          </div>

  @endsection('content2')