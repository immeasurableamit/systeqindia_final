@extends('layout.app')

@section('title')
Contact | Systeqindia Facility Management Services
@endsection

@section('content')

   <section class="appointment-area container" style="background-image:url(images/resources/appointment-bg.jpg);" id='contact'>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="map-content-box">
                        <div class="sec-title">
                            <p>Contact Details</p>
                            <div class="title">How Can We <span>Help You?</span></div>
                        </div>
                        <div class="inner paroller">
                            <img src="{{ asset('public/main/images/resources/map.png')}}" alt="Map">
                            <div class="overlay">
                                <div class="single-location-box one wow zoomIn" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <!--<div class="marker-box">
                                                            <span class="icon-pin"></span>
                                                        </div>-->
                                    <!--  <div class="location-info">
                                                            <h3>Bengaluru,India</h3>
                                                            <p>2nd Main Road<br>+91 84003 80044<br>systeqindia@gmail.com</p>
                                                        </div>-->
                                </div>
                                <div class="single-location-box two wow zoomIn" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <!--<div class="marker-box">
                                                            <span class="icon-pin"></span>
                                                        </div>-->
                                    <!--<div class="location-info">
                                                            <h3>Bengaluru,India</h3>
                                                            <p>2nd Main Road<br>+91 84003 80044<br>systeqindia@gmail.com</p>
                                                        </div>-->
                                </div>
                                <div class="single-location-box three wow zoomIn" data-wow-delay="500ms"
                                    data-wow-duration="1500ms">
                                    <div class="marker-box">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="location-info">
                                        <h3>Bengaluru,India</h3>
                                        <p>{{ $setting->address }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="appointment-box wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="title-box">

                    @include('flash::message')

                            <h2>Contact Us</h2>

                        </div>
                        <div class="appointment">
                            <form class="appointment-form" method='post' action="{{ route('contact-us.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="phone_no" placeholder="Phone No." value="{{ old('phone_no') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="address" placeholder="Address." value="{{ old('address') }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <button class="btn-one" type="submit">Submit Here<span
                                                    class="flaticon-next"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
