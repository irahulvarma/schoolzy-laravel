@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Board') }}</div>
                @if (session('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>	
                        <strong>{{ session('success') }}</strong>
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('create-board') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="board_name" class="col-md-4 col-form-label text-md-right">{{ __('Board Name') }}</label>

                            <div class="col-md-6">
                                <input id="board_name" type="text" class="form-control @error('board_name') is-invalid @enderror" name="board_name" value="{{ old('board_name') }}" required autocomplete="board_name" autofocus>

                                @error('board_name')
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