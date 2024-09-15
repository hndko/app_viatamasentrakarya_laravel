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
                                    @if ($result->isEmpty())
                                        <button type="button" class="btn btn-primary btn-sm"
                                            onclick="window.location.href='{{ route('apps.percen_pajak.create') }}'">Tambah
                                            Data</button>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div id="success-alert" class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <table class="table table-bordered table-hover" id="example2">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>PPN</th>
                                            <th>PPh</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $res)
                                            <tr>
                                                <td class="align-middle">{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $res->ppn }}%</td>
                                                <td class="align-middle">{{ $res->pph }}%</td>
                                                <td class="align-middle">
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        onclick="window.location.href='{{ route('apps.percen_pajak.edit', $res->percenpajak_id) }}'">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <form
                                                        action="{{ route('apps.percen_pajak.destroy', $res->percenpajak_id) }}"
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
