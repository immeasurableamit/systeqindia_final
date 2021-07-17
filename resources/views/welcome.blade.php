@extends('layout.app')

@section('title')
Systeqindia Facility Management Services
@endsection

@section('content')


    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    @foreach ($sliders as $slider)


                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="images/slides/1.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ SLIDER_IMAGE_URL . '/' . $slider->id . '/' . $slider->slider_image }}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['800','800','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-160','-100','-110','-105']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    {{ $slider->title }}
                                </div>
                            </div>
                        </div>


                    </li>

                    @endforeach


                    {{-- <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="images/slides/2.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="images/slides/2.jpg">


                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','800','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-160','-100','-110','-105']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    GARDENING MAINTENANCE
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','800','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-75','-10','-25','-30']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <!-- <div class="slide-content left-slide">
                                                    <div class="text">Our power of choice is untrammelled and when nothing prevents <br>our being able to do what we like best.</div>
                                                </div>-->
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','800','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['25','90','100','85']" data-x="['right','right','right','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <!--  <div class="slide-content left-slide">
                                                    <div class="btn-box">
                                                        <a class="btn-one" href="#">Our Services<span class="flaticon-next"></span></a>
                                                        <a class="project-view-button" href="#">Project 360<span style="font-size: 20px;">&deg</span>View</a>
                                                    </div>
                                                </div>-->
                        </div>
                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="images/slides/3.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="images/slides/3.jpg">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['800','800','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-160','-100','-110','-105']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    ELECTRICAL MAINTENANCE
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['800','800','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-75','-10','-25','-30']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <!--<div class="slide-content left-slide">
                                                    <div class="text">Our power of choice is untrammelled and when nothing prevents <br>our being able to do what we like best.</div>
                                                </div>-->
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['800','800','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['25','90','100','85']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <!--<div class="slide-content left-slide">
                                                    <div class="btn-box">
                                                        <a class="btn-one" href="#">About Company<span class="flaticon-next"></span></a>
                                                        <a class="project-view-button" href="#">Project 360<span style="font-size: 20px;">&deg</span>View</a>
                                                    </div>
                                                </div>-->
                        </div>
                    </li> --}}

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Start Highlights Area-->
    <section class="highlights-area" id='about'>
        <div class="container">
            <div class="row">
                <!--Start single highlight box-->
                @foreach ($sliderServices as $sliderService)

                <div class="col-xl-4 col-lg-4">
                    <div class="single-highlight-box text-center wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1200ms">
                        <div class="icon-holder">
                            <span class="{{ $sliderService->slider_image }}"></span>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <h3>{{ $sliderService->title }}</h3>
                                <p>{{ $sliderService->description }}</p>
                            </div>
                            <!--<a class="btn-one" href="#">Read More<span class="flaticon-next"></span></a>-->
                        </div>
                    </div>
                </div>

                @endforeach

                <!--End single highlight box-->


            </div>
        </div>
    </section>
    <!--End Highlights Area-->

    <!--Start about area-->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about-image-box">
                        <div class="inner-box">
                            <img src="{{ FOUNDER_MESSAGE_IMAGE_URL . '/' . $founder_message->id . '/' . $founder_message->founder_message_image }}" alt="{{ $founder_message->name }}">
                        </div>
                        <div class="text-box">
                            <p>{{ $founder_message->description }}</p>
                            <h3>{{ $founder_message->name }}, <span>{{ $founder_message->job }} </span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about-text">
                        <div class="sec-title">
                            <p>{{ $about->title }}</p>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                               <p>{!! $about->description !!}</p>

                            </div>
                            <div class="about-carousel-box owl-carousel owl-theme">
                                <!--Start Single Box-->
                                @foreach ($mission as $item)

                                <div class="single-box">
                                    <div class="icon-holder">
                                        <span class="icon-target"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                                @endforeach

                                <!--End Single Box-->


                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End about Area-->

    <!--Start Working Area-->
    <section class="working-area" style="background-image:url(images/parallax-background/working-bg.jpg);" id='services'>
        <div class="container">
            <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms"
                data-wow-duration="1200ms">
                <p>Working Areas</p>
                <div class="title clr-white">Covered <span>Industries</span></div>
                <p class="bottom-text">We believe in excellence, quality, transparency and honesty so that we can deliver
                    what we promise.</p>
            </div>
            <div class="row">
                <!--Start Single Working Box-->
                @foreach ($industries as $industrie)

                <div class="col-xl-4 col-lg-4">
                    <div class="single-working-box wow fadeInDown" data-wow-delay="0ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ WORKING_IMAGE_URL . '/' . $industrie->id . '/' . $industrie->image }}" alt="Awesome Image">
                                <div class="overlay-style-one"></div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="plus-icon-box"><span class="icon-plus"></span></div>
                            <div class="outer-box">
                                <div class="icon">
                                    <div class="inner">
                                        <div class="box">
                                            <span class="{{ $industrie->icon }}"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3>{{ ucfirst($industrie->title) }}</h3>
                                    <p>{{ $industrie->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--End Single Working Box-->

            </div>
        </div>
    </section>
    <!--End Working Area-->




    <!--Start All Services  Area-->
    <section class="working-area" style="background-image:url(images/parallax-background/working-bg.jpg);">
        <div class="container">
            <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms"
                data-wow-duration="1200ms">
                <p>Services</p>
                <div class="title clr-white">Our<span>Services</span></div>
                <p class="bottom-text">Providing Services 24/7 with complete integrity.</p>
            </div>
            <div class="row">
                <!--Start Single Working Box-->
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

                           <!--End Single Working Box-->
            </div>
        </div>
    </section>
    <!--End  All Services  Area-->


    <!--Start Testimonial Area-->
    <section class="testimonial-area" id='our_team'>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title float-left">
                        <p>Team</p>
                        <div class="title">Our <span>Team</span></div>
                    </div>
                    <!--    <div class="more-reviews-button float-right">
                                            <a class="btn-two" href="#">More Reviews<span class="flaticon-next"></span></a>
                                        </div>-->
                </div>
            </div>
            <div class="row">
                <!--Start Single Testimonial Item-->
                @foreach ($teams as $team)
                    <div class="col-xl-4 col-lg-4">
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

                                    <p class="">{{ \Illuminate\Support\Str::limit($team->description, 100, '...') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Single Testimonial Item-->

            </div>
        </div>
    </section>
    <!--End Testimonial Area-->

    <!--Start appointment Area-->
    <section class="appointment-area" style="background-image:url(images/resources/appointment-bg.jpg);" id='contact'>
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
    <!--End appointment Area-->

    <!--Start latest blog area-->
    @if (!empty($blogs))
           <section class="latest-blog-area" id='blog'>
        <div class="container inner-content">
            <div class="sec-title text-center">
                <p>News & Updates</p>
                <div class="title">Latest From <span>Blog</span></div>
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
    @endif
    <!--End latest blog area-->

    <!-- Start modal  -->
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Welcome To SYSTEQIndia </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>


                    </div>
                    <div class="modal-body">

                        <div class="appointment">
                            <form class="appointment-form" method='post'
                                action="{{ route('appointment.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="name" value=""
                                                placeholder="Contact Person Name." required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="appartment_name" value=""
                                                placeholder="Apartment Name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="email" name="email" value="" placeholder="Email"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-box">
                                            <input type="text" name="phone_no" value="" placeholder="Phone No."
                                                required="">
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
    </div>
    <!-- end   modal  -->




@endsection

