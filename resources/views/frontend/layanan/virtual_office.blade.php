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

        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    @foreach ($result as $res)
                        @if ($res->is_active)
                            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                                <div class="pricing-item {{ $res->is_color }}">

                                    <div class="pricing-header">
                                        <h3>{{ $res->judul }}</h3>
                                        @if ($res->is_harga)
                                            <h4><sup>Rp</sup>{{ number_format($res->harga, 0, ',', '.') }}<span>
                                                    Pertahun</span>
                                            </h4>
                                        @endif
                                    </div>
                                    <ul>
                                        @foreach ($res->deskripsi_layanan as $deskripsi)
                                            <li>
                                                <i class="bi bi-dot"></i> {{ $deskripsi->deskripsi }}
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="text-center mt-auto">
                                        <a href="https://wa.me/213123213?text=asdsadsa"
                                            class="buy-btn">{{ $res->is_whatsapp ? 'Pesan Sekarang' : 'Contact Admin' }}</a>
                                        <div class="small mt-3 text-success fw-bold">
                                            Gratis! Layanan Pengiriman Surat (Jabodetabek)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
