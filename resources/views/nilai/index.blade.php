@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center motivasi">
                        <p class="mb-lg-0">Semangat dan Tekunlah Menimba Ilmu demi Masedepanmu yang Cemerlang</p>
                    </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Tabel Nilai</h4>
                            <form action="{{ route('search_nilai') }}" method="GET" class="ml-auto col-4">
                                <div class="input-group input-group-sm">
                                    <input type="search" name="search" class="form-control" placeholder="Cari Nama Siswa" aria-label='Recipients username' aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">No</th>
                                        <th class="font-weight-bold">Perihal</th>
                                        <th class="font-weight-bold">Guru</th>
                                        <th class="font-weight-bold">Tugas</th>
                                        <th class="font-weight-bold">Siswa</th>
                                        <th class=" font-weight-bold">Nilai</th>
                                        <!-- {{-- <th class=" font-weight-bold">Upload</th> --}} -->
                                        <th class=" font-weight-bold">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($nilai as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->perihal }}</td>
                                        <td>{{ $row->guru }}</td>
                                        <td>{{ $row->tugas }}</td>
                                        <td>{{ $row->siswa }}</td>
                                        <td>{{ $row->nilai }}</td>
                                        <!-- {{-- <td>{{ $row->upload }}</td> --}} -->
                                        <td>
                                            <form method="POST" action="{{ route('nilai.destroy',$row->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-warning btn-sm" title="Ubah Nilai" href=" {{ route('nilai.edit',$row->id) }}">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                                &nbsp;
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Nilai" onclick="return confirm('Anda Yakin Data akan diHapus?')">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex mt-4 flex-wrap">
                            <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                            <nav class="ml-auto">
                                <ul class="pagination separated pagination-info">
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
@endsection