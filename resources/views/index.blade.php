<!DOCTYPE html>
<html lang="en">
@include("layout.header", ["title" => "Dashboard"])

<body class="sb-nav-fixed">
    @include("layout.navbar")

    <div id="layoutSidenav">
        @include("layout.left-sidebar")

        <div id="layoutSidenav_content">
            <main class="bg-light">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col-xl-7 col-12">
                            <!-- Data pesanan scorebox -->
                            <h5 class="mt-4 px-lg-2 px-md-0 px-1">Data 30 Hari Terakhir</h5>

                            <div class="row my-2 no-gutters gap-lg-0 gap-md-2 gap-0 justify-lg-content-between align-items-end">
                                <div class="px-lg-2 px-md-0 p-1 col-6">
                                    <a class="card shadow-sm text-decoration-none" href="{{ route('penjualan') }}">
                                        <div class="card-body">
                                            <p class="text-dark">Perlu Diproses</p>
                                            <h5 class="text-dark">
                                                <i class="fa fa-chart-pie"></i>
                                                {{ $penjualans->count() }}
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-lg-2 px-md-0 p-1 col-6 p-0">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <p>Pesanan Selesai</p>
                                            <h5>
                                                <i class="fa fa-chart-pie"></i>
                                                {{ $penjualan_selesai }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-4 px-lg-2 px-md-0 px-1">Statistik Toko</h5>

                            <div class="card m-lg-2 m-md-0 m-1">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Pendapatan
                                </div>
                                <div class="card-body px-0"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-12">
                            <!-- pesanan belum diproses -->
                            <div class="d-flex justify-content-between mt-4">
                                <h5 class="m-0">Pesanan Belum Diproses</h5>

                                <a class="order-code" href="{{ route("penjualan") }}">Lihat Selengkapnya</a>
                            </div>

                            <div class="card my-2">
                                <div class="card-body d-flex flex-wrap flex-col p-2">
                                    @foreach($penjualans as $penjualan)
                                        <div class="d-flex p-2 justify-content-between col-12 p-0">
                                            <div class="d-block">
                                                <span class="order-code">{{ $penjualan->nomor_pesanan }}</span>
                                                <p class="m-0 h6 font-weight-normal">{{ $penjualan->product->nama_produk }}</p>
                                            </div>

                                            <div class="d-block text-right">
                                                <span class="order-code text-muted">Nama Pembeli</span>
                                                <p class="m-0 h6 font-weight-normal">{{ $penjualan->nama_pembeli }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                    @if($penjualans->count() < 1)
                                        <p>Sedang Kosong</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include("layout.footer")
        </div>
    </div>

@include("layout.script")

<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: @json($data_tahunan),
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 300_000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>
</body>
</html>
