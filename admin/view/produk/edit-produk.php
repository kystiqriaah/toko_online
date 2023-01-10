<?php
    require "../../../config/koneksi.php";
    $id = $_GET['id'];
    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id'");
    $pecah=$ambil->fetch_assoc();
    
    echo "<pre>";
    print_r($pecah);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>

<style>
    .no-decoration{
        text-decoration: none;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php require "../dashboard/navbar.php";?>
        
        <div class="content-wrapper">
            <!-- /.content-header -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Produk</h4>
                                    <div class="card-tools">
                                        <a href="tambah-produk.php?halaman=tambahproduk" class="btn btn-sm btn-primary">Baru</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama Produk</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pecah['nama_produk'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga (Rp)</label>
                                                    <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $pecah['harga_produk'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="berat">Berat (Gr)</label>
                                                    <input type="number" class="form-control" id="berat" name="berat"value="<?php echo $pecah['berat'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="berat">Stok</label>
                                                    <input type="" class="form-control" id="stok" name="stok">
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi'];?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Foto Sebelumnya</label>
                                                    <img src="../../image/<?php echo $pecah['foto'];?>" width="200">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ganti Foto</label>
                                                    <input type="file" class="form-control" id="foto" name="foto">
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                                            </form>
                                            <?php
                                                if(isset($_POST['ubah'])){
                                                    $namafoto = $_FILES['foto']['name'];
                                                    $lokasi = $_FILES['foto']['tmp_name'];
                                                    // jika foto diubah
                                                    if (!empty($lokasi)){
                                                        move_uploaded_file($lokasi, "../../image/$namafoto");

                                                        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]', harga_produk='$_POST[harga]', berat='$_POST[berat]',
                                                        foto='$namafoto', deskripsi='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
                                                    } else{
                                                        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]', harga_produk='$_POST[harga]', berat='$_POST[berat]',
                                                        deskripsi='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
                                                    }
                                                    
                                                    echo "<div class='alert alert-info mt-3'>Data Produk telah diubah</div>";
                                                    echo "<meta http-equiv='refresh' content='1;url=produk.php'>"; 
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard.js"></script>
</body>
</html>