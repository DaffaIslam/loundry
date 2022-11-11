<?php include 'navbar.php'?>

<body>
<?php
    include "koneksi.php";
    
    $qry_get_user=mysqli_query($conn,"select * from user where id_user='".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <div class="container-fluid">
    <h3>Ubah admin</h3>
    <form action="proses_ubah_admin.php" method="post"  enctype="multipart/form-data"  >
    <input type="hidden" name="id_user" value="<?= $dt_user['id_user'] ?>">
    <br>
        Nama :

        <input type="text" name="nama" value="<?= $dt_user['nama']?>" class="form-control"><br>

        
        Username :

        <input type="text" name="username" value="<?= $dt_user['username']?>" class="form-control"><br>


        Password :

        <input type="text" name="password" value="<?= $dt_user['password']?>" class="form-control"><br>


         Level :
    <select name="level"   class="form-control">    
            
            <option value="kasir">kasir</option>
            <option value="admin">admin </option>
            <option value="owner">Owner</option>
            
        </select>

        
           <br>

        

            
        <input type="submit" name="simpan" value="Ubah Admin" class="btn btn-primary">
    </form>

</body>
            