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
                                <div class="text-center">
                                    <img src="http://systeqindia.therealcodes.in/public/files/site_logo/1/jOkQZeYUVv.png"
                                        alt="">
                                </div>
                                <a href="#" class="noble-ui-logo d-block mb-2"></a>
                                <h3 class="text-muted font-weight-normal mb-4">
                                    {{ __('Reset Password') }}</h3>
                                <form class="forms-sample" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('Email address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">
                                            {{ __('Send Password Reset Link') }}
                                        </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
