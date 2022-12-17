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
        <section class="section">
            <div class="row">

                <div class="col-md-6">
                    <img src="assets/img/siswaBanner.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    {{-- <div class="card"> --}}
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


                            <form method="post" role="form" action="{{route('siswa.store')}}" enctype="multipart/form-data" >
                                @csrf
                                
                                <div class="row mb-3">
                                    {{-- <label class="col-sm-2 col-form-label">NIS</label> --}}
                                    <div class="">
                                        <input placeholder="NIS" required type="text" name="NIS" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    {{-- <label class="col-sm-2 col-form-label">Nama Siswa</label> --}}
                                    <div class="">
                                        <input placeholder="Nama Lengkap" required type="text" name="nama_siswa" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    {{-- <label class="col-sm-2 col-form-label">Tempat Lahir</label> --}}
                                    <div class="">
                                        <input placeholder="Tempat Lahir" required type="text" name="tempat_lahir" class="form-control">
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <div class="">
                                        <label class="col-form-label">Jenis Kelamin</label>
                                    </div>

                                    <div class="">
                                        @foreach($ar_gender as $gender)
                                        <div class="form-check">
                                            <input placeholder=" Jenis Kelamin" required class="form-check-input" type="radio" name="jenis_kelamin" value="{{ $gender }}">
                                            <label class="form-check-label" for="gridRadios1">
                                                {{ $gender }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>

                                </fieldset>

                                <div class="row mb-3">
                                    {{-- <label for="input placeholder=""Date" class="col-sm-2 col-form-label">Tanggal Lahir</label> --}}
                                    <div class="">
                                        <input placeholder="Tanggal Lahir" required onfocus="(this.type='date')" name="tgl_lahir" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    {{-- <label class="col-sm-2 col-form-label">agama</label> --}}
                                    <div class="">
                                        <select class="form-select" name="agama">
                                            <option selected>-- Pilih agama --</option>
                                            @foreach($ar_agama as $agama)
                                            <option value="{{ $agama }}">{{ $agama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    {{-- <label for="input placeholder=""Password" class="col-sm-2 col-form-label">Alamat</label> --}}
                                    <div class="">
                                        <textarea placeholder="Alamat" required class="form-control" name="alamat" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    {{-- <label for="input placeholder=""Password" class="col-sm-2 col-form-label">Kelas</label> --}}
                                    <div  class="">
                                        <select required class="form-select" name="kelas_id" required>
                                            <option selected>-- Pilih Kelas --</option>
                                            @foreach($kelas as $k)
                                            <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    {{-- <label class="col-sm-2 col-form-label">status siswa</label> --}}
                                    <div class="">
                                        <select required class="form-select" name="status_siswa" required>
                                            <option selected>-- Pilih status --</option>
                                            @foreach($ar_status as $status)
                                            <option value="{{ $status }}">{{ $status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="">
                                    <img class="img-preview mb-3 col-sm-5">
                                </div>
                                <div class="row mb-3">
                                    {{-- <label for="input placeholder=""Number" class="col-sm-2 col-form-label">Foto</label> --}}
                                    <div class="">
                                        <input placeholder="" required type="file" class="form-control" name="foto" id="" placeholder="Foto" onchange="previewImage()">                              
                                    </div> 
                                </div>

                                <div class="row mb-3">
                                    {{-- <label class="col-sm-2 col-form-label"></label> --}}
                                    <div class="">
                                        <button type="submit" class="form-control submit-btn" title="Simpan siswa"><i class="bi bi-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
        </section>
    </div>
    <div>
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