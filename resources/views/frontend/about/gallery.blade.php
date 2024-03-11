@extends('frontend.layout.app')
@section('content')
    <main id="main">
        <div class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $pages }}</h2>
                    <ol>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>{{ $pages }}</li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="inner-page">
            <div class="container" data-aos="fade-up">
                <section id="portfolio" class="portfolio" data-aos="fade-up">
                    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                        data-portfolio-sort="original-order">
                        <div class="row g-2">
                            @foreach ($images as $image)
                                <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item d-flex align-content-center">
                                    <img src="{{ asset('assets/img/gallery/' . $image->sampul) }}" class="img-fluid"
                                        alt="">
                                    <div class="portfolio-info">
                                        <a href="{{ asset('assets/img/gallery/' . $image->sampul) }}"
                                            data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection
