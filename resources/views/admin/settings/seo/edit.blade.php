@extends('layout.master')

@section('title')
SEO | Systeqindia Facility Management Services
@endsection

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
                    <div class="d-md-flex justify-content-between align-items-center mb-20">
                        <h6 class="card-title mb-0">SEO</h6>
                        <div>
                            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"></i>Back</a>
                        </div>
                    </div>
                    @include('flash::message')

                    <form action="{{ route('seo.update',['seo' => $seo->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="site_name">Site Name</label>
                                    <textarea class="form-control @error('site_name') is-invalid @enderror"
                                        id="site_name" name="site_name"
                                        rows="3">{{ old('site_name',$seo->site_name) }}</textarea>
                                    @error('site_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                               <div class="col-md-12">
                                <div class="form-group">
                                    <label for="page_title">Page Title</label>
                                    <textarea class="form-control @error('page_title') is-invalid @enderror"
                                        id="page_title" name="page_title"
                                        rows="3">{{ old('page_title',$seo->page_title) }}</textarea>
                                    @error('page_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="site_description">Site Description</label>
                                    <input type="text" name="site_description"
                                        class="form-control @error('site_description') is-invalid @enderror" id="site_description"
                                        value="{{ old('site_description', $seo->site_description) }}">
                                    @error('site_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="site_keywords">Site Keywords (Seperate with commas)</label>
                                    <input type="text" name="site_keywords"
                                        class="form-control @error('site_keywords') is-invalid @enderror" id="site_keywords"
                                        value="{{ old('site_keywords', $seo->site_keywords) }}">
                                    @error('site_keywords')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn btn-primary">Update</button>


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
        <script>
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };

        </script>
    @endpush






