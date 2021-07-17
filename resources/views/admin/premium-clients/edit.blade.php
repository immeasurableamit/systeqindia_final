@extends('layout.master')

@section('title')
Premium Clients | Systeqindia Facility Management Services
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
                        <h6 class="card-title mb-0">Update Premium Clients</h6>
                        <div>
                        </div>
                    </div>
                    @include('flash::message')

                    <form action="{{ route('premium-clients.update',['premium_client' => $premium_client->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-red">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        value="{{ old('title', $premium_client->title) }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Image (size 1440 x 910) (.jpg, .jpeg, .png) <span
                                            class="text-red">*</span></label>
                                    <input type="file" name="image"
                                        class="form-control-file @error('image') is-invalid @enderror"
                                        id="image" onchange="loadFile(event)">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <small id="image" class="form-text text-muted">You do not have to use the
                                        recommended sizes. However, please use the recommended sizes for your site design to
                                        look its best.</small>

                                    <img id="output"
                                        src="{{ PREMIUM_CLIENTS_IMAGE_URL . '/' . $premium_client->id . '/' . $premium_client->image }}"
                                        alt="your image" width="200px" />

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn btn-primary">Update</button>

                        <a href="#" data-toggle="modal" data-target="#deleteModal_{{$premium_client->id}}" class="btn btn-danger"> Delete</a>

                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal_{{$premium_client->id}}" tabindex="-1" role="dialog" aria-labelledby="teamModalCenterTitle"
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
                   <form action="{{ route('premium-clients.destroy', $premium_client->id) }}" method="POST">
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
