<?php
    session_start();
    //mendapatkan id produk dari url
    $id_produk = $_GET['id'];
    //jika sudah ada  produk itu dikeranjang, maka produk itu jumlahnya di +1
    if(isset($_SESSION['keranjang'][$id_produk])){
        $_SESSION['keranjang'][$id_produk]+=1;
    }
    // selain itu jika belum ada dikeranjang maka produk itu dianggap dibeli
    else {
        $_SESSION['keranjang'][$id_produk] = 1;
    }
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
    
    echo "<script>alert('Produk telah dimasukkan kekeranjang belanja')</script>";
    echo "<script>location='keranjang.php';</script>";
?>