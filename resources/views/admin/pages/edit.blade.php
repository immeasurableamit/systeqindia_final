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

                    <form action="{{ route('pages.update', ['page' => $page->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-red">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        value="{{ empty($page->title) ? '' : old('title', $page->title) }}">
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
                                        name="description" id="summernote"
                                        rows="20">{{ empty($page->description) ? '' : old('description', $page->description) }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn btn-primary">Update</button>

                        <a href="#" data-toggle="modal" data-target="#deleteModal_{{ $page->id }}"
                            class="btn btn-danger"> Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal_{{ $page->id }}" tabindex="-1" role="dialog"
        aria-labelledby="teamModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModalCenterTitle">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    You wont be able to revert this!
                </div>
                <div class="modal-footer">
                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Yes, delete it!</button>
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
