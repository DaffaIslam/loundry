<?php include 'navbar.php'?>

<body>
<?php
    include "koneksi.php";
    
    
    $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket= '".$_GET['id_paket']."'");

    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <div class="container-fluid">
    <h3>Ubah Produk</h3>
    <form action="proses_ubah_paket.php" method="post"  enctype="multipart/form-data"  >
    <input type="hidden" name="id_paket" value="<?= $dt_paket['id_paket'] ?>">
    jenis :
    <select name="jenis"   class="form-control">    
            <option value="<?= $dt_paket['jenis']?>"><?= $dt_paket['jenis']?></option>
            <option value="kiloan">kiloan</option>
            <option value="selimut">selimut</option>
            <option value="bed_cover">bed cover</option>
            <option value="kaos">kaos</option>
        </select>

        <br>
        harga :

        <input type="text" name="harga" value="<?= $dt_paket['harga']?>" class="form-control"><br>

        
           
        

            <br>
        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>

</body>
            