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
                <div class="card card-secondary motivasi">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">"Belajar memang kadang membosankan tapi demi menggapai impianmu dan masa depan yang cerah, bersemangatlah dalam mencari ilmu." </p>
                        <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Tabel Siswa</h4>
                            <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all document</a>
                        </div>



                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Form Input Siswa</h5>
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif


                                            <form method="POST" action="{{route('siswa.store')}}">
                                                @csrf
                                                
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">NIS</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="NIS" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="nama_siswa" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="tempat_lahir" class="form-control">
                                                    </div>
                                                </div>

                                                <fieldset class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">jenis kelamin</label>
                                                    <div class="col-sm-9">
                                                        <div class="col-sm-10">
                                                            @foreach($ar_gender as $gender)
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="{{ $gender }}">
                                                                <label class="form-check-label" for="gridRadios1">
                                                                    {{ $gender }}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </fieldset>

                                                <div class="row mb-3">
                                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="tgl_lahir" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">agama</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="agama">
                                                            <option selected>-- Pilih agama --</option>
                                                            @foreach($ar_agama as $agama)
                                                            <option value="{{ $agama }}">{{ $agama }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="alamat" style="height: 100px"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                                                    <select class="form-select" name="kelas_id" required>
                                                        <option selected>-- Pilih Kelas --</option>
                                                        @foreach($kelas as $k)
                                                        <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">status siswa</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" name="status_siswa" required>
                                                            <option selected>-- Pilih status --</option>
                                                            @foreach($ar_status as $status)
                                                            <option value="{{ $status }}">{{ $status }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                                                    <div class="col-sm-10">
                                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    </div>
                            
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="foto" id="image" placeholder="Foto" onchange="previewImage()">                              
                                                    </div> 
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10 ">
                                                        <button type="submit" class="form-control submit-btn" title="Simpan siswa"><i class="bi bi-save"></i> Simpan</button>
                                                    </div>
                                                </div>

                                            </form><!-- End General Form Elements -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>

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
</div>
</div>
@endsection