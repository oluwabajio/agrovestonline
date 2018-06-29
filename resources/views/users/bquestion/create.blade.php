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
      <div class="row">
        
      </div>
     <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Fill The Form Below</div>
          <div class="container" style="margin-top:0px; padding:60px;" >

                <form role="form" method="POST" action="{{url('/user/basic-question')}}">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="name" class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                        <input class="form-control" type="text" id="name" name="name"required="required" data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                        <input class="form-control" type="email" id="email" name="email" required="required" data-validation-required-message="Please enter your email.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-2 col-form-label">Phone</label>
                        <div class="col-10">
                        <input class="form-control" type="text" id="phone" name="phone" required="required" data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-2 col-form-label">Age</label>
                        <div class="col-10">
                        <input class="form-control" type="text"  id="age" name="age" required="required" data-validation-required-message="Please enter your age.">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="age" class="col-2 col-form-label">Select Your Category</label>
                            <div class="col-10">
                             <select id="category" name="category" class="form-control input-sm">
                               <option value="aq">Aquaculture</option>
                               <option value="po">Poultry</option>
                               <option value="cr">Crops</option>
                               <option value="of">Organic Farming</option>
                               <option value="Gc">General Consultancy</option>
                             </select>
                            </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="question1" class="col-2 col-form-label">Question 1</label>
                        <div class="col-10">
                        <input type="text" class="form-control" id="question1" name="question1" placeholder="Question 1" required="required" data-validation-required-message="Please enter question 1.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="answer1" class="col-2 col-form-label">Answer 1</label>
                        <div class="col-10">
                        <textarea class="form-control" type="textarea" id="answer1" name="answer1" maxlength="440" rows="7" readonly></textarea>                    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="question2" class="col-2 col-form-label">Question 2</label>
                        <div class="col-10">
                        <input type="text" class="form-control" id="question2" name="question2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="answer2" class="col-2 col-form-label">Answer 2</label>
                        <div class="col-10">
                        <textarea class="form-control" type="textarea" id="answer2" name="answer2"   maxlength="440" rows="7" readonly></textarea>            
                        </div>    
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                    <br><br><br>

                </form>
            </div>


        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

  @endsection('content2')