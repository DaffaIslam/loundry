<?php include 'navbar.php'?>

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Table admin</h1>
                    
                    <a href="tambah_admin.php" class="btn btn-primary ">
                                        <span class="icon text-white-50">
                                           
                                        </span>
                                        <span class="text">Tambah Admin</span>
                                    </a>
                                    <br><br>
                                     
                    <!-- DataTales Example --> 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                           <th>Ubah</th>
                                           <th>Hapus</th>
                                            
                                        </tr>
                                    </thead>

<?php 
include "koneksi.php";
$qry_user=mysqli_query($conn,"select * from user");
$no=0;
while($data_user=mysqli_fetch_array($qry_user)){
$no++;?>
<tr>             
     <td><?=$no?></td>
    <td><?=$data_user['nama']?></td>
     <td><?=$data_user['username']?></td>
     <td><?=$data_user['password']?></td>
     <td><?=$data_user['level']?></td> 
     <td><a href="ubah_admin.php?id_user=<?= $data_user['id_user'] ?>" class="btn btn-success">Ubah</a></td>
     <td><a href="hapus_admin.php?id_user=<?= $data_user['id_user']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
</tr>
     
<?php 
}
?>

