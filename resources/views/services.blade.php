@extends('layout.app')

@section('title')
Services | Systeqindia Facility Management Services
@endsection

@section('content')

    <!--Start blog area-->
   <section class="latest-blog-area" id='blog'>
        <div class="container inner-content">
            <div class="sec-title text-center">
                <div class="title">services <span></span></div>
            </div>
              <div class="row">
                <!--Start Single Testimonial Item-->
                @foreach ($services as $service)
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-working-box wow fadeInDown" data-wow-delay="0ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ SERVICE_IMAGE_URL . '/' . $service->id . '/' . $service->image }}"
                                        alt="{{ $service->title }}">
                                    <div class="overlay-style-one"></div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="plus-icon-box"><span class="icon-plus"></span></div>
                                <div class="outer-box" style='padding-left: 2px !important;'>
                                    <div class="text">
                                        <h3 style="font-size: revert;">{{ strtoupper($service->title) }}</h3>
                                        <p>{{ $service->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Single Testimonial Item-->

            </div>
        </div>
    </section>
    <!--End blog area-->

@endsection
