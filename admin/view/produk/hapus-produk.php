<?php
    require "../../../config/koneksi.php";
    $id = $_GET['id'];
    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id'");
    $pecah = $ambil->fetch_assoc();
    $foto = $pecah['foto'];
    if (file_exists("../image/$foto")){
        unlink("../image/$foto");
    }

    $koneksi->query("DELETE FROM produk WHERE id_produk='$id'"); 
?>
