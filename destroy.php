<?php
    session_start();
    session_destroy();
    header('location: halaman_login.php')
    // $timeout = 10;
    // if(isset($_SESSION['username'])){
    //     $elapsed_time = time()-$_SESSION['username'];
    //     if($elapsed_time >= $timeout){
    //         session_destroy();
    //     }
    // }

    // $_SESSION['start_session']=time();


?>