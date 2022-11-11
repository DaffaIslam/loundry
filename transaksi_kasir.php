<?php include 'navbar_kasir.php'?>
<div class="container-fluid">
<h3>Transaksi Member</h3>

<form action="proses_transaksi_kasir.php" method="post">   
<br>  
        <input type="hidden" value="id">
        Nama  :
         <br>
        <select name="id_member" id="" class="form-control">
            <option></option>
        <?php 
            include "koneksi.php";

            $qry_member=mysqli_query($conn,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
            echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';   
            }
            ?>
        </select>
        <br>
        User  :
         <br>
        <select name="id_user" id="" class="form-control">
            <option></option>
        <?php 
            include "koneksi.php";

            $qry_user=mysqli_query($conn,"select * from user");
            while($data_user=mysqli_fetch_array($qry_user)){
            echo '<option value="'.$data_user['id_user'].'">'.$data_user['nama'].'</option>';   
            }
            ?>
        </select>
        <br>
        Jenis :
        <select name="id_paket"   class="form-control">    
        <option></option>
        <?php 
            include "koneksi.php";

            $qry_paket=mysqli_query($conn,"select * from paket");
            while($data_paket=mysqli_fetch_array($qry_paket)){
            echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].'</option>';   
            }
            ?>
        </select>
        <br>
        Jumlah :
        <br>
        <input type="number" name="qty" value="1" class="form-control">
        <br>
        
        Status :
        <select name="status" class="form-control">
            <option></option>
            <option value="baru">Baru</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
            <option value="diambil">Diambil</option>
        </select>
        <br>
        Bayar :
        <select name="dibayar" class="form-control"> 
                <option></option>
                <option value="dibayar">Dibayar</option>
                <option value="belum_dibayar">Belum dibayar</option>
        </select>

<br>
<input type="submit" name="simpan" value="Tambah " class="btn btn-primary">
</div>
