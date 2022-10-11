@extends('layouts.app2')

@section('content')
<div class="container" style="margin-top: 15vh;">
    <div class="justify-content-center">
        <div class="col-lg-12">
            <div class="box box-info" style="margin-top: 10vh;">
                <div class="box-body">
                    
                    <div class="alert alert-danger alert-dismissible" style="margin-top: 2vh;">
                      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                        <span style="font-family:'Times New Roman', Times, serif;
                                     font-size: 30px;">
                            Your session has timed out.
                        </span> 
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection
                {{-- <div class="box-header with-border">
                  <h2 class="box-title" style= "font-size: 20px; margin-left: 15px;">Login</h2>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                
                  <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" name="email"placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label" >Password</label>
    
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name="password"  placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  
                              <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                              </label>
                          </div>      
                          @guest
                                @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                            @endguest
                      </div>
                    </div>
                   
                  </div>
                  <!-- /.box-body -->
                  
                      <div class="box-footer">
                    
                      <button type="submit" class="btn btn-primary" style="margin-right: 20px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px;">
                          {{ __('Login') }}
                      </button>
                      
  
                      
                      </div>
                      
                  <!-- /.box-footer -->
                </form> --}}








           <!--externsion-->
            <!-- Horizontal Form -->
            {{-- <div class="box box-info">
              <div class="box-header with-border">
                <h2 class="box-title" style= "font-size: 20px; margin-left: 15px;">Login</h2>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              
                <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
  
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" name="email"placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label" >Password</label>
  
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" name="password"  placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>      
                        @guest
                        @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                @endguest
                    </div>
                  </div>
                 
                </div>
                <!-- /.box-body -->
                <div class="form-group">
                    <div class="box-footer">
                  
                    <button type="submit" class="btn btn-primary" style="margin-right: 15px;  float: right; width: 96%; padding-top: 15px; padding-bottom: 15px;">
                        {{ __('Login') }}
                    </button>
                    @guest
                    @if (Route::has('register'))
                    
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Create a new account') }}</a>
                    
                    @endif


                    @endguest 

                    
                    </div>
                </div>
                <!-- /.box-footer -->
              </form> 
            </div> --}}






         {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @guest
                   
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif  

                    @endguest
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @guest
                                @if (Route::has('register'))
                    
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Create a new account') }}</a>
                    
                    @endif
                                @endguest
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  --}}'
 