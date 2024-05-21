<?php
include './functions/config.php';

$title = "Riwayat Pesanan - Chicken World";
?>
<!DOCTYPE html>
<html lang="en">
<?php includeWithVariables("./layout/header.php", array("title" => $title)) ?>

<body class="sb-nav-fixed">
    <?php include "./layout/navbar.php"; ?>
    
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include "./layout/left-sidebar.php"; ?>
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
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Perlu diproses</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000005</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">25 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Salted Egg Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">1 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Vincent Williamson</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp22.000</p>
                                    </div>
                                    
                                    <div class="d-block">
                                        <a class="btn btn-success rounded-pill">Selesai</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Perlu diproses</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000004</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">25 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Spicy Galbi Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">2 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Vinsen Tandra</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp44.000</p>
                                    </div>
                                    
                                    <div class="d-block">
                                        <a class="btn btn-success rounded-pill">Selesai</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Perlu diproses</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000003</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">24 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Spicy Galbi Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">1 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Vinsen Tandra</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp22.000</p>
                                    </div>
                                    
                                    <div class="d-block">
                                        <a class="btn btn-success rounded-pill">Selesai</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Perlu diproses</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000002</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">23 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Salted Egg Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">1 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Matthew Abel</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp22.000</p>
                                    </div>
                                    
                                    <div class="d-block">
                                        <a class="btn btn-success rounded-pill">Selesai</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="list-pesanan" id="selesai-content">
                        <div class="d-flex flex-wrap no-gutters">
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Pesanan Selesai</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000009</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">25 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Salted Egg Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">1 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Vincent Williamson</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp22.000</p>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Pesanan Selesai</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000008</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">25 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Salted Egg Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">1 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Vincent Williamson</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp22.000</p>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Pesanan Selesai</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000007</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">25 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Salted Egg Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">1 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Vincent Williamson</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp22.000</p>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-12 p-xl-2 py-2">
                                <div class="bg-white d-flex flex-wrap align-items-center p-3 shadow-sm">
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Status Pesanan</span>
                                        <p class="m-0">Pesanan Selesai</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nomor pesanan</span>
                                        <p class="m-0 text-primary">CW000000006</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Tanggal Transaksi</span>
                                        <p class="m-0">25 April 2024</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">Salted Egg Chicken</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <p class="m-0">1 Porsi</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Nama Pembeli</span>
                                        <p class="m-0">Vincent Williamson</p>
                                    </div>
                                    
                                    <div class="d-block col-lg-4 col-md-6 col-6 py-2">
                                        <span class="text-muted order-code">Total Harga</span>
                                        <p class="m-0 text-primary">Rp22.000</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </main>
            
            <?php include "./layout/footer.php"; ?>
        </div>
    </div>
    
    <?php include "./layout/script.php"; ?>
    
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
