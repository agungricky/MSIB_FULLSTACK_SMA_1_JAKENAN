@extends('admin.index')
@section('content')
@php
$ar_gender = ['L','P'];
$ar_agama = ['Islam','Hindu','Budha','Kristen','Lainya'];
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
                        #Table Guru
                      </div>
                      
                    <form action="{{route('guru.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row"> 
                            <div class="col form-group">
                                <label> NIP : &nbsp</label>
                                <input type="text" name="nip" class="form-control" id="" placeholder="NIP" required>
                            </div>
                            <div class="col form-group">
                                <label> Nama : &nbsp</label>
                                <input type="text" class="form-control" name="nama" id="" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Alamat : &nbsp</label>
                            <input type="text" class="form-control" name="alamat" id="" placeholder="Alamat" required>
                        </div>
                        <div class="row">
                            <div class="col-8 form-group">
                                <label> Tanggal Lahir : &nbsp</label>
                                <input type="date" name="tgl_lahir" class="form-control" id="" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="col form-group">
                                <label> Jenis Kelamin : &nbsp</label>
                                <select class="form-control form-control-lg countrylist" name="gender">
                                    <option selected>----- Jenis Kelamin -----</option>
                                    @foreach ($ar_gender as $g)
                                        <option value="{{ $g }}">{{ $g }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label> Tempat Lahir : &nbsp</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="" placeholder="Tempat Lahir" required>
                            </div>

                            <div class="col form-group">
                                <label> NIP : &nbsp</label>
                                <input type="text" class="form-control" name="no_telp" id="" placeholder="Nomer Telp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 form-group">
                                <label> Email : &nbsp</label>
                                <input type="text" name="email" class="form-control" id="" placeholder="email" required>
                            </div>
                            <div class="col form-group">
                                <label> Agama : &nbsp</label>
                                <select class="form-control form-control-lg countrylist" name="agama">
                                    <option selected>----- Agama -----</option>
                                    @foreach ($ar_agama as $agama)
                                        <option value="{{ $agama }}">{{ $agama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>  Foto : &nbsp</label>
                            <input type="file" class="form-control" name="foto" id="image" placeholder="Foto" onchange="previewImage()">                              
                        </div> 

                        <div class="my-3">
                            <div class="">Data ini akan kami simpan di <span class="text-danger">DATABASE</span></div>
                            <div class="sent-message">Jika data sudah benar klik tombol simpan di bawah!!!</div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary">Simpan data</button></div>
                    </form>
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

