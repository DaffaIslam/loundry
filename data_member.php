<?php include 'navbar.php'?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    
                    <a href="tambah_member.php" class="btn btn-primary ">
                                        <span class="icon text-white-50">
                                           
                                        </span>
                                        <span class="text">Tambah Member</span>
                                    </a>
                                    <br><br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data member</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Telephone</th>
                                           <th>Ubah</th>
                                           <th>Hapus</th>
                                            
                                        </tr>
                                    </thead>

<?php 
include "koneksi.php";
$qry_member=mysqli_query($conn,"select * from member");
$no=0;
while($data_member=mysqli_fetch_array($qry_member)){
$no++;?>
<tr>             
     <td><?=$no?></td>
    <td><?=$data_member['nama']?></td>
     <td><?=$data_member['alamat']?></td>
     <td><?=$data_member['jenis_kelamin']?></td>
     <td><?=$data_member['tlp']?></td> 
     <td><a href="ubah_member.php?id_member=<?= $data_member['id_member'] ?>" class="btn btn-success">Ubah</a></td>
     <td><a href="hapus_member.php?id_member=<?= $data_member['id_member'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

</tr>
<?php 
}
?>

