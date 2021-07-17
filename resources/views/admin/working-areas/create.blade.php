@extends('layout.master')

@section('title')
Working Area | Systeqindia Facility Management Services
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
                    <h6 class="card-title">Add working area</h6>
                    @include('flash::message')

                    <form action="{{ route('working-areas.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <textarea name="description"
                                        class="form-control @error('description') is-invalid @enderror" id="description"
                                        rows="3">{{ old('description') }}</textarea>
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
                                        value="{{ old('order', 0) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Image (size 1440 x 910) (.jpg, .jpeg, .png) <span
                                            class="text-red">*</span></label>
                                    <input type="file" name="image"
                                        class="form-control-file @error('image') is-invalid @enderror" id="image">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="image" class="form-text text-muted">You do not have to use the
                                        recommended sizes. However, please use the recommended sizes for your site design to
                                        look its best.</small>
                                </div>
                            </div>

                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="icon">Icon (flaticon) <span
                                            class="text-red">*</span></label>
                                    <input type="text" name="icon"
                                        class="form-control @error('icon') is-invalid @enderror"
                                        id="icon">
                                    @error('icon')
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
