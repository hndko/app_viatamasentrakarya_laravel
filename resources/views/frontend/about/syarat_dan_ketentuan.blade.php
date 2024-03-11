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
                <p>Dengan hormat Client Viatama Sentrakarya Indonesia,</p>
                <p>
                    Pada pengerjaan dokumen legalitas ada beberapa informasi yang harus kami
                    ketahui dan prosedur pengerjaan dokumen pun perlu diketahui, maka kami
                    mengatur hal-hal tersebut sebagai berikut:
                </p>
                <ol>
                    <li>
                        Harap konsultasikan terlebih dahulu lokasi bisnis, bidang usaha, dan
                        apakah sudah mempunyai domisili perusahaan atau domisili usaha yang
                        berada pada sistem zonasi yang sesuai dengan peraturan perundangan
                        yang berlaku di DKI Jakarta.
                    </li>
                    <li>
                        Kami akan memberitahukan izin apa saja yang dibutuhkan oleh bisnis
                        Anda.
                    </li>
                    <li>
                        Legalitas kami kerjakan jika sudah membayar sesuai dengan invoice yang
                        kami berikan.
                    </li>
                    <li>
                        Durasi pengerjaan dokumen bergantung pada jenis izin yang diurus. Tim
                        kami berusaha menyelesaikannya kurang dari waktu yang telah
                        ditentukan.
                    </li>
                    <li>Client berhak menanyakan tahapan progress pengerjaan dokumen.</li>
                    <li>
                        Kami akan menginformasikan selesai per dokumen atau jika semua dokumen
                        selesai.
                    </li>
                    <li>
                        Client Viatama Sentrakarya Indonesia dimohon bersikap cooperatif dalam
                        melengkapi kelengkapan dokumen utama maupun tambahan demi kelancaran
                        pengerjaan.
                    </li>
                    <li>
                        Hal-hal lainnya dapat berubah sewaktu-waktu sesuai dengan pertimbangan
                        management PT. Viatama Sentrakarya Bisnis Indonesia
                    </li>
                </ol>
                <p>
                    Ketentuan ini kami buat demi memberikan kenyamanan dan pelayanan terbaik
                    untuk Client Viatama Sentrakarya Indonesia.
                </p>
            </div>
        </section>
    </main>
@endsection
