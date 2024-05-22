<?php require './functions/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <?php includeWithVariables('./layout/header.php', array('title' => 'Beranda - Chicken World')); ?>
    
    <body class="sb-nav-fixed">
        <?php include "./layout/navbar.php"; ?>
    
        <div id="layoutSidenav">
            <?php include "./layout/left-sidebar.php"; ?>
        
            <div id="layoutSidenav_content">
                <main class="bg-light">
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-xl-7 col-12">
                                <!-- Data pesanan scorebox -->
                                <h5 class="mt-4 px-lg-2 px-md-0 px-1">Data 30 Hari Terakhir</h5>
                                
                                <div class="row my-2 no-gutters gap-lg-0 gap-md-2 gap-0 justify-lg-content-between align-items-end">    
                                    <div class="col-xl-4 px-lg-2 px-md-0 p-1 col-lg-4 col-md-3 col-6">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <p>Perlu Diproses</p>
                                                <h5>
                                                    <i class="fa fa-chart-pie"></i>
                                                    0
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 px-lg-2 px-md-0 p-1 col-lg-4 col-md-3 col-6 p-0">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <p>Pesanan Selesai</p>
                                                <h5>
                                                    <i class="fa fa-chart-pie"></i>
                                                    0
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-4 px-lg-2 px-md-0 p-1 col-lg-4 col-md-3 col-6 p-0">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <p>Stok Habis</p>
                                                <h5>
                                                    <i class="fa fa-chart-pie"></i>
                                                    0
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
                                    
                                    <a class="order-code" href="index.php">Lihat Selengkapnya</a>
                                </div>
                                
                                <div class="card my-2">
                                    <div class="card-body d-flex flex-wrap flex-col p-2">
                                        <!-- List pesanan belum diproses -->
                                        <div class="d-flex p-2 justify-content-between col-12 p-0">
                                            <div class="d-block">
                                                <span class="order-code">CW0000001</span>
                                                <p class="m-0 h6 font-weight-normal">Salted Egg Chicken</p>
                                            </div>
                                            
                                            <div class="d-block text-right">
                                                <span class="order-code text-muted">Nama Pembeli</span>
                                                <p class="m-0 h6 font-weight-normal">Vinsen Tandra</p>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex p-2 justify-content-between col-12 p-0">
                                            <div class="d-block">
                                                <span class="order-code">CW0000002</span>
                                                <p class="m-0 h6 font-weight-normal">Salted Egg Chicken</p>
                                            </div>
                                            
                                            <div class="d-block text-right">
                                                <span class="order-code text-muted">Nama Pembeli</span>
                                                <p class="m-0 h6 font-weight-normal">Matthew Abel</p>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex p-2 justify-content-between col-12 p-0">
                                            <div class="d-block">
                                                <span class="order-code">CW0000003</span>
                                                <p class="m-0 h6 font-weight-normal">Spicy Galbi Chicken</p>
                                            </div>
                                            
                                            <div class="d-block text-right">
                                                <span class="order-code text-muted">Nama Pembeli</span>
                                                <p class="m-0 h6 font-weight-normal">Vinsen Tandra</p>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex p-2 justify-content-between col-12 p-0">
                                            <div class="d-block">
                                                <span class="order-code">CW0000004</span>
                                                <p class="m-0 h6 font-weight-normal">Spicy Galbi Chicken</p>
                                            </div>
                                            
                                            <div class="d-block text-right">
                                                <span class="order-code text-muted">Nama Pembeli</span>
                                                <p class="m-0 h6 font-weight-normal">Vinsen Tandra</p>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex p-2 justify-content-between col-12 p-0">
                                            <div class="d-block">
                                                <span class="order-code">CW0000005</span>
                                                <p class="m-0 h6 font-weight-normal">Salted Egg Chicken</p>
                                            </div>
                                            
                                            <div class="d-block text-right">
                                                <span class="order-code text-muted">Nama Pembeli</span>
                                                <p class="m-0 h6 font-weight-normal">Vincent Williamson</p>
                                            </div>
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
    </body>
</html>
