<?php

include "koneksi.php"; 
if($_POST){
    $id_user=$_POST['id_user'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];
    

    if(empty($nama)){
        echo "<script>alert('nama  tidak boleh kosong');location.href='data_member.php';</script>";
    } elseif(empty($username)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='data_member.php';</script>";
    }elseif(empty($level)) {
                echo "<script>alert('telephone tidak boleh kosong');location.href='data_member.php';</script>";
    } 
     else {    
            $update=mysqli_query($conn,"update user set nama='".$nama."',username='".$username."',password='".$password."',level='".$level."'
            where id_user ='".$id_user."'") or die(mysqli_error($conn));
            
            if($update){
                echo "<script>alert('Sukses update ');location.href='data_admin.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='data_member.php?id_user=".$id_user."';</script>";
            }
        }
        
    
}
?>