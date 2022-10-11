@extends('layouts/app2')

@section('content')
<div class="container" style="margin-top: 15vh;">
    <div class="justify-content-center">
        <div class="col-lg-12">
        
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Register</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
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