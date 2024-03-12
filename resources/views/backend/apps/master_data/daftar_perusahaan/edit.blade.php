@extends('backend.apps.layout.app')
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
                            <li class="breadcrumb-item"><a href="{{ route('apps.dashboard') }}">Home</a></li>
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
                                <span class="m-0 h5">Edit Data {{ $pages }}</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('apps.daftar_perusahaan') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.daftar_perusahaan.update', $res->perusahaan_id) }}" method="POST">
                                @csrf <!-- Token CSRF -->
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_perusahaan"
                                                id="nama_perusahaan" placeholder="Nama Perusahaan" autocomplete="off"
                                                required value="{{ $res->nama_perusahaan }}">
                                            @error('nama_perusahaan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="npwp_perusahaan" class="col-sm-2 col-form-label">NPWP</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="npwp_perusahaan"
                                                id="npwp_perusahaan" placeholder="NPWP" autocomplete="off" required
                                                value="{{ $res->npwp_perusahaan }}">
                                            @error('npwp_perusahaan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_pic" class="col-sm-2 col-form-label">Nama PIC</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_pic" id="nama_pic"
                                                placeholder="Nama PIC" autocomplete="off" required
                                                value="{{ $res->nama_pic }}">
                                            @error('nama_pic')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jabatan" id="jabatan"
                                                placeholder="Jabatan" autocomplete="off" required
                                                value="{{ $res->jabatan }}">
                                            @error('jabatan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_pic" class="col-sm-2 col-form-label">Nomor PIC</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_pic" id="no_pic"
                                                placeholder="Nomor PIC" autocomplete="off" required
                                                value="{{ $res->no_pic }}">
                                            @error('no_pic')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-info">Simpan</button>
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
