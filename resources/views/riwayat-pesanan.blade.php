@php
$title = "Riwayat Pesanan - Chicken World";
@endphp

<!DOCTYPE html>
<html lang="en">
@include("layout.header", ["title" => $title])

    <body class="sb-nav-fixed">
        @include("layout.navbar")

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include("layout.left-sidebar")
            </div>

        <div id="layoutSidenav_content">
            <main class="pt-4 bg-light h-screen-90">
                <div class="container-fluid">
                    <h4 class="p-xl-2 py-2 m-0">Riwayat Pesanan</h4>

                    <div class="d-block bg-white m-xl-2 my-2 shadow-sm">
                        <div class="row">
                            <div class="col-6 text-center riwayat-pesanan active" id="proses" onclick="setActive(this)">
                                <p class="m-0 p-3 ">Perlu Diproses</p>
                                <div class="bg-primary selected"></div>
                            </div>

                            <div class="col-6 text-center riwayat-pesanan" id="selesai" onclick="setActive(this)">
                                <p class="m-0 p-3 ">Pesanan Selesai</p>
                                <div class="bg-primary selected"></div>
                            </div>
                        </div>

                        <div class="p-xl-4 p-3">
                            <div class="position-relative search-order-code">
                                <i class="fa fa-search position-absolute search-icon"></i>
                                <input class="form-control py-3 px-xl-5 px-5" type="text" placeholder="Cari Nomor Pesanan">
                            </div>
                        </div>
                    </div>

                    <div class="list-pesanan active" id="proses-content">
                        <div class="d-flex flex-wrap no-gutters">
                            @foreach ($penjualans->where('is_done', 'n') as $penjualan)
                                <div class="col-xl-6 col-12 p-xl-2 py-2">
                                    <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Status Pesanan</span>
                                            <p class="m-0">Perlu diproses</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Nomor pesanan</span>
                                            <p class="m-0 text-primary">{{ $penjualan->nomor_pesanan }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Tanggal Pengambilan</span>
                                            <p class="m-0">{{ date_format(date_create($penjualan->tanggal_pengambilan), "d M Y") }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <p class="m-0">{{ $penjualan->product->nama_produk }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <p class="m-0">{{ $penjualan->jumlah_produk }} Porsi</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Nama Pembeli</span>
                                            <p class="m-0">{{ $penjualan->nama_pembeli }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Total Harga</span>
                                            <p class="m-0 text-primary">Rp{{ number_format($penjualan->jumlah_harga, 0, ",", ".") }}</p>
                                        </div>

                                        <div class="d-block">
                                            <form action="{{ route('change-penjualan-status') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $penjualan->id }}">
                                                <button type="submit" class="btn btn-success rounded-pill">Selesai</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="list-pesanan" id="selesai-content">
                        <div class="d-flex flex-wrap no-gutters">
                            @foreach ($penjualans->where('is_done', 'y') as $penjualan)
                                <div class="col-xl-6 col-12 p-xl-2 py-2">
                                    <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Status Pesanan</span>
                                            <p class="m-0">Pesanan Selesai</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Nomor pesanan</span>
                                            <p class="m-0 text-primary">{{ $penjualan->nomor_pesanan }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Tanggal Pengambilan</span>
                                            <p class="m-0">{{ date_format(date_create($penjualan->tanggal_pengambilan), "d M Y") }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <p class="m-0">{{ $penjualan->product->nama_produk }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <p class="m-0">{{ $penjualan->jumlah_produk }} Porsi</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Nama Pembeli</span>
                                            <p class="m-0">{{ $penjualan->nama_pembeli }}</p>
                                        </div>

                                        <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                            <span class="text-muted order-code">Total Harga</span>
                                            <p class="m-0 text-primary">Rp{{ number_format($penjualan->jumlah_harga, 0, ",", ".") }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </main>

            @include('layout.footer')
        </div>
    </div>

@include("layout.script")

<script>
    function setActive(e) {
        const history_pesanan = document.querySelectorAll(".riwayat-pesanan");
        const list_pesanan = document.querySelectorAll(".list-pesanan");

        for(pesanan of history_pesanan) {
            pesanan.classList.remove('active');
        }

        for(pesanan of list_pesanan) {
            pesanan.classList.remove('active');
        }

        document.getElementById(e.id).classList.add('active');

        if(e.id == "proses") document.getElementById('proses-content').classList.add('active');
        if(e.id == "selesai") document.getElementById('selesai-content').classList.add('active');
    }
</script>
</body>

</html>
