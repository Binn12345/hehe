@extends('layouts.app2')

@section('content')
<nav class="navbar navbar-inverse" style="background-color:rgb(0, 0, 0);">
    <div class="container"> 
      
      <div class="navbar-header">
        <img src="https://bcp.edu.ph/images/logo50.png" alt="BCP" class="d-inline-block align-middle pt-2 pl-2">&nbsp;
      
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('bug')}}">Home</a></li>
        {{-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">--/--/--</a></li>
            <li><a href="#">--/--/--</a></li>
            <li><a href="#">--/--/--</a></li>
          </ul>
        </li> --}}
        <li><a href="#">Courses</a></li>
      </ul>
      {{-- <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#exampleModalLong"style="color: white;"><span class="glyphicon glyphicon-user"></span>&nbsp;Register Online</a></li>
        <li><a data-toggle="modal" data-target="#modal-default"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
      </ul>  --}}
    </div>
  </nav>
<div class="container" style="background-color: white; margin-top:10px;" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" hidden>
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('role') }}</label>

                            <div class="col-md-6">
                                <input value="admin" required autocomplete="admin" disabled>
{{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
