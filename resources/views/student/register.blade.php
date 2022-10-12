@extends('layouts/app2')
<title>BCP - Registration</title>


@section('content') 
<div class="container" style="margin-top: 5vh;
                              margin-bottom:6vh">
    <div class="justify-content-center">
        <div class="col-lg-12">
        
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title" style="margin-left: 15px;
                  font-family:'Courier New', Courier, monospace;
                  font-size: 4rem;">Register an Account</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{route('student.store')}}" method="POST">
                  @csrf
                  <div class="box-body">
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="lname" placeholder="Lastname" style="font-family:'Courier New', Courier, monospace;">
                      {{-- </div> --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="fname" placeholder="Firstname" style="font-family:'Courier New', Courier, monospace;">
                      {{--   --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="mname" placeholder="Middlename / Optional" style="font-family:'Courier New', Courier, monospace;">
                    {{--   --}}
                    </div>
                    

                    <div class="col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">      
                      <textarea class="form-control" placeholder="Present Address" name="address"style="font-family:'Courier New', Courier, monospace;" ></textarea>
                    </div>
                    {{-- age based on datepicker --}}
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" name="age" placeholder="99" style="font-family:'Courier New', Courier, monospace;" >
                    {{--   --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        
                        <input class="form-control input-lg" type="date" name="dob" placeholder="Birthdate" style="font-family:'Courier New', Courier, monospace;">
                    {{--   --}}
                    </div>
                    <div class="col-xs-4" style="margin-bottom: 10px;">
                      
                        <select name="gender" id="gender-select" type="text" name="gender" class="form-control input-lg" style="font-family:'Courier New', Courier, monospace;" >
                          <option value="">Choose your Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="custom">Custom</option>  
                        </select>
                        
                
                    </div>
                    
                    <div class="col-xs-12" style="margin-bottom: 10px;">
                      <textarea class="form-control" placeholder="Place of Birth" name="bp" style="font-family:'Courier New', Courier, monospace;" ></textarea>    
                    </div>
                    <div class="col-xs-6" style=" " >
                    
                        
                      <input class="form-control input-lg" type="email" name="email" placeholder="Personal Email Address" style="font-family:'Courier New', Courier, monospace;">
               
                    </div>
                      <div class="col-xs-6" style=" " >
                    
                        
                      <input class="form-control input-lg" type="text " name="contact" placeholder="Contact" style="font-family:'Courier New', Courier, monospace;">
               
                    </div> 
                    
                    <div class="col-xs-12" style="margin-top:20px;">
                      <div class="box box-default box-solid collapsed-box">
                        <div class="box-header with-border">
                          <h4 class="box-title" style="margin-left: 5px;
                          font-family:'Courier New', Courier, monospace;
                          font-size: 3rem;">Credentials</h4>
            
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: none;">
                          <div class="col-xs-6">
                            {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                            {{-- <div class="col-sm-10"> --}}
                              <input class="form-control input-lg" type="password" name="pw" placeholder="Password" style="font-family:'Courier New', Courier, monospace;">
                          {{--   --}}
                          </div>
                          <div class="col-xs-6">
                            {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                            {{-- <div class="col-sm-10"> --}}
                              <input class="form-control input-lg" type="password" name="pw" placeholder="Confirm Password" style="font-family:'Courier New', Courier, monospace;">
                          {{--   --}}
                          </div
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="margin-right: 20px;   width: 100%; padding-top: 15px; padding-bottom: 15px;">
                      Create
                    </button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
</div>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@if ($message = Session::get('success'))

    <script>
      swal("Account!","{!!Session::get('success')!!}","success",{button:"OK",});
    </script>
    
@endif --}}
@endsection