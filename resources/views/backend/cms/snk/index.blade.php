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
                            </div>
                            <form action="{{ route('cms.snk.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <!-- Jika ada pesan sukses, tampilkan -->
                                    @if (session('success'))
                                        <div id="success-alert" class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

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
