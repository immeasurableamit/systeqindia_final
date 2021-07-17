@extends('layout.app')

@section('title')
About | Systeqindia Facility Management Services
@endsection

@section('content')

    <!--Start blog area-->
   <section class="latest-blog-area container" id='blog'>
        <div class="container inner-content">
            <div class="sec-title text-center">
                <div class="title">About <span></span></div>
            </div>
              <div class="row">
                <!--Start Single Testimonial Item-->

                <p>{!! $about->description !!}</p>

            </div>
        </div>
    </section>
    <!--End blog area-->

@endsection
