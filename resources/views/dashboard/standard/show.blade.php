@extends('dashboard.layouts.nav')

@section('content2')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/agrovest/public/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="/agrovest/public/dashboard/basic">Questions</a>
        </li>
        <li class="breadcrumb-item active">Basic</li>
      </ol>
      <!-- Example DataTables Card-->
     
 


      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> View All Basic Questions</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Category</th>
                  <th>Date</th>
                  {{-- <th></th> --}}
                
                </tr>
              </thead>
              
              <tbody>
                <tr>  
                    <td>{{$basic->name}}</td>
                    <td>{{$basic->email}}</td>
                    <td>{{$basic->age}}</td>
                    <td>{{$basic->category}}</td>
                    <td>{{$basic->created_at}}</td>
                    {{-- <th><a href="basic/{{$basic->id}}" type="submit" class="btn bg--primary"><span>View</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Edit</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Delete</span></a></th> --}}
                  </tr>
              </tbody>
            </table>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Question 1</th>
                  <th>Answer 1</th>
                  <th>Question 2</th>
                  <th>Answer 2</th>
                  <th>Date</th>
                  {{-- <th></th> --}}
                
                </tr>
              </thead>
              
              <tbody>
                <tr>  
                    <td>{{$basic->question1}}</td>
                    <td>{{$basic->answer1}}</td>
                    <td>{{$basic->question2}}</td>
                    <td>{{$basic->answer2}}</td>
                    <td>{{$basic->created_at}}</td>
                    {{-- <th><a href="basic/{{$basic->id}}" type="submit" class="btn bg--primary"><span>View</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Edit</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Delete</span></a></th> --}}
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    
      @endsection('content2')