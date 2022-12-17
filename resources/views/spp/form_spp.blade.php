@extends('admin.index')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
    
        <div class="row">
            <div class="col-md-6">
                <br><br>
                <img src="admin\images\carousel\guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
            </div>

        
            <div class="col-md-6">
                <div class="row form-panel">
                    <div class="col-md-12 wrapper">
                        <div class="alert alert-warning fs-4 fw-bold" role="alert">
                            #Form Jadwal
                        </div>

                        <form action="{{route('spp.store')}}" method="post" name="mapelForm" >
                            @csrf
                            @method('post')
                            <div class="row two-div">
                            <div class="form-group two-div">
                                    <label for=""> Tanggal : &nbsp </label>
                                    <input name="tanggal" type="date" placeholder="Tanggal" class="form-control">
                                </div>
        
                                <div class="form-group two-div">
                                    <label for=""> Total : &nbsp </label>
                                    <input name="total" type="text" placeholder="Total" class="form-control"> 
                                </div>
                            </div>
        
                            <div class="row two-div">
                                <div class="form-group two-div">
                                    <label for=""> Kurang : &nbsp </label>
                                    <input name="kurang" type="text" placeholder="Kurang" class="form-control"> 
                                </div>
        
                                <div class="form-group two-div">
                                    <label for=""> Siswa : &nbsp </label>
                                    <select class="form-select" name="siswa" required>
                                        <option selected>-- Nama Siswa --</option>
                                        {{-- @foreach($siswa as $s)
                                        <option value="{{ $s->id }}">{{ $s->kelas }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>    
                            </div>
        
        
                            {{-- <div class="form-group">
                                <label for=""> Perihal : &nbsp </label>
                                <textarea name="perihal" id="perihal" cols="30" rows="10" class="form-control perihal" placeholder="Perihal"></textarea>
                            </div> --}}
        
                            <div>
                                <input type="submit" name="inputMapel" class="form-control submit-btn">
                            </div>
                        </form>
                    </div>
                </div>

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
</div>
</div>
@endsection