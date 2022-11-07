
@extends('layouts.manage')

@section('content')

    <div class="content-wrapper">
      <section class="content-header">
        <div class="row">
          <div class="col-lg-12 ">

              {{-- <div class="col-md-6">
              </div> --}}
        
              
              <div class="col-md-6">
              <div class="box box-info" style="margin-top:50px;">
                <div class="box-header with-border">
                  

                    <h3 style="font-family: Times New Roman, Times, serif ">
                             
                             <i class="glyphicon glyphicon-plus-sign  " style="color:rgb(46, 181, 253);"></i>
                              
                             <b>&nbsp;Control </b></h3> 
                             <br>
                             


                             @if($message = Session::get('success'))
                                  <div class = "alert alert-success">
                                    <p>{{$message}}</p>
                                  </div>
                             @endif

                             @if($errors->any())
                             <div class="alert alert-danger">
                               <h4>ERROR!</h4>
               
                               <ul style="list-style-type:none;">
                                 @foreach($errors->all() as $err )
                                 <li>
                                   {{$err}}
                                 </li>
                                 @endforeach
                               </ul>
                             </div>
                             @endif

                              
                </div>

                <form class="form-horizontal" action="{{route('adm.addRole')}}" method="POST" >
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif ">Name</label>
    
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="fname" placeholder="Fullname" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"  style="font-family: Times New Roman, Times, serif ">Email</label>
    
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"  style="font-family: Times New Roman, Times, serif " >Password</label>
    
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name="p" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif " >ReType</label>
    
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name="p" placeholder="ReType Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif " >Role</label>
    
                      <div class="col-sm-10">
                        <select name="role" id="gender-select" type="text" class="form-control" style="font-family: Times New Roman, Times, serif " required>
                          <option value="" hidden>Choose Role</option>
                          <option value="admin">Admin</option>
                          <option value="super admin">Super Admin</option>
                        </select>
                      </div>
                    </div>
                      
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-block" style="background-color:rgba(156, 207, 255, 0.739);
                                                                       padding: 15px; "><b>Create</b></button>
                  </div>
                </form>
              </div>
              </div>  



              {{-- OTHER FIELD --}}
        

              <div class="col-md-6">

                
                <div class="box box-info" style="margin-top:50px;">
                  <div class="box-header with-border">
                    
  
                      <h3 style="font-family: Times New Roman, Times, serif ">
                               
                               <i class="glyphicon glyphicon-plus-sign  " style="color:rgb(46, 181, 253);"></i>
                                
                               <b>&nbsp; Staff</b></h3> 
                               <br>
                               
  
  
                               {{-- @if($message = Session::get('success'))
                                    <div class = "alert alert-success">
                                      <p>{{$message}}</p>
                                    </div>
                               @endif
  
                               @if($errors->any())
                               <div class="alert alert-danger">
                                 <h4>ERROR!</h4>
                 
                                 <ul style="list-style-type:none;">
                                   @foreach($errors->all() as $err )
                                   <li>
                                     {{$err}}
                                   </li>
                                   @endforeach
                                 </ul>
                               </div>
                               @endif --}}
  
                                
                  </div>
  
                  <form class="form-horizontal" action="#" method="POST" >
                    @csrf
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif ">Name</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" name="fname" placeholder="Fullname" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"  style="font-family: Times New Roman, Times, serif ">Email</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label"  style="font-family: Times New Roman, Times, serif " >Password</label>
      
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" name="p" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif " >ReType</label>
      
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" name="p" placeholder="ReType Password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif " >Role</label>
      
                        <div class="col-sm-10">
                          <select name="role" id="gender-select" type="text" class="form-control" style="font-family: Times New Roman, Times, serif " required>
                            <option value="" hidden>Choose Role</option>
                            <option value="teacher">Teacher</option>
                            <option value="office">Office Staff</option>
                            <option value="aae">AAE</option>
                          </select>
                        </div>
                      </div>
                        
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-block" style="background-color:rgba(156, 207, 255, 0.739);
                                                                         padding: 15px; "><b>Create</b></button>
                    </div>
                  </form>
                </div>
                
              </div>

              <div class="col-md-12" style="margin-bottom: 50px;">

                
                <div class="box box-warning" style="margin-top:50px;">
                  <div class="box-header with-border">
                    
  
                      <h3 style="font-family: Times New Roman, Times, serif ">
                               
                               <i class="glyphicon glyphicon-plus-sign  " style="color:rgb(46, 181, 253);"></i>
                                
                               <b>&nbsp; Program Head</b></h3> 
                               <br>
                               
  
  
                               {{-- @if($message = Session::get('success'))
                                    <div class = "alert alert-success">
                                      <p>{{$message}}</p>
                                    </div>
                               @endif
  
                               @if($errors->any())
                               <div class="alert alert-danger">
                                 <h4>ERROR!</h4>
                 
                                 <ul style="list-style-type:none;">
                                   @foreach($errors->all() as $err )
                                   <li>
                                     {{$err}}
                                   </li>
                                   @endforeach
                                 </ul>
                               </div>
                               @endif --}}
  
                                
                  </div>
  
                  <form class="form-horizontal" action="#" method="POST" >
                    @csrf
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif ">Name</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" name="fname" placeholder="Fullname" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"  style="font-family: Times New Roman, Times, serif ">Email</label>
      
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label"  style="font-family: Times New Roman, Times, serif " >Password</label>
      
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" name="p" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif " >ReType</label>
      
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" name="p" placeholder="ReType Password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label" style="font-family: Times New Roman, Times, serif " >Department Head</label>
      
                        <div class="col-sm-10">
                          <select name="role" id="gender-select" type="text" class="form-control" style="font-family: Times New Roman, Times, serif " required>
                            <option value="" hidden>Choose Department</option>
                            <option value="BSIT">BSIT</option>
                            <option value="BSBA">BSBA</option>
                          </select>
                        </div>
                      </div>
                        
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-block" style="background-color:rgba(156, 207, 255, 0.739);
                                                                         padding: 15px; "><b>Create</b></button>
                    </div>
                  </form>
                </div>
                
              </div>





          </div>
        </div>
      </section>
  

  </div>
   
    <div class="control-sidebar-bg"></div>
    </div>
    
@endsection 
