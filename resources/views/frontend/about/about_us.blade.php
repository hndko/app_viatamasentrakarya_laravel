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
                <div class="card mb-3 border-0 section-bg">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/logo-portrait.png') }}"
                                class="img-fluid rounded-start lazyload" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title h2">Tentang Kami</h5>
                                {!! $res->deskripsi !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
