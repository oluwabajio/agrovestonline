@extends('dashboard.layouts.nav')

@section('content2')
<div class="container">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Questions / Basic</li>
      </ol>
      <!-- Example DataTables Card-->
     
      @if(count($premium) > 0)


        @foreach($premium as $pre)

        @if($pre->who == "q")
        <div class="card">
          <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted"> {{ Auth::user()->name }}</h6>
            {{$pre->message}}
          </div>
        </div>
        @else
        <div class="card">
            <div class="card-body float-right">
                <h6 class="card-subtitle mb-2 text-muted float-right">Admin</h6><br>
              <span class="float-right">{{$pre->message}}</span>
            </div>
          </div>
        @endif
        @endforeach                
        
      @else 
      <p>No Post Found</p>
      @endif

      <div class="form-area" style="bottom: 0">  
        <form role="form" method="POST" action="{{url('')}}">
            {{csrf_field()}}
            <h3 style="margin-bottom: 25px; text-align: center;">Answer Questions</h3>
            <div class="form-group container">
              <div class="row">
                <div class="col-md-11">
                 <input name="_method" type="hidden" value="PUT">
                <input type="text" class="form-control" id="nameq" width="70%" name="name"  placeholder="Ask Question" required>
                </div>
                <div class="col-md-1">
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-left">Submit</button>
                </div>
              </div>
            </div> 
         <br><br><br>
       </form>
      </div>
</div>
      @endsection('content2')
      