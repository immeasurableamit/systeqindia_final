@extends('layout.master2')

@section('title')
Login
@endsection

@section('content')
    {{-- <style>
        .page-wrapper {
            background-image: url("https://media.istockphoto.com/photos/professional-cleaning-service-team-working-with-cleaning-equipment-in-picture-id1130430495?k=6&m=1130430495&s=612x612&w=0&h=7Wba6jlhSyRGK6K8W4rHhltAJe2qao9iBT-qEurXLMQ=");
            background-repeat: no-repeat, repeat;
        }
    </style> --}}
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
                                    {{ __('Welcome back! Log in to your account.') }}</h5>
                                <form class="forms-sample" method="POST" action="{{ route('login') }}">
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
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mt-3">

                                        <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">
                                            {{ __('Login') }}
                                        </button>

                                    </div>
                                    {{-- <a href="{{ route('password.request') }}"
                                        class="d-block mt-3 text-muted">{{ __('Forgot Password') }}</a> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
