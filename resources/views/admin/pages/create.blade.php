@extends('layout.master')

@section('title')
Pages | Systeqindia Facility Management Services
@endsection

@push('plugin-styles')

    <style>
        .text-red {
            color: red;
        }

    </style>

    <!-- Summernote Css -->

    <link href="{{ asset('public/assets/css/summernote-bs4.min.css') }}" rel="stylesheet">

@endpush

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Pages</h6>
                    @include('flash::message')

                    <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-red">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="desc">Description <span class="text-red">*</span></label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                        name="description" id="summernote" rows="20">{{ old('description') }}</textarea>

                                    @error('description')
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

    <script src="{{ asset('public/assets/vendors/select2/select2.min.js') }}"></script>
    <!-- Summernote scripts -->

    <script src="{{ asset('public/assets/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 100
        });
    </script>

@endpush
