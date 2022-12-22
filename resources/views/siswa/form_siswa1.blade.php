@extends('admin.index')
@section('content')
@php
    $ar_gender = ['L','P'];
    $ar_agama = ['Islam','Hindu','Khatolik','Budha','Kristen','Lainya'];
    $ar_status = ['Lulus','Aktif','Pindah','Keluar'];
@endphp
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <br><br><br><br>
                    <img src="admin\images\carousel\guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning fs-4 fw-bold" role="alert">
                        #Form Siswa
                    </div>

                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      
                      <form method="POST" action="{{route('siswa.store')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                            <label> NIS : &nbsp</label>
                                <input type="text" name="NIS" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>Nama Siswa : </label>
                                <input type="text" name="nama_siswa" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-5">
                            <label>Tempat Lahir : </label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>

                            <div class="col-sm-7">
                                <label>Tanggal Lahir :</label>
                                <input type="date" name="tgl_lahir" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Agama :</label>
                                <select class="form-select" name="agama">
                                    <option selected>-- Pilih agama --</option>
                                    @foreach($ar_agama as $agama)
                                    <option value="{{ $agama }}">{{ $agama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label>Jenis Kelamin :</label>
                                <select class="form-select" name="jenis_kelamin">
                                    <option selected>-- Pilih --</option>
                                    @foreach($ar_gender as $gender)
                                    <option value="{{ $gender }}">{{ $gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                            <label>Alamat :</label>
                                <textarea class="form-control" name="alamat" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputPassword">Kelas :</label>
                                <select class="form-select" name="kelas_id" required>
                                    <option selected>-- Pilih Kelas --</option>
                                    @foreach($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                            <label>Status siswa :</label>
                                <select class="form-select" name="status_siswa" required>
                                    <option selected>-- Pilih status --</option>
                                    @foreach($ar_status as $status)
                                    <option value="{{ $status }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                         <div class="col-md-12">
                                <label>Foto :</label>
                                <input type="file" class="form-control" name="foto" id="image" placeholder="Foto" onchange="previewImage()">                              
                            </div> 
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12 mt-3 ">
                                <button type="submit" class="form-control submit-btn" title="Simpan siswa"><i class="bi bi-save"></i> Simpan</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<script>
    function previewImage(){
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection

