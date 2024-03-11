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
                <section id="cta" class="cta">
                    <div class="row g-5">
                        <div
                            class="col-lg-6 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                            <h3>Space Office Price</h3>
                            <p> Ideal Bussiness Center by Viatama Sentrakarya</p>
                            <a class="cta-btn align-self-start" href="https://wa.me/213123213?text=asdsadsa">Info
                                Lebih Lanjut</a>
                        </div>
                        <div class="col-lg-6 col-md-6 order-first order-md-last d-flex align-items-center">
                            <div class="img">
                                <img src="<?= asset('assets/img/denah.png') ?>" alt="" class="img-fluid lazyload">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection
