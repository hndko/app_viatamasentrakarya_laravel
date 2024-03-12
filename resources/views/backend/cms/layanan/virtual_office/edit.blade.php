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
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('cms.virtual_office') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('cms.virtual_office.update', $res->layanan_id) }}" method="POST">
                                @csrf <!-- Token CSRF -->
                                @method('PUT') <!-- Menggunakan method PUT untuk update -->

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" id="judul"
                                                placeholder="Judul" autocomplete="off" required
                                                value="{{ old('judul', $res->judul) }}">
                                            @error('judul')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="harga" id="harga"
                                                placeholder="Harga" autocomplete="off" required
                                                value="{{ old('harga', $res->harga) }}">
                                            @error('harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4 mt-1">
                                            <input type="hidden" name="is_harga" value="0">
                                            <input type="checkbox" name="is_harga" id="is_harga" value="1"
                                                {{ $res->is_harga ? 'checked' : '' }} data-bootstrap-switch
                                                data-off-color="danger" data-on-color="success">
                                            @error('is_harga')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="is_color" class="col-sm-2 col-form-label">Warna</label>
                                        <div class="col-sm-10">
                                            <select name="is_color" id="is_color" class="form-control" required>
                                                <option value="">--- Choose ---</option>
                                                <option value="featured-teal"
                                                    {{ $res->is_color == 'featured-teal' ? 'selected' : '' }}>featured-teal
                                                </option>
                                                <option value="featured"
                                                    {{ $res->is_color == 'featured' ? 'selected' : '' }}>featured</option>
                                                <option value="featured-red"
                                                    {{ $res->is_color == 'featured-red' ? 'selected' : '' }}>featured-red
                                                </option>
                                            </select>
                                            @error('is_color')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="is_whatsapp" class="col-sm-2 col-form-label">Status Whatsapp</label>
                                        <div class="col-sm-10 mt-1">
                                            <input type="hidden" name="is_whatsapp" value="0">
                                            <input type="checkbox" name="is_whatsapp" id="is_whatsapp" value="1"
                                                {{ $res->is_whatsapp ? 'checked' : '' }} data-bootstrap-switch
                                                data-off-color="danger" data-on-color="success">
                                            @error('is_whatsapp')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="is_active" class="col-sm-2 col-form-label">Status Layanan</label>
                                        <div class="col-sm-10 mt-1">
                                            <input type="hidden" name="is_active" value="0">
                                            <input type="checkbox" name="is_active" id="is_active" value="1"
                                                {{ $res->is_active ? 'checked' : '' }} data-bootstrap-switch
                                                data-off-color="danger" data-on-color="success">
                                            @error('is_active')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
