<?php


if($_POST){
    
    $id_member=$_POST['id_member'];
    $id_paket=$_POST['id_paket'];
    $jumlah=$_POST['qty'];
    $tanggal= date('Y-m-d');
    echo $tanggal;
    $tanggal_bayar=$_POST['tanngal_bayar'];
    $lama_proses=4;
    $batas_waktu=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_proses),date('Y')));
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_user=$_POST['id_user'];


    
    //$harga =($conn,'SELECT harga from paket WHERE id_paket = ' . $paket_id);
    // $total_harga = $harga['harga'] * $harga['qty'];
    

    if(empty($id_member)){
        echo "<script>alert('nama tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif(empty($id_paket)) {
        echo "<script>alert('paket tidak boleh kosong');location.href='transaksi.php';</script>";
    }elseif(empty($status)) {
            echo "<script>alert('status tidak boleh kosong');location.href='transaksi.php';</script>";
    }elseif(empty($jumlah)) {
                echo "<script>alert('jumlah tidak boleh kosong');location.href='transaksi.php';</script>";
    }elseif(empty($dibayar)) {
        echo "<script>alert('dibayar tidak boleh kosong');location.href='transaksi.php';</script>";
} 
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into transaksi (id_member,id_paket,qty,tanggal,tanggal_bayar,batas_waktu,status, dibayar,id_user)
    value ('".$id_member."','".$id_paket."','".$jumlah."','".$tanggal."','".$tanggal_bayar."','".$batas_waktu."','".$status."','".$dibayar."','".$id_user."')");    
 if($insert){             
    echo "<script>alert('Sukses menambahkan transaksi');location.href='detail_transaksi.php';</script>";
    } else {             
        echo "<script>alert('Gagal menambahkan transaksi');location.href='transaksi.php';</script>";
    }

    
}
?>
