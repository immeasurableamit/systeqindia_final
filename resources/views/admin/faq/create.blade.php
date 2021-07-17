@extends('layout.master')

@push('plugin-styles')

<style>
    .text-red {
            color: red;
        }

    </style>

@endpush

@section('title')
FAQ | Systeqindia Facility Management Services
@endsection

@section('content')



<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Add Faq</h6>
                @include('flash::message')

                <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="question">Question <span class="text-red">*</span></label>
                                <input type="text" name="question" class="form-control @error('question') is-invalid @enderror" id="question" value="{{ old('question') }}">
                                @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="answer">Answer <span class="text-red">*</span></label>
                                <textarea name="answer" id="answer" cols="30" rows="10" class="form-control @error('answer') is-invalid @enderror">{{ old('answer') }}</textarea>
                                @error('answer')
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
