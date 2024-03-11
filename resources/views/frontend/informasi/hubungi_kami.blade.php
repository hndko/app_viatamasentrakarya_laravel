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

        <section id="contact" class="contact">
            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-5">
                        <div class="info" style="padding-bottom: 60px">
                            <h3>Contact Us</h3>

                            <div class="info-item">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>
                                        admin@viatama.co.id <br>
                                        cs@viatama.co.id
                                    </p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>
                                        021 2853-7846 <br />
                                        0821-1616-9922
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="{{ route('hubungi-kami.store') }}" method="post" role="form" class="php-form">
                            @if ($errors->any())
                                <div class="alert alert-danger" id="success-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success" id="success-alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required value="{{ old('name') }}" autocomplete="off"
                                        required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required value="{{ old('email') }}" autocomplete="off"
                                        required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required value="{{ old('subject') }}" autocomplete="off" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
