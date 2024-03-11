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
                <div class="card mb-3 border-0 section-bg">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title h2">Peta Zonasi Provinsi DKI Jakarta Terbaru Beserta Panduannya</h5>
                                <p class="card-text">
                                    Aturan Zonasi merupakan ketentuan yang mengatur tentang pemanfaatan tata ruang pada
                                    suatu
                                    daerah. Pemerintah Provinsi DKI Jakarta mengatur hal tersebut sehingga penggunaan lahan
                                    sesuai dengan peruntukkannya.
                                </p>
                                <p class="card-text">
                                    Langkah-langkah cek zonasi DKI Jakarta, sebagai berikut:
                                    <br>
                                    1. Siapkan koordinat lokasi yang ingin Anda cek. Anda bisa lihat koordinat lokasi
                                    melalui
                                    Google Maps
                                    <br>
                                    <img src="<?= asset('assets/img/tutorial-zonasi/1.png') ?>" class="img-fluid lazyload">
                                </p>
                                <p class="card-text">
                                    2. Klik <a
                                        href="https://jakartasatu.jakarta.go.id/portal/apps/webappviewer/index.html?id=1c1bfcced2cb4852bbeaefcd968a6d04"
                                        target="_blank">Cek Zonasi</a> kemudian ceklist 'Peta Guna Lahan 2021'
                                    <br>
                                    <img src="<?= asset('assets/img/tutorial-zonasi/2.png') ?>" class="img-fluid lazyload">
                                </p>
                                <p class="card-text">
                                    3. Masukkan koordinat pada kolom pencarian, kemudian double klik pada titik lokasi.
                                    PIlih
                                    penggunaan lahan dan klik tanda panah
                                    <br>
                                    <img src="<?= asset('assets/img/tutorial-zonasi/3.png') ?>" class="img-fluid lazyload">
                                </p>
                                <p class="card-text">
                                    4. Anda akan mendapatkan penggunaan lahan atau zonasi lokasi Anda
                                    <br>
                                    <img src="<?= asset('assets/img/tutorial-zonasi/4.png') ?>" class="img-fluid lazyload">
                                </p>
                                <p class="card-text">
                                    Untuk melihat keterangan warna dan peruntukan zonasi dapat download pada <a
                                        href="<?= asset('assets/berkas/Tabel_Zonasi.pdf') ?>" download>Keterangan Tabel
                                        Zonasi.</a>
                                </p>
                                <p class="card-text">
                                    Apabila kesulitan dalam pengecekan dapat mengubungi Admin Viatama Sentra Karya Indonesia
                                    di
                                    whatsapp
                                    +6282116169922.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
