@extends('layouts.app')

<title>
    BCP - Register Account
</title>
@section('content')
<div class ="content-wrapper" >
<form class="form-horizontal" action="{{route('admin.store')}}" method="POST">
    @csrf
    <div class="box-body">
      <div class="col-xs-4">
        {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
        {{-- <div class="col-sm-10"> --}}
          <input class="form-control input-lg" type="text" name="lastname" placeholder="Lastname" style="font-family:'Courier New', Courier, monospace;">
        {{-- </div> --}}
      </div>
      <div class="col-xs-4">
        {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
        {{-- <div class="col-sm-10"> --}}
          <input class="form-control input-lg" type="text" name="firstname" placeholder="Firstname" style="font-family:'Courier New', Courier, monospace;">
        {{--   --}}
      </div>
      <div class="col-xs-4">
        {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
        {{-- <div class="col-sm-10"> --}}
          <input class="form-control input-lg" type="text" name="middlemname" placeholder="Middlename / Optional" style="font-family:'Courier New', Courier, monospace;">
      {{--   --}}
      </div>
      

      <div class="col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">      
        <textarea class="form-control" placeholder="Present Address" name="add"style="font-family:'Courier New', Courier, monospace;" ></textarea>
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
          
          <input class="form-control input-lg" type="date" name="dobb" placeholder="Birthdate" style="font-family:'Courier New', Courier, monospace;">
      {{--   --}}
      </div>
      <div class="col-xs-4" style="margin-bottom: 10px;">
        
          <select id="gender-select" type="text" name="gen" class="form-control input-lg" style="font-family:'Courier New', Courier, monospace;" >
            <option value="" hidden>Choose your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Custom">Custom</option>  
          </select>
          
  
      </div>
      
      <div class="col-xs-12" style="margin-bottom: 10px;">
        <textarea class="form-control" placeholder="Place of Birth" name="bip" style="font-family:'Courier New', Courier, monospace;" ></textarea>    
      </div>
      <div class="col-xs-6" style=" " >
      
          
        <input class="form-control input-lg" type="email" name="emaild" placeholder="Personal Email Address" style="font-family:'Courier New', Courier, monospace;">
 
      </div>
        <div class="col-xs-6" style=" " >
      
          
        <input class="form-control input-lg" type="text " name="cont" placeholder="Contact" style="font-family:'Courier New', Courier, monospace;">
 
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
              </div>
              <div class="col-xs-12" style="margin-top:10px;">
                {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                {{-- <div class="col-sm-10"> --}}
                  <select id="gender-select" type="text" name="role" class="form-control input-lg" style="font-family:'Courier New', Courier, monospace;" >
                    <option value="" hidden>Choose Role</option>
                    <option value="admin">admin</option>
                      
                  </select>
                </div>
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




@endsection