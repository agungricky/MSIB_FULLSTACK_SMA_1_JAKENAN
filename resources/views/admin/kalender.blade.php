@extends('admin.index')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card" style="background-color: rgb(136, 253, 228)">
    
    
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4"> 
                <div class="alert alert-warning" role="alert">
                    <h4>Form Kegiatan</h4>
                </div>
                <div class="card">
                    <form action="proses.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-label">Nis</div>
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                            </div>
                            
                            <div class="form-group">
                                <div class="form-label">Nama</div>
                                <select class="form-control form-control-lg countrylist">
                                    <option selected>Choose...</option>
                                    <option>Nigeria</option>
                                    <option>Sweden</option>
                                    <option>Poland</option>
                                    <option>Spain</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="form-label">No Ijazah</div>
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                            </div>

                            <div class="form-group">
                                <div class="form-label">Tahun Lulus</div>
                                <select class="form-control form-control-lg countrylist">
                                    <option selected>Choose...</option>
                                    <option>Nigeria</option>
                                    <option>Sweden</option>
                                    <option>Poland</option>
                                    <option>Spain</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="form-label">Status</div>
                                <select class="form-control form-control-lg countrylist">
                                    <option selected>Choose...</option>
                                    <option>Lulus</option>
                                    <option>Pindah</option>
                                    <option>Keluar</option>
                                </select>
                            </div>
                           
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
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
@endsection