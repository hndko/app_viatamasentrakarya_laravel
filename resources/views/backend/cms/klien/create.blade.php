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
                                <span class="m-0 h5">Tambah Data {{ $pages }}</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('cms.klien') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('cms.klien.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf <!-- Token CSRF -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama_klien" class="col-sm-2 col-form-label">Nama Klien</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_klien" id="nama_klien"
                                                placeholder="Nama Klien" autocomplete="off" required
                                                value="{{ old('nama_klien') }}"> <!-- Tampilkan kembali nilai input -->
                                            @error('nama_klien')
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
                                                    id="sampul" required>
                                                <label class="custom-file-label" for="sampul">Choose file</label>
                                                @error('sampul')
                                                    <!-- Tampilkan pesan error -->
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
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
