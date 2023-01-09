@extends('layouts.template')

@section('content')
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('login') }}" method="post">
                        <h3 class="text-center">{{ __('Login') }}</h3>
                        @csrf
                        <div class="form-group">
                            <label for="email" >{{ __('Email') }}:</label><br>
                            <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
                            @error('email')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" >{{ __('Password') }}:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                            @error('password')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">                                    
                            <input type="submit" name="submit" class="btn btn-primary btn-md" value="{{ __('Login') }}">
                        </div>                                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection