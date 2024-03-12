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
                                <span class="m-0 h5">Daftar {{ $pages }}</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('apps.daftar_perusahaan.create') }}'">Tambah
                                        Data</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Jika ada pesan sukses, tampilkan -->
                                @if (session('success'))
                                    <div id="success-alert" class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Perusahaan</th>
                                            <th>NPWP</th>
                                            <th>Nama PIC</th>
                                            <th>Jabatan</th>
                                            <th>Nomor PIC</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $res)
                                            <tr>
                                                <td class="align-middle">{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $res->nama_perusahaan }}</td>
                                                <td class="align-middle">{{ $res->npwp_perusahaan }}</td>
                                                <td class="align-middle">{{ $res->nama_pic }}</td>
                                                <td class="align-middle">{{ $res->jabatan }}</td>
                                                <td class="align-middle">{{ $res->no_pic }}</td>
                                                <td class="align-middle">
                                                    <!-- Tombol untuk mengedit -->
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        onclick="window.location.href='{{ route('apps.daftar_perusahaan.edit', $res->perusahaan_id) }}'">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <!-- Tombol untuk menghapus -->
                                                    <form
                                                        action="{{ route('apps.daftar_perusahaan.destroy', $res->perusahaan_id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
