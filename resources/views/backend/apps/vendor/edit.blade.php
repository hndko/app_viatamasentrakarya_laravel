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
                                        onclick="window.location.href='{{ route('apps.vendor') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.vendor.update', $vendor->vendor_id) }}" method="POST"
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
                                                        {{ $vendor->perusahaan_id == $res->perusahaan_id ? 'selected' : '' }}>
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
                                                value="{{ $vendor->no_invoice }}">
                                            @error('no_invoice')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="harga" id="harga"
                                                placeholder="Harga" autocomplete="off" value="{{ $vendor->harga }}">
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
                                                value="{{ $vendor->ppn }}" readonly>
                                            @error('ppn')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pph_21" class="col-sm-2 col-form-label">PPh 21</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control bg-transparent" name="pph_21"
                                                id="pph_21" placeholder="PPh 21" autocomplete="off"
                                                value="{{ $vendor->pph_21 }}" readonly>
                                            @error('pph_21')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bukti_potong" class="col-sm-2 col-form-label">Bukti
                                            Potong</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="bukti_potong"
                                                        id="bukti_potong">
                                                    <label class="custom-file-label" for="bukti_potong">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            @error('bukti_potong')
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

                    // Hitung dan set nilai PPh 21 (2% dari harga)
                    var pph = harga * 0.02;
                    $('#pph_21').val(pph.toFixed(0));
                } else {
                    // Jika harga kosong, set nilai PPn dan PPh 21 menjadi kosong juga
                    $('#ppn').val('');
                    $('#pph_21').val('');
                }
            });
        });
    </script>
@endsection
