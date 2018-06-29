@extends('dashboard.layouts.nav2')

@section('content2')

  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
  
     
      @if(count($basic) > 0)


      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> View All Basic Questions</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Question 1</th>
                  <th>Answer 1</th>
                  <th>Question 2</th>
                  <th>Answer 2</th>
                  <th></th>
                
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Question 1</th>
                  <th>Answer 1</th>
                  <th>Question 2</th>
                  <th>Answer 2</th>
                  <th></th>
                 
                </tr>
              </tfoot>
              <tbody>
                {{-- <tr>
                  <td>Tiger Nixon</td>
                  <td>Tiger@gmail.com</td>
                  <td>61</td>
                  <td>Crops</td>
                  <td>2011/04/25</td>
                  <th><a href="#" type="submit" class="btn bg--primary"><span>View</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Edit</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Delete</span></a></th>
                </tr> --}}
                  @foreach($basic as $bas)
                      <tr>  
                        <td>{{$bas->name}}</td>
                        <td>{{$bas->question1}}</td>
                        <td>{{$bas->answer1}}</td>
                        <td>{{$bas->question2}}</td>
                        <td>{{$bas->answer2}}</td>
                        <th>  <a href="{{ url('user/basic-question/'.$bas->id.'/edit') }}" type="submit" class="btn bg--primary"><span>Reply</span></a>
                         {{-- <a href="{{ url('user/basic-question/'.$bas->id) }}" type="submit" class="btn bg--primary"><span>View</span></a>
                          <form action="{{url('user/basic-question/'.$bas->id)}}" method="post">
                            {{ method_field('delete') }}
                            {{-- <input type="hidden" name="_method" value="delete" /> --}}
                           {{-- {!! csrf_field() !!}
                           {{-- <button class="btn bg--primary" type="submit">Delete</button>
                        </form>  --}}


                        </th>
                      </tr>
                  @endforeach                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      @else 
      <p>No Post Found</p>

      @endif

  @endsection('content2')