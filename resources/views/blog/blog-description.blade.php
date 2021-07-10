@extends('layout.app')

@section('content')

    <!--Start blog area-->
    <section id="blog-area" class="blog-large-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-post">
                        <!--Start Single blog Post style4-->
                        <div class="single-blog-post style4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="{{ BLOG_IMAGE_URL . '/' . $blog->id . '/' . $blog->blog_image }}" alt="{{ $blog->title }}">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="icon-link1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title"><a>{{ $blog->title }}</a></h3>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>By <a >@if ($blog->created_by == 1)
                                        SysteqIndia
                                        @else
                                        Admin
                                        @endif</a></li>
                                        <li>On <a href="#">{{ date('M-d-Y', strtotime($blog->created_at)) }}</a></li>

                                    </ul>
                                </div>
                                <div class="text">
                                    <p>{!! $blog->description  !!}</p>
                                </div>

                            </div>
                        </div>
                        <!--End Single blog Post style4-->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End blog area-->

@endsection
