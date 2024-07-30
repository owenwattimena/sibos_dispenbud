@extends('templates.index')

@section('head')
<style>
    /* Custom styles for table header */
.table thead th {
    background-color: #4CAF50!important; /* Warna latar belakang hijau */
    color: white!important; /* Warna teks putih */
    border-bottom: 2px solid #4CAF50!important; /* Warna border sesuai dengan latar belakang */
    padding: 0.75rem!important; /* Padding */
    text-align: center!important; /* Rata tengah */
}

</style>
@endsection

@section('content')

<!-- Main page content-->
<div class="container-xl p-4">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="me-4 mb-3 mb-sm-0">
            <h1 class="mb-0">Sekolah</h1>
            <div class="small">
                <span class="fw-500 text-primary">Daftar Sekolah</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="row">
                <div class="col-sd-12 col-xxl-12">
                    <!-- Team members / people dashboard card example-->
                    <div class="card mb-4">
                        <div class="card-header">Daftar Sekolah</div>
                        <div class="card-body">
                            <a href="{{ route('sekolah.tambah') }}" class="btn btn-sm btn-success mb-2">Tambah</a>
                            <div class="table-responsive">
                                <table class="table table-hover table-sm" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA SEKOLAH</th>
                                            <th>NPSN</th>
                                            <th>JENIS</th>
                                            <th>ALAMAT</th>
                                            <th>STATUS</th>
                                            <th>USER</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sekolah as $key => $item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->npsn ?? '-' }}</td>
                                            <td>{{ Config::get('constant.jenis_sekolah')[$item->jenis] }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>-</td>
                                            <td>
                                                <button class="btn btn-primary btn-xs">User</button>
                                                <button class="btn btn-warning btn-xs">Ubah</button>
                                                <button class="btn btn-danger btn-xs">Hapus</button>
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
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    window.addEventListener('DOMContentLoaded', event => {
        // Simple-DataTables
        // https://github.com/fiduswriter/Simple-DataTables/wiki

        const dataTable = new DataTable("#datatable")
    });

</script>
@endsection
