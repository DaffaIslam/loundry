<?php include 'navbar.php'?>

<body>
<?php
    include "koneksi.php";
    
    
    $qry_get_member=mysqli_query($conn,"select * from member where id_member= '".$_GET['id_member']."'");

    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <div class="container-fluid">
    <h3>Ubah Produk</h3>
    <form action="proses_ubah_member.php" method="post"  enctype="multipart/form-data"  >
    <input type="hidden" name="id_member" value="<?= $dt_member['id_member'] ?>">
    <br>
        Nama :

        <input type="text" name="nama" value="<?= $dt_member['nama']?>" class="form-control"><br>

        
        Alamat :

        <input type="text" name="alamat" value="<?= $dt_member['alamat']?>" class="form-control"><br>

    Kelamin :
    <select name="jenis_kelamin"   class="form-control">    
            <option value=" <?= $dt_member['jenis_kelamin']?>"><?= $dt_member['jenis_kelamin']?></option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            
        </select>

        <br>
        Telephone :

        <input type="text" name="tlp" value="<?= $dt_member['tlp']?>" class="form-control"><br>

        
           <br>

        

            
        <input type="submit" name="simpan" value="Ubah Admin" class="btn btn-primary">
    </form>

</body>
            