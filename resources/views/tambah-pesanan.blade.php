<?php
$title = "Tambah data pesanan - Chicken World";
?>
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
                    <h4 class="p-2 m-0">Tambah Pesanan</h4>

                    <form class="p-2" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input name="nama_pembeli" id="nama_pembeli" class="form-control" type="text" placeholder="Silahkan isi nama pembeli">
                        </div>

                        <div class="form-group">
                            <label for="produk" class="form-label">Produk</label>
                            <select name="produk" id="produk" class="form-control">
                                <option value="1">Salted Egg Chicken</option>
                                <option value="2">Spicy Galbi Chicken</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
                            <div class="d-flex">
                                <span class="btn btn-outline-secondary" onclick="decreasePesanan()"><i class="fa fa-minus"></i></span>
                                <input name="jumlah_pesanan" id="jumlah_pesanan" class="px-3" type="number">
                                <span class="btn btn-outline-secondary" onclick="increasePesanan()"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga_produk" class="form-label">Harga Produk</label>
                            <input name="harga_produk" id="harga_produk" class="form-control" type="number">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-12">Tambah Pesanan</button>
                        </div>
                    </form>
                </div>
            </main>

            @include("layout.footer")
        </div>
    </div>

    @include("layout.script")

    <script>
        let jumlah_pesanan = document.getElementById('jumlah_pesanan');

        window.addEventListener('DOMContentLoaded', event => {
            jumlah_pesanan.value = 0;
        })

        function increasePesanan() {
            jumlah_pesanan.value++;
        }

        function decreasePesanan() {
            if(jumlah_pesanan.value < 1) {
                jumlah_pesanan.value = 0;
                return false;
            }

            jumlah_pesanan.value--;
        }
    </script>
</body>

</html>
