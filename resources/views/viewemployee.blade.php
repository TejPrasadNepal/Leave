
@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
    <div class="container-full">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
      

      <div class="col-12">

       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">View Employee</h3>
         <a href="{{route('add.employee')}}" style="float: right" class="btn btn-rounded btn-success mb-5">Add Employee</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
            <thead>

              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Division</th>
                <th>Days</th>
                <th>Reason</th>
                <th>Action</th>
              </tr>

            </thead>
            <tbody>
              @foreach($allData as $key => $Employee)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $Employee->name }}</td>
                <td>{{ $Employee->designation }}</td>
                <td>{{ $Employee->division }}</td>
                <td>{{ $Employee->days }}</td>
                <td>{{ $Employee->reason }}</td>
                <td>
                  <a href="{{route('edit.employee', $Employee->id)}}" class="btn btn-success">Edit</a>
                   <a href="{{route('delete.employee', $Employee->id)}}" class="btn btn-danger">Delete</a>
                </td>
                
              </tr>
              @endforeach
              
            </tfoot>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

       
        <!-- /.box-header -->
      
        <!-- /.box-body -->
        </div>
        <!-- /.box -->          
      </div>
      <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    
    </div>
  </div>






@endsection