      
@extends('dashboard.layouts.nav')

@section('content2')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Agric Expo Registered Users</li>
      </ol>
      <!-- Example DataTables Card-->
     
      @if(count($expo) > 0)


      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> View All Agric Business Expo Registered Individuals</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Objective</th>
                  <th>Registered Date</th>
                  <th></th>
                
                </tr>
              </thead>
              {{-- <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Objective</th>
                  <th>Date</th>
                  <th></th>
                 
                </tr>
              </tfoot> --}}
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
                  @foreach($expo as $exp)
                      <tr>  
                        <td>{{$exp->name}}</td>
                        <td>{{$exp->email}}</td>
                        <td>{{$exp->phone}}</td>
                        <td>{{$exp->objective}}</td>
                        <td>{{$exp->created_at}}</td>
                        <th>
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