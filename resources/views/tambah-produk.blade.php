@php
$fitur = (isset($_GET['aksi'])) ? "Edit" : "Tambah";
$title = "{$fitur} data produk - Chicken World";
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

                    <form class="p-2" action="{{ route("product-save") }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input name="nama_produk" id="nama_produk" class="form-control" type="text" placeholder="Silahkan isi nama produk">
                        </div>

                        <div class="form-group">
                            <label for="harga_produk" class="form-label">Harga Produk</label>
                            <input name="harga_produk" id="harga_produk" class="form-control" type="number">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-12">Tambah Produk</button>
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
