@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add School') }}</div>
                @if (session('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>	
                        <strong>{{ session('success') }}</strong>
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('create-school') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="school_name" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                            <div class="col-md-6">
                                <input id="school_name" type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name" value="{{ old('school_name') }}" required autocomplete="school_name" autofocus>

                                @error('school_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="principal" class="col-md-4 col-form-label text-md-right">{{ __('Principal') }}</label>

                            <div class="col-md-6">
                                <input id="principal" type="text" class="form-control @error('principal') is-invalid @enderror" name="principal" value="{{ old('principal') }}" required autocomplete="principal" autofocus>

                                @error('principal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="board" class="col-md-4 col-form-label text-md-right">{{ __('Board') }}</label>

                            <div class="col-md-6">
                                <input id="board" type="board" class="form-control @error('board') is-invalid @enderror" name="board" value="{{ old('board') }}" required autocomplete="board">

                                @error('board')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="medium" class="col-md-4 col-form-label text-md-right">{{ __('Medium') }}</label>

                            <div class="col-md-6">
                                <input id="medium" type="text" class="form-control @error('medium') is-invalid @enderror" name="medium" value="{{ old('medium') }}" required autocomplete="medium" autofocus>

                                @error('medium')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foundation_year" class="col-md-4 col-form-label text-md-right">{{ __('Foundation Year') }}</label>

                            <div class="col-md-6">
                                <input id="foundation_year" type="text" class="form-control @error('foundation_year') is-invalid @enderror" name="foundation_year" value="{{ old('foundation_year') }}" required autocomplete="foundation_year" autofocus>

                                @error('foundation_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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