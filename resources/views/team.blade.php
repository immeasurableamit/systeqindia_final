@extends('layout.app')

@section('title')
Our Team | Systeqindia Facility Management Services
@endsection

@section('content')

    <!--Start blog area-->
   <section class="latest-blog-area" id='blog'>
        <div class="container inner-content">
            <div class="sec-title text-center">
                <div class="title">Teams <span></span></div>
            </div>
              <div class="row">
                <!--Start Single Testimonial Item-->
                @foreach ($teams as $team)
                    <div class="col-xl-12 col-lg-12">
                        <div class="single-testimonial-item text-center">
                            <div class="quote-icon">
                                <span class="icon-quote1"></span>
                            </div>
                            <div class="inner-content">
                                <div class="client-info">
                                    <h3>{{ $team->name }}</h3>
                                    <span>{{ $team->job }}</span>
                                </div>
                                <div class="img-box">
                                    <img src="{{ TEAM_IMAGE_URL . '/' . $team->id . '/' . $team->image }}"
                                        alt="{{ $team->name }}">
                                </div>
                                <div class="text-box">

                                    <p class="">{{ $team->description }}</p>
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
