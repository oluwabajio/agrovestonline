      
@extends('dashboard.layouts.nav')

@section('content2')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Newsletters</li>
      </ol>
      <!-- Example DataTables Card-->
     
      @if(count($newsletter) > 0)


      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> View All Newsletters</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th></th>
                </tr>
              </thead>
            
              <tbody>
              
                  @foreach($newsletter as $news)
                      <tr>  
                        <td>{{$loop->index+1}}</td>
                        <td>{{$news->email}}</td>
                        <td>{{$news->created_at}}</td>
                        <th>
                            <form action="{{url('dashboard/newsletters/'.$news->id)}}" method="post">
                              {{ method_field('delete') }}
                              {{-- <input type="hidden" name="_method" value="delete" /> --}}
                              {!! csrf_field() !!}
                              <button class="btn bg--primary" type="submit">Delete</button>
                          </form>
                         
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