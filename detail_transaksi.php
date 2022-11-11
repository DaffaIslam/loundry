<?php include 'navbar.php'?>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Paket</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Tanggal</th>
                                            <th>Tanggal bayar</th>
                                            <th>batas waktu</th>
                                            <th>Petugas</th>
                                            <th>Status</th>
                                            <th>Bayar</th>
                                            <th>Obsi</th>
                                            

<?php 
include "koneksi.php";
//$qry_transaksi=mysqli_query($conn,"select * from transaksi join member on member.id_member=transaksi.id_member join detail_transaksi d on d.id_transaksi=transaksi.id_transaksi join paket on paket.id_paket=d.id_paket");$no=0;
$qry_transaksi= mysqli_query($conn,"select * from transaksi");
$no=0;
$qry_member=mysqli_query($conn,"select * from member");
$data_member=mysqli_fetch_array($qry_member);
$qry_paket=mysqli_query($conn,"select * from paket");
$data_paket=mysqli_fetch_array($qry_paket);
$qry_user=mysqli_query($conn,"select * from user");
$data_user=mysqli_fetch_array($qry_user);
while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
$no++;
$id=$data_transaksi['id_transaksi'];
$qry_member_kembali = mysqli_query($conn, "select * from transaksi inner join member on member.id_member = transaksi.id_member where transaksi.id_transaksi = '".$data_transaksi['id_transaksi']."'");
$data_member = mysqli_fetch_array($qry_member_kembali);
$qry_paket_kembali = mysqli_query($conn, "select * from transaksi inner join paket on paket.id_paket = transaksi.id_paket where transaksi.id_transaksi = '".$data_transaksi['id_transaksi']."'");
$data_paket = mysqli_fetch_array($qry_paket_kembali);
$qry_user_kembali = mysqli_query($conn, "select * from transaksi inner join user on user.id_user = transaksi.id_user where transaksi.id_transaksi = '".$data_transaksi['id_transaksi']."'");
$data_user = mysqli_fetch_array($qry_user_kembali);
$subtotal = $data_paket['harga'] * $data_transaksi['qty'];
?>
<tr>                
    <td><?=$no?></td>
    <td><?=$data_member['nama']?></td>
     <td><?=$data_paket['jenis']?></td>
     <td><?=$data_transaksi['qty']?></td>   
     <td><?=$subtotal?></td>
     <td><?=$data_transaksi['tanggal']?></td>
     <td><?=$data_transaksi['tanggal_bayar']?></td>
     <td><?=$data_transaksi['batas_waktu']?></td>
     <td><?=$data_user['level']?></td> 
     <td><?=$data_transaksi['status']?></td> 
     <td><?=$data_transaksi['dibayar']?></td> 
     <td><a  href="ubah_detail.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn btn-success">Ubah</a>
     |<a href="hapus_transaksi.php?id_transaksi=<?= $data_transaksi['id_transaksi'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
     |<a href="cetak.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn btn-info">Cetak</a></td>
</tr>
     
<?php 
}
?>
                                            