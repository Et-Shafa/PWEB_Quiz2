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
        // echo "<pre>";print_r($row);
        if($usnama==$row['username']){
            // echo $row[$usnama];

            if ($passw == $row['password']){
                echo "<script>alert('Selamat datang')</script>";
            }
            else{
                echo "<script>alert('Mohon cek kembali username atau password yang anda inputkan')</script>";
            }
            break;

        }elseif($usnama == "" || $passw == ""|| $usnama!=$row['username'] && $row['id']==2){
            echo "<script>alert('Mohon cek kembali username atau password yang anda inputkan')</script>";

        }
        else{
            continue;
        }
        
    }
      
}


?>