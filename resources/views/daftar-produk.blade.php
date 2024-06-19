@php
$title = "Daftar Produk - Chicken World";
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
                    <h4 class="p-xl-2 py-2 m-0">List Produk</h4>
                    <div class="d-flex flex-wrap no-gutters">
                        <div class="col-xl-6 col-12 p-xl-2 py-2">
                            @foreach ($data as $produk)
                                <div class="bg-white d-flex flex-wrap justify-content-between align-items-center gap-1 p-3">
                                    <div class="d-block">
                                        <span class="text-muted order-code">Nama Produk</span>
                                        <p class="m-0">{{ $produk->nama_produk }}</p>
                                    </div>

                                    <div class="d-block">
                                        <span class="text-muted order-code">Harga</span>
                                        <p class="m-0 text-primary">{{ number_format($produk->harga_produk, 0, ",", ".") }}</p>
                                    </div>

                                    <div class="d-block">
                                        <span class="text-muted order-code">Status</span>
                                        <select name="status_ready" id="status_ready_1" class="rounded form-control p-0">
                                            <option value="ready">Ready</option>
                                            <option value="not_ready">Not Ready</option>
                                        </select>
                                    </div>

                                    <div class="d-block">
                                        <a href="tambah-produk.php?aksi=edit&id_produk=1" class="btn btn-outline-secondary rounded-pill">Edit</a>
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

</body>

</html>
