@extends('layout.master')

@section('title')
Category | Systeqindia Facility Management Services
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
                <h6 class="card-title">Add Category</h6>
                @include('flash::message')

                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Name <span class="text-red">*</span></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="number" name="order" class="form-control @error('order') is-invalid @enderror" id="order" value="{{ old('order', 0) }}">
                                @error('order')
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
