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
                                <span class="m-0 h5">Ubah Data {{ $pages }}</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('apps.pendirian_perusahaan') }}'">Kembali</button>
                                </div>
                            </div>
                            <form
                                action="{{ route('apps.pendirian_perusahaan.update', $pendirian_perusahaan->pendirian_perusahaan_id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="perusahaan_id" class="col-sm-2 col-form-label">Pilih Perusahaan</label>
                                        <div class="col-sm-10">
                                            <select name="perusahaan_id" id="perusahaan_id" class="form-control select2bs4"
                                                required>
                                                <option value="">--- Choose ---</option>
                                                @foreach ($perusahaan as $res)
                                                    <option value="{{ $res->perusahaan_id }}"
                                                        {{ $pendirian_perusahaan->perusahaan_id == $res->perusahaan_id ? 'selected' : '' }}>
                                                        {{ $res->nama_perusahaan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('perusahaan_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_invoice" class="col-sm-2 col-form-label">No Invoice</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_invoice" id="no_invoice"
                                                placeholder="No Invoice" autocomplete="off"
                                                value="{{ $pendirian_perusahaan->no_invoice }}" required>
                                            @error('no_invoice')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="harga" id="harga"
                                                placeholder="Harga" autocomplete="off"
                                                value="{{ $pendirian_perusahaan->harga }}" required>
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="estiminasi_pekerjaan" class="col-sm-2 col-form-label">Estiminasi
                                            Pekerjaan</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="estiminasi_pekerjaan"
                                                id="estiminasi_pekerjaan" placeholder="Estiminasi Pekerjaan"
                                                autocomplete="off"
                                                value="{{ $pendirian_perusahaan->estiminasi_pekerjaan }}" required>
                                            @error('estiminasi_pekerjaan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_pembayaran" class="col-sm-2 col-form-label">Tanggal
                                            Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_pembayaran"
                                                id="tanggal_pembayaran" autocomplete="off"
                                                value="{{ $pendirian_perusahaan->tanggal_pembayaran === null ? '' : $pendirian_perusahaan->tanggal_pembayaran }}">
                                            @error('tanggal_pembayaran')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bukti_pembayaran" class="col-sm-2 col-form-label">Bukti
                                            Transfer</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="bukti_pembayaran"
                                                        id="bukti_pembayaran">
                                                    <label class="custom-file-label" for="bukti_pembayaran">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            @error('bukti_pembayaran')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="keterangan" id="keterangan"
                                                placeholder="keterangan" autocomplete="off"
                                                value="{{ $pendirian_perusahaan->keterangan }}">
                                            @error('keterangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-info">Ubah</button>
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
