<?php 
    // mengaktifkan session pada php
    session_start();
    
    // menghubungkan php dengan koneksi database
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    
    // cek apakah username dan password di temukan pada database
    if($cek > 0){
    
        $data = mysqli_fetch_assoc($login);
        
        // cek jika user login sebagai admin
        if($data['role']=="admin"){
    
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "admin";

            echo "<script>alert('Berhasil Masuk')</script>";
            echo "<meta http-equiv='refresh' content='0;url=../admin'>";
        
        // cek jika user login sebagai user
        }else if($data['role']=="pelanggan"){
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "pelanggan";

            echo "<script>alert('Berhasil Masuk')</script>";
            echo "<meta http-equiv='refresh' content='0;url=../user/view/checkout/keranjang.php'>";
        }else{
            echo "<script>alert('Username atau password salah. Silahkan coba lagi!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=../login.php'>";
        }	
    }else{
        echo "<script>alert('Username atau password salah. Silahkan coba lagi!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../login.php'>";
    }
 
?>