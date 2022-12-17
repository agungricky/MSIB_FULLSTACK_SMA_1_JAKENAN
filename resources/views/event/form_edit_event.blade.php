@extends('admin.index')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- bootstrap cdn  -->
    <!-- fullcalendar css  -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
</head>

<body>
    <div class="main-panel">
    <div class="container mt-4">
        <div class="row">
            <div class="row mb-0">


                <div class="col-lg-4">
                    <div class="alert alert-warning" role="alert">
                        <h4>Form Kegiatan</h4>
                    </div>
                    <div class="card">
                        @foreach ($data as $row)
                            <form action="{{route('event.update', $row->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-label">Nama Kegiatan</div>
                                        <input type="text" name="nama" class="form-control" id="nama" cols="30" rows="2" value="{{$row->nama}}">
                                    </div>
                                    <div class="form-group mt-4">
                                        <div class="form-label">Tgl Mulai</div>
                                        <input type="date" class="form-control" name="tgl" id="tgl" value="{{$row->tgl}}">

                                    </div>
                                    <div class="form-group">
                                        <div class="form-label">Deskripsi Kegiatan</div>
                                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="2" value="{{$row->deskripsi}}"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-success" title="Simpan event">Simpan</button>
                                    </div>

                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8 ">
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
    </div>
</div>


</body>




</html>

@endsection