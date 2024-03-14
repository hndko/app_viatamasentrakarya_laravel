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
                                        onclick="window.location.href='{{ route('apps.data_akun') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.data_akun.update', $data_akun->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                                placeholder="Nama Lengkap" autocomplete="off"
                                                value="{{ $data_akun->nama_lengkap }}" maxlength="150" required>
                                            @error('nama_lengkap')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email" autocomplete="off" value="{{ $data_akun->email }}"
                                                maxlength="155" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Password" autocomplete="off" maxlength="55">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="role" class="col-sm-2 col-form-label">Role </label>
                                        <div class="col-sm-10">
                                            <select name="role" id="role" class="form-control" required>
                                                <option value="">--- Choose ---</option>
                                                <option value="superadmin"
                                                    {{ strtolower($data_akun->role) === 'superadmin' ? 'selected' : '' }}>
                                                    Superadmin
                                                </option>
                                                <option value="admin 1"
                                                    {{ strtolower($data_akun->role) === 'admin 1' ? 'selected' : '' }}>
                                                    Admin 1</option>
                                                <option value="admin 2"
                                                    {{ strtolower($data_akun->role) === 'admin 2' ? 'selected' : '' }}>
                                                    Admin 2</option>
                                                <option value="admin content"
                                                    {{ strtolower($data_akun->role) === 'admin content' ? 'selected' : '' }}>
                                                    Admin
                                                    Content
                                                </option>
                                            </select>
                                            @error('role')
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
