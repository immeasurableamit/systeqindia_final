@extends('layout.master')

@push('plugin-styles')

    <style>
        .text-red {
            color: red;
        }

    </style>

@endpush

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add New Team</h6>
                    @include('flash::message')

                    <form action="{{ route('site-info.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="flash_message">Flash Message</label>
                                    <textarea class="form-control @error('flash_message') is-invalid @enderror"
                                        id="flash_message" name="short_description"
                                        rows="3">{{ old('flash_message') }}</textarea>
                                    @error('flash_message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror"
                                        id="short_description" name="short_description"
                                        rows="3">{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="copyright">Copyright</label>
                                    <input type="text" name="copyright"
                                        class="form-control @error('copyright') is-invalid @enderror" id="copyright"
                                        value="{{ old('copyright') }}">
                                    @error('copyright')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror" id="address"
                                        value="{{ old('address') }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address_map">Address Map Link</label>
                                    <input type="text" name="address_map"
                                        class="form-control @error('address_map') is-invalid @enderror" id="address_map"
                                        value="{{ old('address_map') }}">
                                    @error('address_map')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>




                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection

@push('plugin-scripts')
    <script src="{{ asset('public/assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/select2/select2.min.js') }}"></script>


    @push('custom-scripts')

    @endpush
