<?php
    // koneksi ke database
    require "../config/koneksi.php";
    session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
    if(!isset($_SESSION['pelanggan'])){
        echo "<script>alert('Masuk terlebih dahulu')</script>";
        echo "<script>location='../login.php'</script>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOME BY MI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<style>
    .warna{
        background-color: aquamarine;
    }
    .banner{
        height: 80vh;
        background: linear-gradient(rgba(0,0,0,0.4) , rgba(0,0,0,0.4)), url('assets/img/banner/Categories4.jpg');
    }
    .highlighted-kategori{
        height: 250px;
    }
    .kategori-toner{
        background: linear-gradient(rgba(0,0,0,0.4) , rgba(0,0,0,0.4)), url('assets/img/product/produk (1).jpg');
        background-size: cover;
        background-position: center;
    }
    .no-decoration{
        color: white;
    }
    .no-decoration:hover{
        color: aquamarine;
    }
    .image-box{
        height: 250px;

    }
    .image-box img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="view/daftar/daftar.php">Daftar<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="view/keranjang/keranjang.php">Keranjang</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="view/keranjang/keranjang.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>SOME BY MI</h1>
            <h3>Mau Cari Apa</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Barang" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna text-white">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Higlighted Kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-toner d-flex justify-content-center align-items-center">
                        <h4><a class="no-decoration" href="produk.php?kategori=best seller" style="text-decoration: none;">BEST SELLER</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-toner d-flex justify-content-center align-items-center">
                        <h4><a class="no-decoration" href="produk.php?kategori=skin type" style="text-decoration: none;">SKIN TYPE</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="highlighted-kategori kategori-toner d-flex justify-content-center align-items-center">
                        <h4><a class="no-decoration" href="produk.php?kategori=product"  style="text-decoration: none;">PRODUCT</a></h4>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
                <?php
                $ambil= $koneksi->query("SELECT * FROM produk");
                while($data = $ambil->fetch_assoc()){
                ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image<?php echo $data['foto'];?>" alt="Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nama_produk'];?></h5>
                            <p class="card-text text-truncate"><?php echo $data['deskripsi'];?></p>
                            <p class="card-text text-harga"><?php echo number_format($data['harga_produk']);?></p>
                            <a href="user/view/produk/details-produk.php?nama=<?php echo $data['nama_produk']?>" class="btn warna">Lihat Details</a>
                            <a href="user/view/checkout/beli.php>id=<?php echo $data['id_produk'];?>" class="btn warna">Beli</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "view/navbar/footer.php";?>
    

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>