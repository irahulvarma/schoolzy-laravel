@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit School') }}</div>
                @if (session('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>	
                        <strong>{{ session('success') }}</strong>
                </div>
                @endif
                @error('id')
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>	
                        <strong>{{ $message }}</strong>
                </div>
                @enderror
                <div class="card-body">
                    <form method="POST" action="{{ route('update-school', ['id' => $school->id ]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="school_name" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                            <div class="col-md-6">
                                <input id="school_name" type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name" value="{{ $school->school_name }}" required autocomplete="school_name" autofocus>

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
                                <input id="principal" type="text" class="form-control @error('principal') is-invalid @enderror" name="principal" value="{{ $school->principal }}" required autocomplete="principal" autofocus>

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
                                <select id="board"  class="form-control @error('board') is-invalid @enderror" name="board" required autocomplete="board">
                                    <option value="">Select a board</option>
                                    @foreach ($boards as $board)
                                        <option @if($board->id == $school->board_id) selected @endif value="{{ $board->id }}">{{ $board->name }}</option>
                                    @endforeach
                                </select>

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
                                
                                <select id="medium"  class="form-control @error('medium') is-invalid @enderror" name="medium" required autocomplete="medium">
                                    <option value="">Select a board</option>
                                    @foreach (config('app.mediums') as $medium)
                                        <option @if($medium == $school->medium) selected @endif value="{{ $medium }}">{{ $medium }}</option>
                                    @endforeach
                                </select>

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
                                <input id="foundation_year" type="text" class="form-control @error('foundation_year') is-invalid @enderror" name="foundation_year" value="{{ $school->foundation_year }}" required autocomplete="foundation_year" autofocus>

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
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('address.form', ['route_url' => URL::route('update-school-address', array('id' => $school->id)), 'address' => $school->address])           
        </div>
    </div>
</div>
@endsection