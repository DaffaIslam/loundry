<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login =mysqli_query($conn,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['statuslogin'] = true;
        header ("location:halaman_admin.php");
   
    }else if($data['level']=="kasir"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "kasir";
        $_SESSION['statuslogin'] = true;
        header ("location:halaman_kasir.php");

    }else if($data['level']=="owner"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "owner";
        $_SESSION['statuslogin'] = true;
        header ("location:halaman_owner.php");
  
}else{
    
    header("location:login.php?pesan=gagal");
    

}

	
}



?>