@extends('layout.app')

@section('title')
Gallery | Systeqindia Facility Management Services
@endsection

@section('content')



    <section class="similar-projects-area">
        <div class="container-fluid similar-projects-content">
            <div class="similar-project-title text-center">
                <h2>Gallery</h2>
            </div>
            <div class="row">

                @if ($gallery->count() > 0)
                    @foreach ($gallery as $item)
                    <div class="col-xl-4 col-lg-4 col-md-4 mt-4" >
                        <div class="single-project-image-gallery">
                            <a class="html5lightbox wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" href="{{ GALLERY_IMAGE_URL . '/' . $item->images }}">
                            <img src="{{ GALLERY_IMAGE_URL . '/' . $item->images }}" alt="Awesome Image">
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p> No result found </p>
                @endif

            </div>
        </div>
    </section>

@endsection
