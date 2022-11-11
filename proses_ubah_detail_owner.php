<?php

include "koneksi.php"; 
if($_POST){
    $status=$_POST['status'];
    $id_transaksi=$_POST['id_transaksi'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $bayar=$_POST['dibayar'];
    
    if(empty($status)){
        echo "<script>alert('status  tidak boleh kosong');location.href='ubah_detail_owner.php';</script>";
    }
     else {    
            $update=mysqli_query($conn,"update transaksi set status='".$status."',tanggal_bayar='".$tgl_bayar."',dibayar='".$bayar."' 
            where id_transaksi ='".$id_transaksi."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update ');location.href='detal_transaksi_owner.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_detail_owner.php?id_tranksaksi=".$id_transaksi."';</script>";
            }
        }
        
    
}
?>