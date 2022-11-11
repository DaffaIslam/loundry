<?php include 'navbar.php'?>
<div class="container-fluid">
<a href="tambah_paket.php" class="btn btn-primary ">
                                        <span class="icon text-white-50">
                                           
                                        </span>
                                        <span class="text">Tambah Paket</span>
                                    </a>
                                    <br><br>
<div class="card shadow mb-4">
    
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data paket</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Harga</th>
                                            <th>Ubah</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                include "koneksi.php";
                                $qry_paket=mysqli_query($conn,"select * from paket");
                                $no=0;
                                while($data_paket=mysqli_fetch_array($qry_paket)){
                                $no++;
                                $id_paket=$data_paket['id_paket'];
                                ?>
                                <tr>             
                                    <td><?=$no?></td>
                                    <td><?=$data_paket['jenis']?></td>
                                    <td><?=$data_paket['harga']?></td>
                                    <td><a href="ubah_paket.php?id_paket=<?= $data_paket['id_paket'] ?>" class="btn btn-success">Ubah</a></td>
                                </tr>
                                <?php 
                                }
                                ?>

