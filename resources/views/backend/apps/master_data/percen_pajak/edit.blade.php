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
                                <span class="m-0 h5">Edit Data {{ $pages }}</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary btn-sm"
                                        onclick="window.location.href='{{ route('apps.percen_pajak') }}'">Kembali</button>
                                </div>
                            </div>
                            <form action="{{ route('apps.percen_pajak.update', $res->percenpajak_id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="ppn" class="col-sm-2 col-form-label">PPN (%)</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="ppn" id="ppn"
                                                placeholder="PPN" required value="{{ $res->ppn }}">
                                            @error('ppn')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pph" class="col-sm-2 col-form-label">PPh (%)</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="pph" id="pph"
                                                placeholder="PPh" required value="{{ $res->pph }}">
                                            @error('pph')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-info">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
