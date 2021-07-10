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
                    <h6 class="card-title">Add New Team</h6>
                    @include('flash::message')

                    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="facebook">Facebook</label>
                                    <input type="text" name="facebook"
                                        class="form-control @error('facebook') is-invalid @enderror" id="facebook" value="{{ old('facebook') }}">
                                    @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" name="twitter"
                                        class="form-control @error('twitter') is-invalid @enderror" id="twitter" value="{{ old('twitter') }}">
                                    @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" name="instagram"
                                        class="form-control @error('instagram') is-invalid @enderror" id="instagram" value="{{ old('instagram') }}">
                                    @error('instagram')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="text" name="linkedin"
                                        class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" value="{{ old('linkedin') }}">
                                    @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="order">Order</label>
                                    <input type="number" name="order"
                                        class="form-control @error('order') is-invalid @enderror" id="order"
                                        value="{{ old('order',0) }}">
                                    @error('order')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="team_image">Image (size 270 x 285) (.svg, .jpg, .jpeg, .png)</label>
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
