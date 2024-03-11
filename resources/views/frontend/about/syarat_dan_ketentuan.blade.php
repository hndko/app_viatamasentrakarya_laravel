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
                {!! $res->deskripsi !!}
            </div>
        </section>
    </main>
@endsection
