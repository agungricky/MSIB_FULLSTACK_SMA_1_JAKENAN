@extends('admin.index')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
</head>

<body>
    <div class="main-panel bg-dark bg-gradient">
        <div class="container mt-4">
            <div class="row">
                <div class="row mb-0">
                    
                    <div class="col-lg-4">
                    @if (Auth::user()->role=='administrator')

                        <div class="alert alert-warning" role="alert">
                            <label>Form Kegiatan</label>
                        </div>
                        <div class="card">                        
                            <form action="{{route('event.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                        <textarea name="nama" class="form-control" id="nama" cols="30" rows="2"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label>Tgl Mulai</label>
                                        <input type="date" class="form-control" name="tgl" id="tgl">
    
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Kegiatan</label>
                                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="2"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-success" title="Simpan event">Simpan</button>
                                    </div>
                                </div>
                            </form>             
                        </div>
                    @endif
                    </div>

                    <div class="col-lg-8 mb-3">
                        <div id="calendar">
                            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                            <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var calendarEl = document.getElementById('calendar');
                                    var calendar = new FullCalendar.Calendar(calendarEl, {
                                        initialView: 'dayGridMonth',
                                        events: [],
                                        selectOverlap: function(event) {
                                            return event.rendering === 'background';
                                        }
                                    });
    
                                    calendar.render();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-12 offset-md-0">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-items-center mb-4">
                                <h4 class="card-title mb-sm-0">Tabel Event</h4>
                                <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                            </div>
                            <div class="table-responsive border rounded p-1">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bold">No</th>
                                            <th class="font-weight-bold">Nama Kegiatan</th>
                                            <th class="font-weight-bold">Tanggal</th>
                                            <th class="font-weight-bold">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no=1;
                                        @endphp
                                        @foreach ($event as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->tgl }}</td>
                                            <td>{{ $row->deskripsi}}</td>
                                        @if (Auth::user()->role=='administrator')
                                            <td>
                                                <form method="POST" action="{{ route('event.destroy',$row->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    &nbsp;
                                                    <a class="btn btn-warning btn-sm" title="Ubah event" href=" {{ route('event.edit',$row->id) }}">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                    &nbsp;
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus Event" onclick="return confirm('Anda Yakin Data akan diHapus?')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex mt-4 flex-wrap">
                                <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                                <nav class="ml-auto">
                                    <ul class="pagination separated pagination-info">
                                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection