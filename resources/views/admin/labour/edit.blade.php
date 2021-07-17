@extends('layout.master')

@section('title')
Labour | Systeqindia Facility Management Services
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
                    <h6 class="card-title">Add labour</h6>
                    @include('flash::message')

                    <form action="{{ route('labour-management.update',['labour_management' => $labour->id]) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="star" class="col-form-label">Category</label>
                                    <select name="category" class="form-control  @error('category') is-invalid @enderror"
                                        id="category">
                                        <option value="" selected>Select Your Option</option>
                                        @foreach ($categories as $category)
                                        <option value="1" {{ old('category', $labour->category) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Name <span class="text-red">*</span></label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" value="{{ old('name' , $labour->name) }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="order">Mobile </label>
                                    <input type="text" name="mobile"
                                        class="form-control @error('mobile') is-invalid @enderror" id="order"
                                        value="{{ old('mobile', $labour->mobile) }}">
                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="order"> Aadhar Number </label>
                                    <input type="text" name="aadhar_no"
                                        class="form-control @error('aadhar_no') is-invalid @enderror" id="order"
                                        value="{{ old('aadhar_no', $labour->aadhar_no) }}">
                                    @error('aadhar_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="order"> Address </label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror" id="address"
                                        value="{{ old('address',$labour->address) }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
<button type="submit" class="btn btn btn-primary">Update</button>

                        <a href="#" data-toggle="modal" data-target="#deleteModal_{{$labour->id}}" class="btn btn-danger"> Delete</a>
                    </form>


                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="deleteModal_{{$labour->id}}" tabindex="-1" role="dialog" aria-labelledby="teamModalCenterTitle"
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
                   <form action="{{ route('labour-management.destroy', $labour->id) }}" method="POST">
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

    @endpush
