<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-white bg-white" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsedTokoku" aria-expanded="true" aria-controls="collapsedTokoku">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Tokoku
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapsedTokoku" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{ route('dashboard') }}" >
                            Beranda
                        </a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsedPesanan" aria-expanded="true" aria-controls="collapsedPesanan">
                    <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                    Pesanan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapsedPesanan" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{ route("penjualan-tambah") }}" >
                            Tambah Pesanan
                        </a>
                        <a class="nav-link collapsed" href="{{ route("penjualan") }}" >
                            Riwayat Pesanan
                        </a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsedDagangan" aria-expanded="true" aria-controls="collapsedDagangan">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Dagangan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapsedDagangan" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{ route("product-tambah") }}" >
                            Tambah Produk
                        </a>
                        <a class="nav-link collapsed" href="{{ route('product') }}" >
                            List Produk
                        </a>
                    </nav>
                </div>

                <!-- Fitur pengaturan coming soon -->
                <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsedPengaturan" aria-expanded="true" aria-controls="collapsedPengaturan">
                    <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                    Pengaturan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapsedPengaturan" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="index.php" >
                            Pengaturan
                        </a>
                        <a class="nav-link collapsed" href="index.php" >
                            Pengaturan Staff
                        </a>
                    </nav>
                </div> -->

            </div>
        </div>
    </nav>
</div>
