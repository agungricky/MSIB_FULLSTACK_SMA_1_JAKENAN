@extends('admin.index')
@section('content')
<div class="main-panel">
<section class="section">
    <div class="row">

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Perbandingan Agama Siswa</h5>

            <!-- Doughnut Chart -->
            <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
            <script>
              //ambil data gender dan jumlah gendernya dari DashboardController di fungsi index
              var lblas = [@foreach($ar_agama as $g) '{{ $g->agama }}', @endforeach];
              var agamasiswa = [@foreach($ar_agama as $g) {{ $g->agamasiswa }}, @endforeach];
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#doughnutChart'), {
                  type: 'doughnut',
                  data: {
                    labels: lblas,
                    datasets: [{
                      label: 'Agama Siswa',
                      data: agamasiswa,
                      backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Doughnut CHart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Perbandingan Gender siswa</h5>
<!-- Pie Chart -->
<canvas id="pieChart" style="max-height: 400px;"></canvas>
<script>
//ambil data gender dan jumlah gendernya dari DashboardController di fungsi index
var lbl2 = [@foreach($ar_jenis_kelamin as $g) '{{ $g->jenis_kelamin }}', @endforeach];
var jml = [@foreach($ar_jenis_kelamin as $g) {{ $g->jumlah }}, @endforeach];
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: lbl2,
                      datasets: [{
                        label: 'Jenis Kelamin',
                        //data: [300, 50, 100],
                        data: jml,

                      backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Pie CHart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Perbandingan Perolehan Nilai</h5>

              <!-- Line Chart -->
              <canvas id="lineChart" style="max-height: 400px;"></canvas>
              <script>
              //ambil data gender dan jumlah gendernya dari DashboardController di fungsi index
              var lblagg = [@foreach($ar_nilai as $g) '{{ $g->nilai }}', @endforeach];
              var hasilnilai = [@foreach($ar_nilai as $g) {{ $g->nilai }}, @endforeach];
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#lineChart'), {
                    type: 'line',
                    data: {
                      labels: lblagg,
                      datasets: [{
                        label: 'Hasil Nilai Siswa',
                        data: hasilnilai,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Line CHart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Perbandingan Gender Guru</h5>

              <!-- Polar Area Chart -->
              <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
              <script>
                //ambil data gender dan jumlah gendernya dari DashboardController di fungsi index
        var lblag = [@foreach($ar_gender as $g) '{{ $g->gender }}', @endforeach];
        var genderguru = [@foreach($ar_gender as $g) {{ $g->genderguru }}, @endforeach];
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#polarAreaChart'), {
                    type: 'polarArea',
                    data: {
                      labels: lblag,
                      datasets: [{
                        label: 'Jenis Kelamin',
                        data: genderguru,
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(75, 192, 192)',
                          'rgb(255, 205, 86)',
                          'rgb(201, 203, 207)',
                          'rgb(54, 162, 235)'
                        ]
                      }]
                    }
                  });
                });
              </script>
              <!-- End Polar Area Chart -->
          </div>
        </div>
      </div>


          </div>
        </div>
      </div>

    </div>
  </section>
</div>

@endsection