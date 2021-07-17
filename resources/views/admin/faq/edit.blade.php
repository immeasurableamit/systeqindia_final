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
                    <div class="d-md-flex justify-content-between align-items-center mb-20">
                        <h6 class="card-title mb-0">Update Faq</h6>
                        <div>
                        </div>
                    </div>
                    @include('flash::message')

                    <form action="{{ route('faq.update', ['faq' => $faq->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="question">Question <span class="text-red">*</span></label>
                                    <input type="text" name="question"
                                        class="form-control @error('question') is-invalid @enderror" id="question"
                                        value="{{ old('question', $faq->question) }}">
                                    @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <textarea name="answer" id="answer" cols="30" rows="10" class="form-control @error('answer') is-invalid @enderror">{{ old('answer', $faq->answer) }}</textarea>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn btn-primary">Update</button>

                        <a href="#" data-toggle="modal" data-target="#deleteModal_{{ $faq->id }}"
                            class="btn btn-danger"> Delete</a>

                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal_{{ $faq->id }}" tabindex="-1" role="dialog"
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
                    <form action="{{ route('faq.destroy', $faq->id) }}" method="POST">
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
    <script src="{{ asset('public/assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/select2/select2.min.js') }}"></script>
@endpush
