<?php include 'navbar.php'?>

<body>
<?php
    include "koneksi.php";
    
    $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
    ?>
    <div class="container-fluid">
    <h3>Ubah </h3>
    <form action="proses_ubah_detail.php" method="post"  enctype="multipart/form-data"  >
    <input type="hidden" name="id_transaksi" value="<?= $dt_transaksi['id_transaksi'] ?>">
    <br>
        Status :

        <select name="status" id="" class="form-control">
            <?php
            $qry_status=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
            while($data_status=mysqli_fetch_array($qry_status)){
                echo'<option value="'.$data_status['id_transaksi'].'">'.$data_status['status'].'</option>';
            }
            ?>
            <option value="-">-</option>
            <option value="baru">baru</option>
            <option value="proses">proses</option>
            <option value="selesai">selesai</option>
            <option value="diambil">diambil</option>
        </select>
<br>       

        Tgl bayar:
        <input type="date" class="form-control" name="tgl_bayar">
<br>
        Bayar :
        <select name="dibayar" id="" class="form-control">
        <?php
            $qry_status=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
            while($data_status=mysqli_fetch_array($qry_status)){
                echo'<option value="'.$data_status['id_transaksi'].'">'.$data_status['dibayar'].'</option>';
            }
            ?>
            <option value="-">-</option>
            <option value="dibayar">di bayar</option>
            <option value="belum_dibayar">belum_dibayar</option>
        
</select>
<br>
<input type="submit" name="simpan" value="Ubah Transaksi" class="btn btn-primary">
    </form>

</body>