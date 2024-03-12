@extends('backend.cms.layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $pages }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('cms.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ $pages }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <span class="m-0 h5">Ubah Data {{ $pages }}</span>
                            </div>
                            <form action="{{ route('cms.space_office.update') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf <!-- Token CSRF -->
                                @method('PUT') <!-- Menggunakan method PUT untuk update -->

                                <div class="card-body">
                                    <!-- Jika ada pesan sukses, tampilkan -->
                                    @if (session('success'))
                                        <div id="success-alert" class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" id="judul"
                                                placeholder="Judul" autocomplete="off" required
                                                value="{{ old('judul', $res->judul) }}">
                                            @error('judul')
                                                <!-- Tampilkan pesan error -->
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                                                placeholder="deskripsi" autocomplete="off" required
                                                value="{{ old('deskripsi', $res->deskripsi) }}">
                                            @error('deskripsi')
                                                <!-- Tampilkan pesan error -->
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                                        <div class="col-sm-10">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="sampul"
                                                    id="sampul">
                                                <label class="custom-file-label" for="sampul">Choose file</label>
                                                @error('sampul')
                                                    <!-- Tampilkan pesan error -->
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <img src="{{ asset('assets/img/' . $res->sampul) }}" alt="{{ $res->sampul }}"
                                                class="mt-2" style="max-width: 250px;">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
