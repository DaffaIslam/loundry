<<?php if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $level=$_POST['level'];    
    if(empty($nama)){         
        echo "<script>alert('nama  tidak boleh kosong');location.href='data_admin.php';</script>";
    } elseif(empty($username)){         
        echo "<script>alert('username tidak boleh kosong');location.href='data_admin.php';</script>";
    } elseif(empty($password)){         
        echo "<script>alert('password tidak boleh kosong');location.href='data_admin.php';</script>";
    } elseif(empty($level)){         
        echo "<script>alert('level tidak boleh kosong');location.href='data_admin.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, password, level) 
        value ('".$nama."','".$username."','".$password."','".$level."')");    
     if($insert){             
        echo "<script>alert('Sukses menambahkan admin');location.href='data_admin.php';</script>";
        } else {             
            echo "<script>alert('Gagal menambahkan admin');location.href='data_admin.php';</script>";
        }
    }
}
?>

