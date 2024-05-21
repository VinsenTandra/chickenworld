<?php
include './functions/config.php';

$fitur = (isset($_GET['aksi'])) ? "Edit" : "Tambah";
$title = "{$fitur} data produk - Chicken World";
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
            <main class="pt-2 bg-light">
                <div class="container-fluid">
                    <h4 class="p-2 m-0"><?= $fitur; ?> Produk</h4>
                    
                    <form class="p-2" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Silahkan isi nama produk">
                        </div>
                        
                        <div class="form-group">
                            <label for="gambar_produk" class="form-label">Gambar Produk</label>
                            <input name="gambar_produk" id="gambar_produk" class="form-control" type="file">
                        </div>
                        
                        <div class="form-group">
                            <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                            <textarea name="deskripsi_produk" id="deskripsi_produk" class="form-control" rows="5"></textarea>
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
            
            <?php include "./layout/footer.php"; ?>
        </div>
    </div>
    
    <?php include "./layout/script.php"; ?>
    
</body>

</html>
