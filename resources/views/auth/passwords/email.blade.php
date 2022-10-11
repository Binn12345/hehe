@extends('layouts.app2')

@section('content')

<div class="container" style="margin-top: 15vh;">
    <div class="justify-content-center">
        <div class="col-lg-12">

            <div class="box box-info">
                <div class="box-header with-border">
                  <h2 class="box-title" style= "font-size: 20px; margin-left: 15px;">{{ __('Reset Password') }}</h2>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="form-horizontal"> 
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">{{ __('E-Mail Address') }}</label>
    
                      <div class="col-sm-10">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                    </div>
                    
                   
                   
                  </div>
                  <!-- /.box-body -->
                  
                      <div class="box-footer">
                    
                      <button type="submit" class="btn btn-primary" style="margin-right: 20px;   width: 100%; padding-top: 15px; padding-bottom: 15px;">
                        {{ __('Send Password Reset Link') }}
                      </button>
                      
  
                      
                      </div>
                      
                  <!-- /.box-footer -->
                </form> 
              </div>    

        </div>
    </div>
</div>

            
 






{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
