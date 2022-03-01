
@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
    <div class="container-full">
  

  <div class="box-body">
        <div class="row">
        <div class="col">
          <h1> Add Employee </h1>
          <form method="post" action="{{route('store.employee')}}">
            @csrf
            <div class="row">
            <div class="col-12">            
              <div class="form-group">
                <h5>Name<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
               
              </div>
              <div class="form-group">
                <h5>Designation<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="text" name="designation"   class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>
              <div class="form-group">
                <h5>Division<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="text" name="division"  class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>

             
             <div class="form-group">
                <h5>Days<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="text" name="days" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>

              <div class="form-group">
                <h5>Reason<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="text" name="reason"  class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
              </div>
             
             
             
           
            
           
             
           
            </div>
            <div class="col-12">
             
              
            
             
             
            
           
             
              
            </div>
            </div>
            
              
            
              
            
              
            <div class="text-xs-right">
              <a href="" input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">Submit</a>
            </div>
          </form>

        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    

   
    
    </div>
  </div>





@endsection