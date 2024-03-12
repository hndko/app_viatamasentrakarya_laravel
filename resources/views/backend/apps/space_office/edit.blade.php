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
                                        onclick="window.location.href='{{ route('apps.space_office') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.space_office.update', $formSO->form_so_id) }}" method="POST"
                                enctype="multipart/form-data">
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
                                                        {{ $formSO->perusahaan_id == $res->perusahaan_id ? 'selected' : '' }}>
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
                                                value="{{ $formSO->no_invoice }}">
                                            @error('no_invoice')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="harga" id="harga"
                                                placeholder="Harga" autocomplete="off" value="{{ $formSO->harga }}">
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
                                                value="{{ $formSO->ppn }}" readonly>
                                            @error('ppn')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pph_final" class="col-sm-2 col-form-label">PPh Final</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control bg-transparent" name="pph_final"
                                                id="pph_final" placeholder="PPh Final" autocomplete="off"
                                                value="{{ $formSO->pph_final }}" readonly>
                                            @error('pph_final')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Masa Sewa</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" name="awal_sewa" id="awal_sewa"
                                                autocomplete="off"
                                                value="{{ $formSO->awal_sewa === null ? '' : $formSO->awal_sewa }}">
                                            @error('awal_sewa')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" name="akhir_sewa" id="akhir_sewa"
                                                autocomplete="off"
                                                value="{{ $formSO->akhir_sewa === null ? '' : $formSO->akhir_sewa }}">
                                            @error('akhir_sewa')
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
                                                value="{{ $formSO->tanggal_pembayaran === null ? '' : $formSO->tanggal_pembayaran }}">
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
                                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="keterangan" id="keterangan"
                                                placeholder="Keterangan" autocomplete="off"
                                                value="{{ $formSO->keterangan }}">
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

    <script>
        $(document).ready(function() {
            // Tambahkan event listener untuk mengamati perubahan pada input harga
            $('#harga').change(function() {
                // Ambil nilai harga
                var harga = $(this).val();

                // Cek apakah harga memiliki nilai
                if (harga) {
                    // Hitung dan set nilai PPn
                    var ppn = harga * 0.11;
                    $('#ppn').val(ppn.toFixed(0));

                    // Hitung dan set nilai PPh Final
                    var pph = harga * 0.1;
                    $('#pph_final').val(pph.toFixed(0));
                } else {
                    // Jika harga kosong, set nilai PPn dan PPh Final menjadi kosong juga
                    $('#ppn').val('');
                    $('#pph_final').val('');
                }
            });
        });
    </script>
@endsection
