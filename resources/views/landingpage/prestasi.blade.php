@php
    $no=1;
    $ar_nama = ['','Muhammad Bagus Istiqfar & Divya Syams Okta' , 
                'Hilda Nathaniela', 
                'Citra Bella', 
                'Abdurrahim Putra', 
                'Septiyan Tiyan', 
                'Tim Pramuka', 
                'Mahdafika Fat Hul Falah',
                'Maulana Alif Anugrah', 
                'Ckasinta Winda S',
                'Nadya Saphira Esfandiari'];
    $kejuaraan = ['','Lomba Essay Tk SMA Sederajat PKRS RSUD Moh Saleh',
                'Lomba Essay Tk SMA Sederajat PKRS RSUD Moh Saleh',
                'Festifal Hari Hewan Sedunia Dinas Pertanian Kota Pati',
                'Lomba Menyanyi Keroncong dalam rangka HUT RI ke 72',
                'Lomba Cerdas Cermat pada Giat Prestasi Penegak tahun 2017',
                'Dinamika Kelompok pada Giat Prestasi Penegak tahun 2017',
                'Kejurda Anggar Perorangan',
                'Lomba Essay Tk SMA Sederajat PKRS RSUD Moh Saleh',
                'Lomba Bercerita Festifal Hari Hewan Sedunia Dinas Pertanian Kota Pati',
                'Lomba Essay Tk SMA Sederajat PKRS RSUD Moh Saleh'];

    $peringkat = ['','Juara II',
                'Juara III',
                'Juara II',
                'Juara I',
                'Juara I',
                'Juara III',
                'Juara II',
                'Juara I',
                'Juara III',
                'Juara I'];

    $pelaksanaan = ['','2019','2019','2019','2020','2020','2020','2021','2022','2022','2022',];
@endphp

@extends('landingpage.index')
@section('content')
  <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-md-9 px-4">
                    <img src="{{url('assets/img/prestasi.jpg')}}" alt="" id="imgvisimisi" class="">
                    <span class="p_bold">PRESTASI SISWA SISWI</span>
                    <p class="p_bold">SMA NEGERI 1 JAKENAN TAHUN PELAJARAN 2017 - 2022</p>
                    <table class="table table-borderless">
                        <thead>
                            <tr class="bg-dark text-light">
                                <td>No</td>
                                <td width="250px">Nama Siswa</td>
                                <td width="200px">Nama Kejuaraan</td>
                                <td>Peringkat</td>
                                <td>Tingkat</td>
                                <td>Pelaksanaan</td>
                                <td>KET</td>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i < 11; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $ar_nama[$i] }}</td>
                                <td>{{ $kejuaraan[$i] }}</td>
                                <td>{{ $peringkat[$i] }}</td>
                                <td>{{ 'Kota Pati' }}</td>
                                <td>{{ $pelaksanaan[$i] }}</td>
                                <td></td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
            </div>
    
                <div class="col-md-3">
                    <div class="tentangweb">
                        <h3>TENTANG WEB</h3>
                        <hr>
                        Website resmi SMA Negeri 1 Kota Probolinggo sebagai media informasi publik
                    </div>

                    <div class="alamat">
                        <h3 id="alamat">ALAMAT</h3>
                        <hr>
                        <p class="p_bold">Address</p>
                        Jl. Soekarno Hatta 137 Probolinggo Jawa Timur
                        Call : 0334-421566 <br> <br>
                        
                        <p class="p_bold">Hours</p>
                        Monday—Friday: 7:00AM-15:00PM
                    </div>

                    <div class="cari">
                        <h3 id="cari">PENCARIAN</h3>
                        <hr>
                        <div class="input-group mb-3">
                            <button class="btn btn-primary" type="button" id="button-addon1">Cari</button>
                            <input type="text" class="form-control" placeholder="Ingin mencari apa ..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>                          
                    </div>
                </div>
            </div>
    </div>
  </div>
@endsection
