<div class="card">
    <div class="card-header">{{ __('Edit Address') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ $route_url }}">
            @csrf

            <div class="form-group row">
                <label for="flat_no" class="col-md-4 col-form-label text-md-right">{{ __('Flat No.') }}</label>

                <div class="col-md-6">
                    <input id="flat_no" type="flat_no" class="form-control @error('flat_no') is-invalid @enderror" name="flat_no" value="{{ $address->flat_no ?? '' }}" required autocomplete="flat_no">

                    @error('flat_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="line_1" class="col-md-4 col-form-label text-md-right">{{ __('Line no. 1') }}</label>

                <div class="col-md-6">
                    <input id="line_1" type="line_1" class="form-control @error('line_1') is-invalid @enderror" name="line_1" value="{{ $address->line_1 ?? '' }}" required autocomplete="line_1">

                    @error('line_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="line_2" class="col-md-4 col-form-label text-md-right">{{ __('Line no. 2') }}</label>

                <div class="col-md-6">
                    <input id="line_2" type="line_2" class="form-control @error('line_2') is-invalid @enderror" name="line_2" value="{{ $address->line_2 ?? '' }}" autocomplete="line_2">

                    @error('line_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                <div class="col-md-6">
                    <input id="city" type="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $address->city ?? '' }}" required autocomplete="city">

                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                <div class="col-md-6">
                    <input id="state" type="state" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ $address->state ?? '' }}" required autocomplete="state">

                    @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                <div class="col-md-6">
                    <input id="pincode" type="pincode" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ $address->pincode ?? '' }}" required autocomplete="pincode">

                    @error('pincode')
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