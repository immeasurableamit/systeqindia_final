@extends('layout.master')

@section('title')
{{ __('Update Mission') }}
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
                        <h6 class="card-title mb-0">Update mission</h6>
                        <div>
                        </div>
                    </div>
                    @include('flash::message')

                    <form action="{{ route('missions.update',['mission' => $mission->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-red">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        value="{{ empty($mission) ? '' : old('title', $mission->title) }}">
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
                                    <textarea name="description"
                                        class="form-control @error('description') is-invalid @enderror" id="description"
                                        rows="3">{{ empty($mission) ? '' : old('description', $mission->description) }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="order">Order</label>
                                    <input type="number" name="order" class="form-control" id="order"
                                        value="{{ empty($mission) ? '' : old('order', $mission->order) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="slider_image">Icon (flaticon) <span
                                            class="text-red">*</span></label>
                                    <input type="text" name="slider_image"
                                        class="form-control @error('slider_image') is-invalid @enderror"
                                        id="slider_image" value="{{ $mission->slider_image }}">
                                    @error('slider_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn btn-primary">Update</button>

                        <a href="#" data-toggle="modal" data-target="#deleteModal_{{$mission->id}}" class="btn btn-danger"> Delete</a>

                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal_{{$mission->id}}" tabindex="-1" role="dialog" aria-labelledby="teamModalCenterTitle"
        aria-hidden="true">
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
                   <form action="{{ route('missions.destroy', $mission->id) }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}

                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Yes, delete it!</button>
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
