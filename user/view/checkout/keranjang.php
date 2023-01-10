<?php
    session_start();
    // cek apakah yang mengakses halaman ini sudah login
    require "../../../config/koneksi.php";

    if(!empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])){
        echo"<script>alert('Keranjang kosong, silahkan belanja terlebih dahulu');</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="user/assets/css/style.css">
    <link rel="stylesheet" href="user/assets/css/banner.css">
    <link rel="stylesheet" href="user/assets/css/footer.css">
</head>
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
                        <a class="nav-link" href="login.php">Masuk</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="view/keranjang/keranjang.php">Keranjang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th>Produk</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Sub Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $nomor=1;
                    if(isset($_SESSION['keranjang'])) {
                        foreach($_SESSION["keranjang"] as $id_produk=>$jumlah); ?>
                        <!-- menampilkan produk yang sedang di perulangkan berdasarkan idproduk-->
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM produk where id_produk='$id_produk'");
                        $pecah=$ambil->fetch_assoc();
                        $subharga =$pecah["harga_produk"]*$jumlah;
                        ?>
                                                            
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama_produk']; ?></td>
                                <td>
                                    <img src="../../image/<?php echo $pecah['foto']; ?>" width="100">
                                </td>
                                <td><?php echo number_format ($pecah['harga_produk']); ?></td>
                                <td><?php echo $jumlah; ?></td>
                                <td>Rp. <?php echo number_format($subharga); ?></td>
                                <td>
                                    <a href="hapus-keranjang.php?id=<?php echo $id_produk?>" class="btn btn-danger btn-xs">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                   <?php } ?>
                </tbody>
            </table>
            <a href="../index.php" class="btn btn-default">Lanjutkan Belanja</a>
            <a href="checkout.php" class="btn btn-primary">Checkout</a>
        </div>
    </div>
</body>
</html>