@extends('dashboard.layouts.nav')

@section('content2')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Answer Questions</li>
      </ol>
     {{-- form starts here --}}
   
        <div class="container ">
            <div class="col-md-6 mx-auto">
                <div class="form-area">  
                    <form role="form" method="POST" action="{{url('dashboard/basic/'.$basic->id)}}">
                        {{csrf_field()}}
                    <br style="clear:both">
                                <h3 style="margin-bottom: 25px; text-align: center;">Answer Questions</h3>
                                <div class="form-group">
                                        <input name="_method" type="hidden" value="PUT">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$basic->name}}" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" value="{{$basic->email}}" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$basic->phone}}" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="age" name="age" value="{{$basic->age}}" placeholder="Age" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="category" name="category" value="{{$basic->category}}" placeholder="Category" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="question1" name="question1" value="{{$basic->question1}}" placeholder="Question 1">
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" type="textarea" id="answer1" name="answer1" placeholder="Answer 1" value="{{$basic->answer1}}" maxlength="440" rows="7">{{$basic->answer1}}</textarea>                    
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="question2" name="question2" value="{{$basic->question2}}" placeholder="Question 2">
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" type="textarea" id="answer2" name="answer2" placeholder="Answer 2" value="{{$basic->answer2}}" maxlength="440" rows="7">{{$basic->answer2}}</textarea>            
                                </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                    <br><br><br>
                </form>
                
                </div>
            </div>
        </div>
        <br>


        @endsection('content2')