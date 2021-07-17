@extends('layout.master')

@section('title')
Testimonial | Systeqindia Facility Management Services
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
                    <h6 class="card-title">Add New Testimonial</h6>
                    @include('flash::message')

                    <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ old('name') }}">
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
                                        id="job" value="{{ old('job') }}">
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
                                    <label for="star" class="col-form-label">Star</label>
                                    <select name="star" class="form-control  @error('star') is-invalid @enderror" id="star">
                                        <option value="" selected>Select Your Option</option>
                                        <option value="1" {{old ('star') == 1 ? 'selected' : ''}}>1</option>
                                        <option value="2" {{old ('star') == 2 ? 'selected' : ''}}>2</option>
                                        <option value="3" {{old ('star') == 3 ? 'selected' : ''}}>3</option>
                                        <option value="4" {{old ('star') == 4 ? 'selected' : ''}}>4</option>
                                        <option value="5" {{old ('star') == 5 ? 'selected' : ''}}>5</option>
                                    </select>

                                    @error('star')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="team_image">Image (size 270 x 285) (.svg, .jpg, .jpeg, .png)</label>
                                    <input type="file" name="testimonial_image"
                                        class="form-control-file @error('testimonial_image') is-invalid @enderror" id="testimonial_image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                         @error('testimonial_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="testimonial_image" class="form-text text-muted">You do not have to use the
                                        recommended sizes. However, please use the recommended sizes for your site design to
                                        look its best.</small>
                                            <img id="blah"  width="100" />

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
