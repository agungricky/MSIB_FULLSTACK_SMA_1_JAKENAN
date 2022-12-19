@extends('admin.index')
@section('content')
@php
    use App\Models\Spp;
    $siswa = Spp::all();
@endphp
@if (Auth::user()->role =='administrator')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6">
                <img src="admin\images\carousel\spp.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
            </div>

        
            <div class="col-md-6">
                <div class="row form-panel">
                    <div class="col-md-12 wrapper">
                        <div class="alert alert-warning fs-4 fw-bold" role="alert">
                            #Form Pencatat SPP Siswa
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
                                        @foreach($siswa as $s)
                                        <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                                        @endforeach
                                    </select>
                                </div>    
                            </div>
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
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

<!-- partial -->
</div>
</div>
</div>
@else
@include('layouts.accessdenied')
@endif
@endsection