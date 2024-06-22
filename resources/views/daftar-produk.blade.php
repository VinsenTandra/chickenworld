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
                        @foreach ($data as $produk)
                            <div class="col-lg-6 col-12 p-xl-2 py-2">
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
                                        <form id="{{ "status_product_form_".$produk->id }}" action="{{ route('change-product-status') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $produk->id }}">
                                            <select name="status_stok" id="status_stok" onchange="changeStatusStok({{$produk->id}})" class="rounded form-control p-0">
                                                <option value="ready" {{ ($produk->status_stok == "ready") ? "selected" : "" }}>Ready</option>
                                                <option value="not ready" {{ ($produk->status_stok == "not ready") ? "selected" : "" }}>Not Ready</option>
                                            </select>
                                        </form>
                                    </div>

                                    <div class="d-block">
                                        <a href="{{ route('product-edit', ['id' => $produk->id] ) }}" class="btn btn-outline-secondary rounded-pill">Edit</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </main>

            @include('layout.footer')
        </div>
    </div>

@include("layout.script")

<script>

function changeStatusStok(id) {
    document.getElementById(`status_product_form_${id}`).submit();
}
</script>

</body>

</html>
