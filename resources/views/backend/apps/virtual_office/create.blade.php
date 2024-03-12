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
                                        onclick="window.location.href='{{ route('apps.virtual_office') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.virtual_office.store') }}" method="POST"
                                enctype="multipart/form-data">
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
                                                    <option value="{{ $res->perusahaan_id }}">
                                                        {{ $res->nama_perusahaan }}</option>
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
                                                placeholder="No Invoice" autocomplete="off" value="{{ old('no_invoice') }}">
                                            @error('no_invoice')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="layanan_id" class="col-sm-2 col-form-label">Pilih
                                            Layanan Virtual</label>
                                        <div class="col-sm-10">
                                            <select name="layanan_id" id="layanan_id" class="form-control select2bs4"
                                                required>
                                                <option value="">--- Choose ---</option>
                                                @foreach ($layanan as $res)
                                                    <option value="{{ $res->layanan_id }}"
                                                        data-harga="{{ $res->harga }}">
                                                        {{ $res->judul }}</option>
                                                @endforeach
                                            </select>
                                            @error('layanan_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control bg-transparent" name="harga"
                                                id="harga" placeholder="Harga" autocomplete="off"
                                                value="{{ old('harga') }}" readonly>
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ppn" class="col-sm-2 col-form-label">PPn</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control bg-transparent" name="ppn"
                                                id="ppn" placeholder="PPn" autocomplete="off"
                                                value="{{ old('ppn') }}" readonly>
                                            @error('ppn')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pph_23" class="col-sm-2 col-form-label">PPh 23</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control bg-transparent" name="pph_23"
                                                id="pph_23" placeholder="PPh 23" autocomplete="off"
                                                value="{{ old('pph_23') }}" readonly>
                                            @error('pph_23')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Masa Sewa</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" name="awal_sewa" id="awal_sewa"
                                                autocomplete="off" value="{{ old('awal_sewa') }}" required>
                                            @error('awal_sewa')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" name="akhir_sewa" id="akhir_sewa"
                                                autocomplete="off" value="{{ old('akhir_sewa') }}" required>
                                            @error('akhir_sewa')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_pembayaran" class="col-sm-2 col-form-label">Tanggal
                                            Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tgl_pembayaran"
                                                id="tgl_pembayaran" autocomplete="off"
                                                value="{{ old('tgl_pembayaran') }}">
                                            @error('tgl_pembayaran')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="metode_pembayaran" class="col-sm-2 col-form-label">Metode
                                            Pembayaran</label>
                                        <div class="col-sm-10">
                                            <select name="metode_pembayaran" id="metode_pembayaran"
                                                class="form-control select2bs4">
                                                <option value="">--- Choose ---</option>
                                                <option value="TF Bank BCA">TF Bank BCA</option>
                                                <option value="TF Bank Mandiri">TF Bank Mandiri</option>
                                                <option value="TF Bank Danamon">TF Bank Danamon</option>
                                                <option value="TF Bank BRI">TF Bank BRI</option>
                                            </select>
                                            @error('metode_pembayaran')
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
                                                    <input type="file" class="custom-file-input"
                                                        name="bukti_pembayaran" id="bukti_pembayaran">
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
                                        <label for="bupot" class="col-sm-2 col-form-label">Bupot</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="bupot" id="bupot"
                                                placeholder="Bupot" autocomplete="off" value="{{ old('bupot') }}">
                                            @error('bupot')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="note" class="col-sm-2 col-form-label">Note</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="note" id="note"
                                                placeholder="Note" autocomplete="off" value="{{ old('note') }}">
                                            @error('note')
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

    <script>
        $(document).ready(function() {
            // Tambahkan event listener untuk mengamati perubahan pada dropdown pilihan layanan
            $('#layanan_id').change(function() {
                var selectedOption = $(this).find('option:selected');
                // Ambil nilai harga dari atribut data-harga pada opsi yang dipilih
                var harga = selectedOption.data('harga');
                // Update nilai input harga
                $('#harga').val(harga);
                // Hitung dan set nilai PPn
                var ppn = harga * 0.11;
                $('#ppn').val(ppn.toFixed(0));
                // Hitung dan set nilai PPh 23
                var pph23 = harga * 0.02;
                $('#pph_23').val(pph23.toFixed(0));
            });
        });
    </script>
@endsection
