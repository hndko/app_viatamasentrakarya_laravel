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
                                <span class="m-0 h5">Tambah Data {{ $pages }}</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('apps.hrga') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.hrga.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="perusahaan_id" class="col-sm-2 col-form-label">Pilih
                                            Perusahaan</label>
                                        <div class="col-sm-10">
                                            <select name="perusahaan_id" id="perusahaan_id" class="form-control select2bs4"
                                                required>
                                                <option value="">--- Choose ---</option>
                                                @foreach ($perusahaan as $res)
                                                    <option value="{{ $res->perusahaan_id }}"
                                                        {{ old('perusahaan_id') == $res->perusahaan_id ? 'selected' : '' }}>
                                                        {{ $res->nama_perusahaan }}</option>
                                                @endforeach
                                            </select>
                                            @error('perusahaan_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_anggota" id="nama_anggota"
                                                placeholder="Nama Anggota" autocomplete="off"
                                                value="{{ old('nama_anggota') }}">
                                            @error('nama_anggota')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_masuk"
                                                id="tanggal_masuk" autocomplete="off" value="{{ old('tanggal_masuk') }}">
                                            @error('tanggal_masuk')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_telpon" class="col-sm-2 col-form-label">No Telpon</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_telpon" id="no_telpon"
                                                placeholder="No Telpon" autocomplete="off" value="{{ old('no_telpon') }}"
                                                maxlength="20">
                                            @error('no_telpon')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jabatan" id="jabatan"
                                                placeholder="Jabatan" autocomplete="off" value="{{ old('jabatan') }}">
                                            @error('jabatan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_pegawai" class="col-sm-2 col-form-label">No Pegawai</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_pegawai" id="no_pegawai"
                                                placeholder="No Pegawai" autocomplete="off"
                                                value="{{ old('no_pegawai') }}">
                                            @error('no_pegawai')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nik" id="nik"
                                                placeholder="NIK" autocomplete="off" value="{{ old('nik') }}"
                                                maxlength="30">
                                            @error('nik')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_lahir"
                                                id="tanggal_lahir" autocomplete="off"
                                                value="{{ old('tanggal_lahir') }}">
                                            @error('tanggal_lahir')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lokasi" id="lokasi"
                                                placeholder="Lokasi" autocomplete="off" value="{{ old('lokasi') }}"
                                                maxlength="20">
                                            @error('lokasi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bpjs_kesehatan" class="col-sm-2 col-form-label">BPJS Kesehatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="bpjs_kesehatan"
                                                id="bpjs_kesehatan" placeholder="BPJS Kesehatan" autocomplete="off"
                                                value="{{ old('bpjs_kesehatan') }}" maxlength="20">
                                            @error('bpjs_kesehatan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bpjs_tk" class="col-sm-2 col-form-label">BPJS TK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="bpjs_tk" id="bpjs_tk"
                                                placeholder="BPJS TK" autocomplete="off" value="{{ old('bpjs_tk') }}"
                                                maxlength="20">
                                            @error('bpjs_tk')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">PKWT</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" name="pkwt_awal" id="pkwt_awal"
                                                autocomplete="off" value="{{ old('pkwt_awal') }}" required>
                                            @error('pkwt_awal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" name="pkwt_akhir" id="pkwt_akhir"
                                                autocomplete="off" value="{{ old('pkwt_akhir') }}" required>
                                            @error('pkwt_akhir')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kasbon" class="col-sm-2 col-form-label">Kasbon</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="kasbon" id="kasbon"
                                                placeholder="Kasbon" autocomplete="off" value="{{ old('kasbon') }}"
                                                maxlength="20">
                                            @error('kasbon')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slip_gaji" class="col-sm-2 col-form-label">Slip Gaji</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="slip_gaji"
                                                        id="slip_gaji">
                                                    <label class="custom-file-label" for="slip_gaji">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            @error('slip_gaji')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-info">Tambah</button>
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
