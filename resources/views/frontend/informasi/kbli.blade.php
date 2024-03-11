@extends('frontend.layout.app')
@section('content')
    <main id="main">
        <div class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2><?= $pages ?></h2>
                    <ol>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li><?= $pages ?></li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="inner-page">
            <div class="container" data-aos="fade-up">
                <div class="card mt-5 mb-5 border-0 section-bg">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= asset('assets/img/' . $res->sampul) ?>" class="img-fluid rounded lazyload"
                                alt="{{ $res->judul }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title h2">{{ $res->judul }}</h5>
                                {!! $res->deskripsi !!}
                                <a href="{{ asset('assets/berkas/' . $res->file_uploaded) }}"
                                    class="btn btn-primary btn-sm rounded-2 w-100" download>Download KBLI
                                    Terbaru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
