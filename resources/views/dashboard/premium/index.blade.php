@extends('dashboard.layouts.nav')

@section('content2')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Questions / Basic</li>
      </ol>
      <!-- Example DataTables Card-->
     
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
                  <th>Email</th>
                  <th>Age</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th></th>
                
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th></th>
                 
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>Tiger@gmail.com</td>
                  <td>61</td>
                  <td>Crops</td>
                  <td>2011/04/25</td>
                  <th><a href="#" type="submit" class="btn bg--primary"><span>View</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Edit</span></a>
                      <a href="#" type="submit" class="btn bg--primary"><span>Delete</span></a></th>
               
                 
                </tr>
                  @foreach($basic as $bas)
                      <tr>  
                        <td>{{$bas->name}}</td>
                        <td>{{$bas->email}}</td>
                        <td>{{$bas->age}}</td>
                        <td>{{$bas->category}}</td>
                        <td>{{$bas->created_at}}</td>
                        <th><a href="basic/{{$bas->id}}" type="submit" class="btn bg--primary"><span>View</span></a>
                          <a href="#" type="submit" class="btn bg--primary"><span>Edit</span></a>
                          <a href="#" type="submit" class="btn bg--primary"><span>Delete</span></a></th>
                   
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