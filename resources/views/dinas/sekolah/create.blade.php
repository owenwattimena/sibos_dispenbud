@extends('templates.index')

@section('content')

<!-- Main page content-->
<div class="container-xl p-4">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="me-4 mb-3 mb-sm-0">
            <h1 class="mb-0">Sekolah</h1>
            <div class="small">
                <span class="fw-500 text-primary">Tambah Sekolah</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="row">
                <div class="col-sd-12 col-xxl-12">
                    <!-- Team members / people dashboard card example-->
                    <div class="card mb-4">
                        <div class="card-header">Tambah Sekolah</div>
                        <div class="card-body">
                            <form action="{{ route('sekolah.simpan') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputSekolah">Nama Sekolah</label>
                                    <input class="form-control" id="inputSekolah" type="text" name="nama" placeholder="Masukan Nama Sekolah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="selectJenis">Jenis</label>
                                    <select class="form-control" id="selectJenis" type="text" name="jenis" required>
                                        @foreach (config('constant.jenis_sekolah') as $key => $item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputNpsn">NPSN</label>
                                    <input class="form-control" id="inputNpsn" type="text" name="npsn" placeholder="Masukan NPSN">
                                </div>
                                <label class="fw-bold" style="font-size: 10pt;">Alamat Sekolah</label>
                                <div class="mb-3">
                                    <label for="inputAlamat">Alamat</label>
                                    <input class="form-control" id="inputAlamat" type="text" name="alamat" placeholder="Masukan Alamat">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputDesa">Desa</label>
                                            <input class="form-control" id="inputDesa" type="text" name="desa" placeholder="Masukan Desa">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputKelurahan">Keluarahan</label>
                                            <input class="form-control" id="inputKelurahan" type="text" name="kelurahan" placeholder="Masukan Kelurahan">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="selectStatus">Status</label>
                                    <select class="form-control" id="selectStatus" type="text" name="status" required>
                                        @foreach (config('constant.status_sekolah') as $key => $item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
