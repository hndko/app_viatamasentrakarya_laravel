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
                                        onclick="window.location.href='{{ route('apps.kas') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.kas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal </label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal" id="tanggal"
                                                autocomplete="off" value="{{ old('tanggal') }}">
                                            @error('tanggal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="keterangan" id="keterangan"
                                                placeholder="Keterangan" autocomplete="off" value="{{ old('keterangan') }}">
                                            @error('keterangan')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control bg-transparent" name="harga"
                                                id="harga" placeholder="Harga" autocomplete="off"
                                                value="{{ old('harga') }}">
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="qty" class="col-sm-2 col-form-label">QTY</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="qty" id="qty"
                                                placeholder="qty" autocomplete="off" value="{{ old('qty') }}" required>
                                            @error('qty')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control bg-transparent" name="total"
                                                id="total" placeholder="Total" autocomplete="off"
                                                value="{{ old('total') }}" readonly>
                                            @error('total')
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
            // Tambahkan event listener untuk mengamati perubahan pada input harga & qty
            $('#harga, #qty').change(function() {
                // Ambil nilai harga dan qty
                var harga = $('#harga').val();
                var qty = $('#qty').val();

                // Cek apakah harga dan qty memiliki nilai
                if (harga && qty) {
                    // Hitung dan set nilai Total
                    var total = harga * qty;
                    $('#total').val(total);
                } else {
                    $('#total').val('');
                }
            });
        });
    </script>
@endsection
