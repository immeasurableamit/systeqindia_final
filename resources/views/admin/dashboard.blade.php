@extends('layout.master')

@section('title')
Dashboard | Systeqindia Facility Management Services
@endsection

@push('plugin-styles')
    <link href="{{ asset('public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}"
        rel="stylesheet" />

@endpush

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>

    </div>

    <div class="row">

        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Blogs</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\Blog::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fab fa-blogger-b font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Banner</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\Slider::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-photo-video menu-icon text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Services</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\Services::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-people-carry font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Teams</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\Teams::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-users font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Slider Services</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\SliderServices::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-people-carry font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Working Areas</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\WorkingAreas::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-users menu-icon font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Mission</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\Missions::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-project-diagram font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Testimonials</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\Testimonial::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-comment-alt menu-icon font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">Pages</h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ App\Models\Page::count() }} </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <i class="fas fa-money-bill font-46 text-primary fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl" style="margin-bottom: 30px;">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Recent Query
                            </h6>
                            <!-- Heading -->
                            <a href="{{ route('contact.index') }}">
                                <span class="font-24 text-dark mb-0">
                                    more
                                </span>
                            </a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">address</th>
                                        <th scope="col">phone</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach (App\Models\Appointment::latest()->get()->take('10') as $contact)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->appartment_name }}</td>
                                            <td>{{ $contact->phone_no }}</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection

@push('plugin-scripts')
    <script src="{{ asset('public/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')

    <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('public/assets/js/datepicker.js') }}"></script>
@endpush
