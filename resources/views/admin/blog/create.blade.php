@extends('layout.master')

@push('plugin-styles')

    <style>
        .text-red {
            color: red;
        }

    </style>

    <!-- Summernote Css -->

    <link href="{{ asset('public/assets/css/summernote-bs4.min.css') }}" rel="stylesheet">

@endpush

@section('title')
Blog | Systeqindia Facility Management Services
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Blog</h6>
                    @include('flash::message')

                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
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

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tag">Tag (Seperate with commas) <span class="text-red">*</span></label>
                                    <input type="text" name="tag" class="form-control @error('tag') is-invalid @enderror"
                                        id="tag" value="{{ old('tag') }}">
                                    @error('tag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status">Status <span class="text-red">*</span></label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror"
                                        id="author">
                                        <option value=""> Your Option</option>
                                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Disable</option>
                                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Enable</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="blog_image">Image (size 575 x 645) (.jpg, .jpeg, .png)</label>
                                    <input type="file" name="blog_image"
                                        class="form-control-file @error('blog_image') is-invalid @enderror" id="blog_image"
                                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    <small id="blog_image" class="form-text text-muted">You do not have to use the
                                        recommended sizes. However, please use the recommended sizes for your site design to
                                        look its best.</small>
                                    @error('blog_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <img id="blah" width="200" />

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
