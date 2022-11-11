<?php

include "koneksi.php"; 
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    

    if(empty($jenis)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='paket.php';</script>";
    } elseif(empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='paket.php';</script>";
    } 
     else {    
            $update=mysqli_query($conn,"update paket set jenis='".$jenis."',id_paket='".$id_paket."', harga='".$harga."'
            where id_paket ='". $id_paket. "' ") or die(mysqli_error($conn));
            
            if($update){
                echo "<script>alert('Sukses update produk');location.href='paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update produk');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        }
        
    
}
?>