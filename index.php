<?php
    session_start();
    // $timeout = 10;
    if(!isset($_SESSION['username'])){
        // echo '<h2>Akses kadaluarsa. Silahkan <a href="halaman_login.php">Login</a> kembali</h2>';
        header('location:halaman_login.php');
        exit;

    }else {
        echo '<h2>Ini adalah halaman utama</h2>';
        echo '<h1>Selamat datang '. $_SESSION['username'].'</h1>';
        echo '<a href="destroy.php">Logout</a>';

        // $elapsed_time = time()-$_SESSION['username'];
        // if($elapsed_time >= $timeout){
        //     session_destroy();
        // }
    }

    
    // if(isset($_SESSION['username'])){
    //     $elapsed_time = time()-$_SESSION['username'];
    //     if($elapsed_time >= $timeout){
    //         session_destroy();
    //     }
    // }
?>