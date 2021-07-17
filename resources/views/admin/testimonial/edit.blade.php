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
                    <div class="d-md-flex justify-content-between align-items-center mb-20">
                        <h6 class="card-title mb-0">Update Testimonial</h6>

                    </div>
                    @include('flash::message')

                    <form action="{{ route('testimonial.update',['testimonial' => $testimonial->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ empty($testimonial->name) ? '' : old('name', $testimonial->name) }}">
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
                                        id="job" value="{{ empty($testimonial->job) ? '' : old('job', $testimonial->job) }}">
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
                                        rows="3">{{ empty($testimonial->description) ? '' : old('description', $testimonial->description) }}</textarea>
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
                                        <option value="1" {{ old('star', $testimonial->star) == 1 ? 'selected' : ''}}>1</option>
                                        <option value="2" {{ old('star', $testimonial->star) == 2 ? 'selected' : ''}}>2</option>
                                        <option value="3" {{ old('star', $testimonial->star) == 3 ? 'selected' : ''}}>3</option>
                                        <option value="4" {{ old('star', $testimonial->star) == 4 ? 'selected' : ''}}>4</option>
                                        <option value="5" {{ old('star', $testimonial->star) == 5 ? 'selected' : ''}}>5</option>
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
                                         <img id="blah"
                                        src="{{ TESTIMONIAL_IMAGE_URL . '/' . $testimonial->id . '/' . $testimonial->testimonial_image }}"
                                        alt="your image" width="200px" />
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn btn-primary">Update</button>

                        <a href="{{ route('testimonial.create') }}" data-toggle="modal" data-target="#deleteModal_{{$testimonial->id}}" class="btn btn-danger"> Delete</a>

                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal_{{$testimonial->id}}" tabindex="-1" role="dialog" aria-labelledby="teamModalCenterTitle"
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
                   <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
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

    @endpush
