<?php
    // koneksi ke database
    $koneksi = new mysqli("localhost", "kysti", "K112233", "toko_online");

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>