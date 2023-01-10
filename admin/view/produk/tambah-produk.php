<?php
  // koneksi ke database
  require "../../../config/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>

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
                                    <form action="#">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-primary">Cari</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <select name="kategori_id">
                                                        <?php
                                                            $ambil=$koneksi->query("SELECT * FROM kategori");
                                                            while($pecah=$ambil->fetch_assoc()){
                                                                echo '<option value="'.$pecah['id'] .'">'.$pecah['nama'].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga (Rp)</label>
                                                    <input type="number" class="form-control" id="harga" name="harga">
                                                </div>
                                                <div class="form-group">
                                                    <label for="berat">Berat (Gr)</label>
                                                    <input type="number" class="form-control" id="berat" name="berat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="berat">Stok</label>
                                                    <input type="" class="form-control" id="stok" name="stok">
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" class="form-control" id="foto" name="foto">
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                                            </form>
                                            <?php
                                                if(isset($_POST['save'])){
                                                    $nama = $_FILES['foto']['name'];
                                                    $lokasi = $_FILES['foto']['tmp_name'];
                                                    move_uploaded_file($lokasi,"../../image/".$nama);
                                                    $koneksi->query("INSERT INTO produk (nama_produk, kategori_id, harga_produk, berat, foto, ketersediaan_stok, deskripsi)
                                                    VALUES ('$_POST[nama]', '$_POST[kategori_id]', '$_POST[harga]','$_POST[berat]', '$nama', '$_POST[stok]', '$_POST[deskripsi]')");

                                                    echo "<div class='alert alert-info mt-3'>Data Tersimpan</div>";
                                                    // echo "<meta http-equiv='refresh' content='1;url=produk.php'>";
                                                
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