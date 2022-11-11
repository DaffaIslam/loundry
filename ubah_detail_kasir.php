<?php include 'navbar_kasir.php'?>

<body>
<?php
    include "koneksi.php";
    
    $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
    ?>
    <div class="container-fluid">
    <h3>Ubah </h3>
    <form action="proses_ubah_detail_kasir.php" method="post"  enctype="multipart/form-data"  >
    <input type="hidden" name="id_transaksi" value="<?= $dt_transaksi['id_transaksi'] ?>">
    <br>
        Status :

        <select name="status" id="" class="form-control">
            <option value="-">-</option>
            <option value="baru">Baru</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
            <option value="diambil">Di ambil</option>
        </select>
<br>       

        Tgl bayar:
        <input type="date" class="form-control" name="tgl_bayar">
<br>
        Bayar :
        <select name="dibayar" id="" class="form-control">
        
            <option value="-">-</option>
            <option value="dibayar">di bayar</option>
            <option value="belum_dibayar">belum_dibayar</option>
        
</select>
<br>
<input type="submit" name="simpan" value="Ubah Transaksi" class="btn btn-primary">
    </form>

</body>