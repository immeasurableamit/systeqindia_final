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
                    <div class="d-md-flex justify-content-between align-items-center mb-20">
                        <h6 class="card-title mb-0">Add New Slider</h6>
                        <div>
                            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"></i>Back</a>
                        </div>
                    </div>
                    @include('flash::message')

                    <form action="{{ route('sliders.update',['slider' => $slider->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-red">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        value="{{ empty($slider) ? '' : old('title', $slider->title) }}">
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
                                        rows="3">{{ empty($slider) ? '' : old('description', $slider->description) }}</textarea>
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
                                        value="{{ empty($slider) ? '' : old('order', $slider->order) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="slider_image">Image (size 1440 x 910) (.jpg, .jpeg, .png) <span
                                            class="text-red">*</span></label>
                                    <input type="file" name="slider_image"
                                        class="form-control-file @error('slider_image') is-invalid @enderror"
                                        id="slider_image" onchange="loadFile(event)">
                                    @error('slider_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <small id="slider_image" class="form-text text-muted">You do not have to use the
                                        recommended sizes. However, please use the recommended sizes for your site design to
                                        look its best.</small>

                                    <img id="output"
                                        src="{{ SLIDER_IMAGE_URL . '/' . $slider->id . '/' . $slider->slider_image }}"
                                        alt="your image" width="200px" />

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn btn-primary">Update</button>

                        <a href="{{ route('sliders.create') }}" data-toggle="modal" data-target="#deleteModal_{{$slider->id}}" class="btn btn-danger"> Delete</a>

                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal_{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="teamModalCenterTitle"
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
                   <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
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
