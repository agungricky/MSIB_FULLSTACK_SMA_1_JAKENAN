@extends('admin.index')
@section('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <!-- // ============================= Fergi : Menampilkan Foto dan Data Guru Di Detail Guru ========================= -->
                    @php
                        if(!empty($row->foto)){
                    @endphp
                        <img src="{{asset('admin/images/guru') }}/{{ $row->foto }}" alt="Profile" class="rounded-circle" width="240px"/>
                        <!-- <img src="{{ url('admin/images/guru') }}" alt="Profile" class="rounded-circle"> -->
                    @php
                        }else{
                    @endphp
                        <img src="{{ url('admin/images/nophoto.png') }}" alt="Profile" class="rounded-circle">
                    @php
                        }
                    @endphp
                    <h2>{{ $row->nama }}</h2>
                    <h3>{{ $row->nip }}</h3>
                    <div class=" alert alert-primary" role="alert">
                        <br />Tempat Lahir : {{ $row->tempat_lahir }}
                        <br />Tanggal Lahir: {{ $row->tgl_lahir }}     
                        <br />Jenis Kelamin: {{ $row->gender }}
                        <br />Alamat       : {{ $row->alamat }}
                        <br />Email        : {{ $row->email }}
            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection