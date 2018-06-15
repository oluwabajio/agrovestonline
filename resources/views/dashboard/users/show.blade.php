      
@extends('dashboard.layouts.nav')

@section('content2')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{ url('dashboard/basic') }}">Questions</a>
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
                </tr>
              </thead>
              
              <tbody>
                <tr>  
                    <td>{{$basic->name}}</td>
                    <td>{{$basic->email}}</td>
                    <td>{{$basic->age}}</td>
                    <td>{{$basic->category}}</td>
                    <td>{{$basic->created_at}}</td>
                  </tr>
              </tbody>
            </table>
            <br>
            <br>
            

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Question 1</th>
                    <th>Answer 1</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>  
                    <td width="35%">{{$basic->question1}}</td>
                    <td width="65%">{{$basic->answer1}}</td>
                  </tr>
              </tbody>
            </table><br><br>
    
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Question 2</th>
                    <th>Answer 2</th>                
                </tr>
              </thead>
              
              <tbody>
                <tr>  
                    <td width="35%">{{$basic->question2}}</td>
                    <td width="65%">{{$basic->answer2}}</td>
                  </tr>
              </tbody>
            </table>
            <br>
            {{-- Button To Edit Post/Questions --}}
            <a href="{{ url('dashboard/basic/'.$basic->id.'/edit') }}" type="submit" class="btn btn-primary pull-left"><span>Edit</span></a>
            
            {{-- Delete Button in Details View Page --}}
            <form role="form" method="POST" action="{{url('dashboard/basic/'.$basic->id)}}">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Delete</button>   
            </form>


          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    
      @endsection('content2')