@extends('templates.index')

@section('content')

<!-- Main page content-->
<div class="container-xl p-4">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="me-4 mb-3 mb-sm-0">
            <h1 class="mb-0">Pengguna</h1>
            <div class="small">
                <span class="fw-500 text-primary">Tambah Pengguna</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="row">
                <div class="col-sd-12 col-xxl-12">
                    <!-- Team members / people dashboard card example-->
                    <div class="card mb-4">
                        <div class="card-header">Tambah Pengguna</div>
                        <div class="card-body">
                            <form action="{{ route('sekolah.simpan') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputSekolah">Nama</label>
                                    <input class="form-control" id="inputSekolah" type="text" name="nama" placeholder="Masukan Nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputUsername">Username</label>
                                    <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Masukan Username" required>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Masukan Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputKonfirmasi">Konfirmasi Password</label>
                                            <input class="form-control" id="inputKonfirmasi" type="password" name="kelurahan" placeholder="Masukan Konfirmasi Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail">Email</label>
                                    <input class="form-control" id="inputEmail" type="email" name="email" placeholder="Masukan Email">
                                </div>
                                <div class="mb-3">
                                    <label for="selectLevel">Level</label>
                                    <select class="form-control" id="selectLevel" type="text" name="status" required>
                                        @foreach (config('constant.level_user') as $key => $item)
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
