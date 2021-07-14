@extends('layout.master2')

@section('content')
    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 pr-md-0">
                            <div class="auth-left-wrapper"
                                style="background-image: url({{ asset('public/assets/images/carousel/img6.jpg') }})">
                            </div>
                        </div>
                        <div class="col-md-8 pl-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">Systeq<span>India</span></a>

                                <h5 class="text-muted font-weight-normal mb-4">
                                    {{ __('Change  Password') }}</h5>
                                <form class="forms-sample" method="POST" action="{{ route('changePassword') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="new-password">{{ __('Current Password') }}</label>
                                        <input id="current-password" type="password"
                                            class="form-control @error('current-password') is-invalid @enderror"
                                            name="current-password" value="{{ old('current-password') }}"
                                            autocomplete="current-password" autofocus>

                                        @error('current-password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="new-password">{{ __('New Password') }}</label>
                                        <input id="new-password" type="password"
                                            class="form-control @error('new-password') is-invalid @enderror"
                                            name="new-password">

                                        @error('new-password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="new-password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="new-password-confirm" type="password" class="form-control"
                                            name="new-password_confirmation">


                                        @error('password-confirm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Change Password') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
