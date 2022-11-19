@extends('admin.index')
@section('content')
{{-- Novia --}}
@php
$ar_gender = ['L','P'];
$ar_agama = ['Islam','Hindu','Khatolik','Budha','Kristen','Lainya'];
$ar_status = ['Lulus','Aktif','Pindah','Keluar'];
@endphp

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>
                        <a href="https://www.bootstrapdash.com/product/stellar-admin/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">Upgrade To Pro</a>
                        <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="admin/images/siswa/siswa.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    {{-- Novia --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{route('siswa.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row"> 
                            <div class="col form-group">
                                <input type="text" name="NIS" class="form-control" id="" placeholder="NIS" required>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="nama_siswa" id="" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tempat_lahir" id="" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                {{-- Ricky --}}
                                 <select class="form-control form-control-lg countrylist" name="jenis_kelamin">
                                    <option selected>----- jenis_kelamin -----</option>
                                    @foreach($ar_gender as $gender)
                                        <option value="{{ $gender }}">{{ $gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-8 form-group">
                                <input type="date" name="tgl_lahir" class="form-control" id="" placeholder="Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-4">
                                <select class="form-control form-control-lg countrylist" name="agama">
                                    <option selected>----- Agama -----</option>
                                    @foreach($ar_agama as $agama)
                                        <option value="{{ $agama }}">{{ $agama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col form-group col-8">
                                <input type="text" name="alamat" class="form-control" id="" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-lg countrylist" name="status_siswa">
                                <option selected>----- Status Siswa -----</option>
                                @foreach($ar_status as $status)
                                    <option value="{{ $status }}">{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="foto">
                            </div>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection