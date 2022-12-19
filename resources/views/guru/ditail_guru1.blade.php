@extends('admin.index')
@section('content')
<div class="main-panel bg-light">
        <div class="container-fluid">
            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header"><label>Profile Picture</label></div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                {{-- <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt=""> --}}

                                @php
                                    if(!empty($row->foto)){
                                 @endphp
                                    
                                 <img src="{{asset('admin/images/guru') }}/{{ $row->foto }}" alt="Profile" class="img-account-profile rounded-circle mb-2"/>
                                    <!-- <img src="{{ url('admin/images/guru') }}" alt="Profile"            class="img-account-profile rounded-circle mb-2"> -->
                                    @php
                                        }else{
                                    @endphp
                                        <img src="{{ url('admin/images/nophoto.png') }}" alt="Profile"     class="img-account-profile rounded-circle mb-2">
                                 @php
                                        }
                                @endphp

                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">Berikut Adalah Informasi Tentang ... </div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button" @disabled(true)>{{ $row->nama }} </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header"><label>Detail Akun</label></div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">NIP (Nomor Induk Pegawai)</label>
                                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{ $row->nip }}" disabled>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">Nama</label>
                                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="{{ $row->nama }}" disabled>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Email</label>
                                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="{{ $row->email }}" disabled>
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (organization name)-->
                                        <div class="col-md-3">
                                            <label class="small mb-1" for="inputOrgName">Jenis Kelamin</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="{{ $row->gender }}" disabled>
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class="col-md-9">
                                            <label class="small mb-1" for="inputLocation">Tanggal Lahir</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="{{ $row->tgl_lahir }}" disabled>
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Tempat Lahir</label>
                                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="{{ $row->tempat_lahir }}" disabled>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputBirthday">Agama</label>
                                            <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="{{ $row->agama }}" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Alamat</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ $row->alamat }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">No Telpon</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ $row->no_telp }}" disabled>
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
@endsection