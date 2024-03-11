@extends('backend.cms.layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <!-- Content header -->
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <span class="m-0 h5">Ubah Data {{ $pages }}</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('cms.kbli') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('cms.kbli.update') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf <!-- Token CSRF -->
                                @method('PUT') <!-- Menggunakan method PUT untuk update -->

                                <div class="card-body">
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
                                                class="mt-2" style="max-width: 100px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" id="judul"
                                                placeholder="Judul" autocomplete="off" required
                                                value="{{ old('judul', $res->judul) }}">
                                            <!-- Tampilkan kembali nilai input -->
                                            @error('judul')
                                                <!-- Tampilkan pesan error -->
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea name="deskripsi" id="default" cols="30" rows="4" class="form-control" required>{{ old('deskripsi', $res->deskripsi) }}</textarea>
                                            @error('deskripsi')
                                                <!-- Tampilkan pesan error -->
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="file_uploaded" class="col-sm-2 col-form-label">File Upload</label>
                                        <div class="col-sm-10">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="file_uploaded"
                                                    id="file_uploaded">
                                                <label class="custom-file-label" for="file_uploaded">Choose file</label>
                                                @error('file_uploaded')
                                                    <!-- Tampilkan pesan error -->
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
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
