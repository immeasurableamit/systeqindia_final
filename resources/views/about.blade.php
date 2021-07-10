@extends('layout.app')

@section('content')

    <!--Start blog area-->
   <section class="latest-blog-area" id='blog'>
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
