@extends('admin.index')
@section('content')

@php
$arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
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
                {{-- <div class="col-md-6">
                    <img src="admin/images/guru/guru.png" alt="" style="border:0; width: 100%; height: 384px;" allowfullscreen>
                </div> --}}

                <div class="col">
                    @foreach ($data as $row)
                    <form action="{{route('user.update', $row->id)}}" method="post" >
                        @csrf
                        @method('put')
                        {{-- Upload img : https://www.w3schools.com/php/php_file_upload.asp --}}
    
                        <div class="row two-div">
                            <div class="form-group two-div">
                                <label for="" class=" col-form-label"> Nama : &nbsp </label>
                                <input name="name" type="text" placeholder="Nama Lengkap" class="form-control" value={{$row->name}} required> 
                            </div>
                            
                            <div class="form-group two-div">
                                <label for="" class=" col-form-label"> Email : &nbsp </label>
                                <input name="tanggal" type="email" placeholder="Email" class="form-control" value={{$row->email}} required>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col">
                                <label for="" class=" col-form-label"> Password : &nbsp </label>
                                <input type="text" name="password" class="form-control" value="{{$row->password}}">
                            </div>  
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="" class=" col-form-label"> Label : &nbsp </label>
                                <select class="form-select" name="role">
                                    <option selected>-- Pilih Role --</option>
                                    @foreach($role as $rl)
                                    <option value="{{ $rl }}">{{ $rl }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" name="inputMapel" class="form-control submit-btn">
                            </div>
                        </div>   
                        @endforeach
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
@endsection