@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        {{-- <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>
                    </span>
                </div>
            </div>
        </div> --}}

        <!-- // ============================= Fergi : Membuat Form Input Tugas ========================= -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/tugasBanner.png" alt="" style="border:0; width: 100%; height: 384px; max-width:100%; margin-bottom:auto;">
                </div>

                <div class="col-md-6">
                    <form action="{{route('tugas.store')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf 

                        <div class="row">
                                <div class="col-3 form-group">
                                    <select class="form-control form-control-lg countrylist" name="hari">
                                        <option selected>----- Hari -----</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>      
                                </div>

                                <div class="col-5 form-group">    
                                    <input type="text" class="form-control" name="jam" id="" placeholder="00.00 - 00.00" required>
                                </div>
                                
                                <div class="col-4 form-group">    
                                    <input type="date" name="tanggal" class="form-control" id="" placeholder="Tanggal" required>
                                </div>
                        </div>

                        <div class="form-group">
                            <select class="form-control form-control-lg countrylist" name="perihal">
                                <option selected>----- Perihal -----</option>
                                <option value="Quis">Quis</option>
                                <option value="Tugas Harian">Tugas Harian</option>
                                <option value="UTS">UTS</option>
                                <option value="UAS">UAS</option>
                                <option value="Lainya">Lainya</option>
                            </select>   
                        </div>
                        
                        <div class="form-group">
                            <div class="">
                                <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan"></textarea>
                            </div>    
                        </div>  
                        

                        <div class="form-group">
                            <div class="">
                                <img class="img-preview img-fluid mb-2">
                            </div>
    
                            <div class="">
                                <input type="file" class="form-control " name="upload" id="image" placeholder="Foto" onchange="previewImage()">                              
                            </div> 
                        </div>

                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                        <div class="text-center"><button type="submit" class="form-control submit-btn">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection