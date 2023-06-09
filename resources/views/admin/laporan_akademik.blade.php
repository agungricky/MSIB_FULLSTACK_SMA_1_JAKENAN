@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Laporan Kelulusan Siswa Siswi SMAN 1 JAKENAN</p>
                        {{-- <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="accordion col-md-12" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Lulusan 2019
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">                
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Penjurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>No Ijazah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nama = ['Johan','Naim','Dito','Novi','Sely','Lutpi','ika', 'wulan', 'Rio', 'Aat','Efendi'];
                                        $p = ['Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ips'];
                                    @endphp
                                    @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $nama[$i] }}</td>
                                        <td>{{ $p[$i] }}</td>
                                        <td>{{ 2019 }}</td>
                                        <td>2019{{$i}}1{{$i}}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lulusan 2020
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Penjurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>No Ijazah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nama = ['Johan','Naim','Dito','Novi','Sely','Lutpi','ika', 'wulan', 'Rio', 'Aat','Efendi'];
                                        $p = ['Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ips'];
                                    @endphp
                                    @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $nama[$i] }}</td>
                                        <td>{{ $p[$i] }}</td>
                                        <td>{{ 2019 }}</td>
                                        <td>2019{{$i}}1{{$i}}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lulusan 2021
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Penjurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>No Ijazah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nama = ['Johan','Naim','Dito','Novi','Sely','Lutpi','ika', 'wulan', 'Rio', 'Aat','Efendi'];
                                        $p = ['Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ipa', 'Ips','Ips'];
                                    @endphp
                                    @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $nama[$i] }}</td>
                                        <td>{{ $p[$i] }}</td>
                                        <td>{{ 2019 }}</td>
                                        <td>2019{{$i}}1{{$i}}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
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
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © SMAN1Jakenan 2019</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> - Data ini <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Telah di Catat</a> Oleh dinas Pendidikan Kabupaten PATI Jawa Tengah</span>
        </div>
    </footer>
    <!-- partial -->
</div>
</div>
</div>
@endsection