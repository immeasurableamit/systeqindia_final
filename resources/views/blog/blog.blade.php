@extends('layout.app')

@section('content')

    <!--Start blog area-->
   <section class="latest-blog-area" id='blog'>
        <div class="container inner-content">
            <div class="sec-title text-center">
                <div class="title">Blog <span></span></div>
            </div>
            <div class="row">
                <!--Start single blog post-->
                @foreach ($blogs as $blog)

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img  src="{{ BLOG_IMAGE_URL . '/' . $blog->id . '/' . $blog->blog_image }}"
                                        alt="{{ $blog->title }}">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="link-icon">
                                        <a href="#"><span class="flaticon-zoom"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <h3>{{ date('d', strtotime($blog->created_at)) }}
                                <span> {{ date('M-Y', strtotime($blog->created_at)) }}</span></h3>
                            </div>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a>
                                        @if ($blog->created_by == 1)
                                        SysteqIndia
                                        @else
                                        Admin
                                        @endif
                                    </a></li>

                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-single.html">{{ \Illuminate\Support\Str::limit($blog->title, 33, '...') }}</a></h3>
                            <div class="text">
                                @php
                                $description =Str::limit($blog->description, 100);
                                @endphp
                                <p>{!! $blog->title  !!}</p>
                                <a class="btn-two" href="{{ url('blog',['slug' => $blog->slug]) }}">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                <!--End single blog post-->

            </div>
        </div>
    </section>
    <!--End blog area-->

@endsection
