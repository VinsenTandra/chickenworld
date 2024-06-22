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

                    <form class="p-2" action="{{ route('penjualan-save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input name="nama_pembeli" id="nama_pembeli" class="form-control" type="text" placeholder="Silahkan isi nama pembeli">
                        </div>

                        <div class="form-group">
                            <label for="produk" class="form-label">Produk</label>
                            <select name="produk" id="produk" class="form-control" onchange="changeProduct()" required>
                                <option value="" selected hidden>-- Pilih Produk --</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                                @endforeach
                            </select>

                            <label id="harga_produk_label">0</label>
                            <input type="hidden" id="harga_produk" name="harga_produk" required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
                            <div class="d-flex">
                                <span class="btn btn-outline-secondary" onclick="decreasePesanan()"><i class="fa fa-minus"></i></span>
                                <input name="jumlah_pesanan" id="jumlah_pesanan" class="px-3" type="number" required>
                                <span class="btn btn-outline-secondary" onclick="increasePesanan()"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total_harga" class="form-label">Total Harga</label>
                            <input name="total_harga" id="total_harga" class="form-control" type="number" readonly>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_pengambilan" class="form-label">Tanggal Pengambilan</label>
                            <input name="tanggal_pengambilan" id="tanggal_pengambilan" class="form-control" type="datetime-local" required>
                        </div>

                        <div class="form-group">
                            <label for="status_pesanan" class="form-label">Status Pesanan</label>
                            <select name="status_pesanan" id="status_pesanan" class="form-control" required>
                                <option value="n">Belum Selesai</option>
                                <option value="y">Selesai</option>
                            </select>
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
    let total_harga = document.getElementById('total_harga');
    let harga_produk = document.getElementById('harga_produk');

    window.addEventListener('DOMContentLoaded', event => {
        jumlah_pesanan.value = 0;
        total_harga.value = 0;
    })

    function increasePesanan() {
        jumlah_pesanan.value++;
        total_harga.value = harga_produk.value * jumlah_pesanan.value;
    }

    function decreasePesanan() {
        if(jumlah_pesanan.value < 1) {
            jumlah_pesanan.value = 0;
            total_harga.value = harga_produk.value * jumlah_pesanan.value;
            return false;
        }

        jumlah_pesanan.value--;
        total_harga.value = harga_produk.value * jumlah_pesanan.value;
    }

    function changeProduct() {
        const data = document.getElementById('produk');
        const productData = @json($products);

        if(data.value != "") {
            const harga = productData.find(el => el.id == data.value).harga_produk;
            document.getElementById("harga_produk_label").innerText = harga.toLocaleString('de-DE', { minimumFractionDigits: 2 });
            harga_produk.value = harga;
        } else {
            harga_produk.value = 0;
        }

        total_harga.value = harga_produk.value * jumlah_pesanan.value;
    }
</script>
</body>

</html>
