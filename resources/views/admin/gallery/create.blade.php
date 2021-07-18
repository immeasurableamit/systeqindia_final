@extends('layout.master')

@section('title')
Gallery | Systeqindia Facility Management Services
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
                <h6 class="card-title">Add gallery</h6>
                @include('flash::message')

                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="images">Image (size 1440 x 910) (.jpg, .jpeg, .png) <span
                                        class="text-red">*</span></label>
                                <input type="file" name="images[]"
                                    class="form-control-file @error('images') is-invalid @enderror"
                                    id="images" multiple>
                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="images" class="form-text text-muted">You do not have to use the
                                    recommended sizes. However, please use the recommended sizes for your site design to
                                    look its best.</small>
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
