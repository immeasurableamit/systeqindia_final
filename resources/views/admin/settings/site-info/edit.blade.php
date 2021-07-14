@extends('layout.master')

@section('title')
Site Setting
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
                        <h6 class="card-title mb-0">Site INFO</h6>
                        <div>
                        </div>
                    </div>
                    @include('flash::message')

                    <form action="{{ route('site-info.update',['site_info' => $siteInfo->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="flash_message">Flash Message</label>
                                    <textarea class="form-control @error('flash_message') is-invalid @enderror"
                                        id="flash_message" name="flash_message"
                                        rows="3">{{ old('flash_message',$siteInfo->flash_message) }}</textarea>
                                    @error('flash_message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="flash_message">Marquee Message</label>
                                    <textarea class="form-control @error('marquee_message') is-invalid @enderror"
                                        id="marquee_message" name="marquee_message"
                                        rows="3">{{ old('marquee_message',$siteInfo->marquee_message) }}</textarea>
                                    @error('marquee_message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror"
                                        id="short_description" name="short_description"
                                        rows="3">{{ old('short_description',$siteInfo->short_description) }}</textarea>
                                    @error('short_description')
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
                                        class="form-control @error('facebook') is-invalid @enderror" id="facebook" value="{{ old('facebook', $siteInfo->facebook) }}">
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
                                        class="form-control @error('twitter') is-invalid @enderror" id="twitter" value="{{ old('twitter', $siteInfo->twitter) }}">
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
                                        class="form-control @error('instagram') is-invalid @enderror" id="instagram" value="{{ old('instagram', $siteInfo->instagram) }}">
                                    @error('instagram')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="whatsapp">Whatsapp</label>
                                    <input type="text" name="whatsapp"
                                        class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" value="{{ old('whatsapp', $siteInfo->whatsapp) }}">
                                    @error('whatsapp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="skype">Skype</label>
                                    <input type="text" name="skype"
                                        class="form-control @error('skype') is-invalid @enderror" id="skype" value="{{ old('skype', $siteInfo->whatsapp) }}">
                                    @error('skype')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="copyright">Copyright</label>
                                    <input type="text" name="copyright"
                                        class="form-control @error('copyright') is-invalid @enderror" id="copyright"
                                        value="{{ old('copyright', $siteInfo->copyright) }}">
                                    @error('copyright')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror" id="address"
                                        value="{{ old('address', $siteInfo->address) }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address_map">Address Map Link</label>
                                    <input type="text" name="address_map"
                                        class="form-control @error('address_map') is-invalid @enderror" id="address_map"
                                        value="{{ old('address_map',  $siteInfo->address_map) }}">
                                    @error('address_map')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        value="{{ old('email',  $siteInfo->email) }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        value="{{ old('phone',  $siteInfo->phone) }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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






