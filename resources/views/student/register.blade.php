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
                  font-size: 4rem;">Register</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" placeholder="Lastname" style="font-family:'Courier New', Courier, monospace;">
                      {{-- </div> --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" placeholder="Firstname" style="font-family:'Courier New', Courier, monospace;">
                      {{--   --}}
                    </div>
                    <div class="col-xs-4">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" placeholder="Middlename / Optional" style="font-family:'Courier New', Courier, monospace;">
                    {{--   --}}
                    </div>
                    
                    <div class="col-xs-6">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <input class="form-control input-lg" type="text" placeholder="Middlename / Optional" style="font-family:'Courier New', Courier, monospace;">
                    {{--   --}}
                    </div>
                    <div class="col-xs-6">
                      {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                      {{-- <div class="col-sm-10"> --}}
                        <textarea class="form-control input-lg" type="text" placeholder="Middlename / Optional" style="font-family:'Courier New', Courier, monospace;">ssss
                        </textarea>

                    {{--   --}}
                    </div>
                    
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Create</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
            
        </div>
    </div>
</div>

@endsection