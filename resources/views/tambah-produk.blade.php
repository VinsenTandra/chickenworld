@php
$fitur = (isset($product)) ? "Edit" : "Tambah";
$title = "{$fitur} data produk - Chicken World";
$route = (isset($product)) ? route("product-update") : route("product-save");
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
            <main class="pt-2 bg-light">
                <div class="container-fluid">
                    <h4 class="p-2 m-0"><?= $fitur; ?> Produk</h4>

                    <form class="p-2" action="{{ $route }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ isset($product) ? $product->id : "" }}">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input name="nama_produk" id="nama_produk" class="form-control" value="{{ isset($product) ? $product->nama_produk : "" }}" type="text" placeholder="Silahkan isi nama produk">
                        </div>

                        <div class="form-group">
                            <label for="harga_produk" class="form-label">Harga Produk</label>
                            <input name="harga_produk" id="harga_produk" class="form-control" value="{{ isset($product) ? $product->harga_produk : "" }}" type="number">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-12">{{ $fitur }} Produk</button>
                        </div>
                    </form>
                </div>
            </main>

            @include("layout.footer")
        </div>
    </div>

    @include("layout.script")

</body>

</html>
