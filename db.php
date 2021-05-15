<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "dbkuis2pweb";

$conn = new mysqli($servername, $username, $password, $dbname);

function check($usnama, $passw){
    global $conn;
    $sql = "SELECT id, username, password FROM login";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        if($usnama==$row['username']){

            if ($passw == $row['password']){
                session_start();
                $_SESSION['username'] = $usnama;
                // $_SESSION['password'] = $passw;
                header('location:index.php');
                exit;
                // echo "<script>alert('Selamat datang')</script>";
                
            }
            else{
                echo "<script>alert('Mohon cek kembali username atau password yang anda inputkan')</script>";
            }
            break;

        }elseif($usnama == "" || $passw == ""|| $usnama!=$row['username']){ 
            if($row['id']==2){//index row sebanyak ...
                // perulangan. jika data username dan password pada database bertambah, maka index row pada parameter elif terakhir disesuaikan
                echo "<script>alert('Mohon cek kembali username atau password yang anda inputkan')</script>";
            }else{
                continue;
            }
            
        }
        else{
            continue;
        }
        
    }
      
}


?>