@extends('layout.master')

@section('title')
Founder Message | Systeqindia Facility Management Services
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
                        <h6 class="card-title mb-0">Founder Message</h6>

                    </div>
                    @include('flash::message')

                    <form action="{{ route('founder-message.update',['founder_message' => 1]) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ empty($founder_message->name) ? '' : old('name', $founder_message->name) }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="job">Job</label>
                                    <input type="text" name="job" class="form-control @error('job') is-invalid @enderror"
                                        id="job" value="{{ empty($founder_message->job) ? '' : old('job', $founder_message->job) }}">
                                    @error('job')
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
                                        rows="3">{{ empty($founder_message->description) ? '' : old('description', $founder_message->description) }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="team_image">Image (size 270 x 285) (.svg, .jpg, .jpeg, .png)</label>
                                    <input type="file" name="founder_message_image"
                                        class="form-control-file @error('founder_message_image') is-invalid @enderror" id="founder_message_image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                         @error('founder_message_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="founder_message_image" class="form-text text-muted">You do not have to use the
                                        recommended sizes. However, please use the recommended sizes for your site design to
                                        look its best.</small>
                                         <img id="blah"
                                        src="{{ empty($founder_message->founder_message_image) ? '' : old('founder_message_image', FOUNDER_MESSAGE_IMAGE_URL . '/' . $founder_message->id . '/' . $founder_message->founder_message_image) }}"
                                        alt="your image" width="200px" />
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

    @endpush
