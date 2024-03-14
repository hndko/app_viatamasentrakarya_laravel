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
                                        onclick="window.location.href='{{ route('apps.hrga.create') }}'">Tambah
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
                                            <th>Nama Anggota</th>
                                            <th>Tanggal Masuk</th>
                                            <th>No Telpon</th>
                                            <th>Jabatan</th>
                                            <th>No Pegawai</th>
                                            <th>NIK</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Perusahaan</th>
                                            <th>Lokasi</th>
                                            <th>BPJS Kes</th>
                                            <th>BPJS TK</th>
                                            <th>PKWT</th>
                                            <th>Kasbon</th>
                                            <th>Slip Gaji</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($result as $res)
                                            <tr>
                                                <td class="align-middle">{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $res->nama_anggota }}</td>
                                                <td class="align-middle">{{ date('Y/m/d', strtotime($res->tanggal_masuk)) }}
                                                </td>
                                                <td class="align-middle">{{ $res->no_telpon }}</td>
                                                <td class="align-middle">{{ $res->jabatan }}</td>
                                                <td class="align-middle">{{ $res->no_pegawai }}</td>
                                                <td class="align-middle">{{ $res->nik }}</td>
                                                <td class="align-middle">{{ $res->tanggal_lahir }}</td>
                                                <td class="align-middle">{{ $res->perusahaan->nama_perusahaan }}</td>
                                                <td class="align-middle">{{ $res->lokasi }}</td>
                                                <td class="align-middle">{{ $res->bpjs_kesehatan }}</td>
                                                <td class="align-middle">{{ $res->bpjs_tk }}</td>
                                                <td class="align-middle">
                                                    {{ date('Y/m/d', strtotime($res->pkwt_awal)) }} -
                                                    {{ date('Y/m/d', strtotime($res->pkwt_akhir)) }}
                                                </td>
                                                <td class="align-middle">Rp{{ number_format($res->kasbon, 0, ',', '.') }}
                                                </td>
                                                <td class="align-middle">
                                                    <span style="cursor: pointer" data-toggle="modal"
                                                        data-target="#buktiModal{{ $res->hrga_id }}">Klik
                                                        Here</span>
                                                </td>
                                                <td class="align-middle">
                                                    <!-- Tombol untuk mengedit -->
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        onclick="window.location.href='{{ route('apps.hrga.edit', $res->hrga_id) }}'">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <!-- Tombol untuk menghapus -->
                                                    <form action="{{ route('apps.hrga.destroy', $res->hrga_id) }}"
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

                                        @foreach ($result as $res)
                                            <div class="modal fade" id="buktiModal{{ $res->hrga_id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="buktiModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="buktiModalLabel">Bukti
                                                                Transfer</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img src="{{ asset('assets/slip_gaji/' . $res->slip_gaji) }}"
                                                                alt="Bukti Transfer" style="max-width: 100%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
