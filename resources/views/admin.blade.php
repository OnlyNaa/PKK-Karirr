@extends('layouts.app')

@section('content')



<div class="container">
  <div class="row ">
    <div class="col-lg-12 mt-4 py-4">
      <div class="d-flex justify-content-between" data-aos="fade-up">
        <h4 class="h4">SELAMAT DATANG TUAN DI L1FECAR33R</h4>
      </div>
      <div class="row justify-content-left">
        {{-- Data status karir tidak bekerja --}}
        <div class="col-lg-3 col-md-4 col-sm-4 mb-4" data-aos="fade-up">
          <div class="card bg-purple text-white" style="background-color: #F9FFBC">
            <div class="card-body d-flex align-items-center">
              <div class="ms-3">
                <p class="title-data fw-medium text-secondary">Pengangguran</p>
                <h1 class="detail-data fw-bold text-primary-emphasis">69</h1>
                <a href="{{ route('detail.status') }}" class="detail text-primary-emphasis">Detail siswa menganggur..</a>
              </div>
            </div>
          </div>
        </div>
        {{-- Data status karir bekerja --}}
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4" data-aos="fade-up">
          <div class="card bg-purple text-white" style="background-color: #F9FFBC">
            <div class="card-body d-flex align-items-center">
              <div class="ms-3">
                <p class="title-data fw-medium text-secondary">Bekerja</p>
                <h1 class="detail-data fw-bold text-primary-emphasis">2.000</h1>
                <a href="{{ route('detail.status') }}" class="detail text-primary-emphasis">Detail siswa bekerja..</a>
              </div>
            </div>
          </div>
        </div>
        {{-- Data status karir kuliah --}}
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4" data-aos="fade-up">
          <div class="card bg-purple text-white" style="background-color: #F9FFBC">
            <div class="card-body d-flex align-items-center">
              <div class="ms-3">
                <p class="title-data fw-medium text-secondary">Kuliah</p>
                <h1 class="detail-data fw-bold text-primary-emphasis">780</h1>
                <a href="{{ route('detail.status') }}" class="detail text-primary-emphasis">Detail siswa berkuliah..</a>
              </div>
            </div>
          </div>
        </div>
        {{-- Data status karir wirausaha --}}
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4" data-aos="fade-up">
          <div class="card bg-purple text-white" style="background-color: #F9FFBC">
            <div class="card-body d-flex align-items-center">
              <div class="ms-3">
                <p class="title-data fw-medium text-secondary">Wirausaha</p>
                <h1 class="detail-data fw-bold text-primary-emphasis">430</h1>
                <a href="{{ route('detail.status') }}" class="detail text-primary-emphasis">Detail siswa berwirausaha..</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        {{-- Chart grafik data karir --}}
        <div class="col-lg-6">
          <div class="card p-3" data-aos="fade-up">
            <h4 class="mb-4">Presentase Data Karir</h4>
            <canvas id="myChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Menganggur', 'Bekerja', 'Kuliah', 'Wirausaha'],
      datasets: [{
        label: 'Presentase Data Karir',
        data: [50, 1600, 500, 600],
        backgroundColor: [
          '#FF6384',
          '#36A2EB',
          '#FFCE56',
          '#4CAF50'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'bottom',
        },
        title: {
          display: true,
          text: 'Presentase Data Karir'
        }
      }
    }
  });
</script>
@endsection
