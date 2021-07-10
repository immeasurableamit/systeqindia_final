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
        <div class="col-xl-12 box-margin height-card">
            <div class="card card-body">
                <h4 class="card-title">Site Images</h4>
                <form action="{{ route('site-image.update', ['site_image' => $setting->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="favicon">Favicon (size 128 x 128) (.svg, .jpg, .jpeg, .png)</label>
                                <input type="file" name="favicon" class="form-control-file" id="favicon">

                                <small id="favicon" class="form-text text-muted">You do not have to use the
                                    recommended sizes. However, please use the recommended sizes for your site design to
                                    look its best.</small>
                            </div>

                            <div class="height-card box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="avatar-area text-center">
                                            <div class="media">
                                                <a class="d-block mx-auto" href="#" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Current Image">
                                                    <img src="{{ FAVICON_IMAGE_URL . '/' . $setting->id . '/' . $setting->favicon }}"
                                                        alt="favicon image" class="rounded w-25">
                                                </a>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="admin_logo">Admin Logo Image (size 328 x 96) (.svg, .jpg, .jpeg,
                                    .png)</label>
                                <input type="file" name="admin_logo" class="form-control-file" id="admin_logo">
                                <small id="admin_logo" class="form-text text-muted">You do not have to use the
                                    recommended sizes. However, please use the recommended sizes for your site design to
                                    look its best.</small>
                            </div>
                            <div class="height-card box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="avatar-area text-center">
                                            <div class="media">
                                                <a class="d-block mx-auto" href="#" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Current Image">
                                                    <img src="{{ ADMIN_LOGO_IMAGE_URL . '/' . $setting->id . '/' . $setting->admin_logo }}"
                                                        alt="logo image" class="rounded w-25">
                                                </a>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="admin_small_logo">Admin Small Logo (size 112 x 96) (.svg, .jpg, .jpeg,
                                    .png)</label>
                                <input type="file" name="admin_small_logo" class="form-control-file" id="admin_small_logo">
                                <small id="admin_small_logo" class="form-text text-muted">You do not have to use the
                                    recommended sizes. However, please use the recommended sizes for your site design to
                                    look its best.</small>
                            </div>
                            <div class="height-card box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="avatar-area text-center">
                                            <div class="media">
                                                <a class="d-block mx-auto" href="#" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Current Image">
                                                    <img src="{{ ADMIN_SMALL_LOGO_IMAGE_URL . '/' . $setting->id . '/' . $setting->admin_small_logo }}"
                                                        alt="logo image" class="rounded w-25">
                                                </a>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="site_logo">Site Colored Logo (size 120 x 60) (.svg, .jpg, .jpeg,
                                    .png)</label>
                                <input type="file" name="site_logo" class="form-control-file" id="site_logo">
                                <small id="site_logo" class="form-text text-muted">You do not have to use the
                                    recommended sizes. However, please use the recommended sizes for your site design to
                                    look its best.</small>
                            </div>
                            <div class="height-card box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="avatar-area text-center">
                                            <div class="media">
                                                <a class="d-block mx-auto" href="#" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Current Image">
                                                    <img src="{{ SITE_LOGO_IMAGE_URL . '/' . $setting->id . '/' . $setting->site_logo }}"
                                                        alt="logo image" class="rounded w-25">
                                                </a>
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@push('plugin-scripts')
    <script src="{{ asset('public/assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/select2/select2.min.js') }}"></script>
@endpush
