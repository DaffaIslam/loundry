<?php include 'navbar.php'?>
<div class="container-fluid">
<h3>Tambah Member</h3>

<form action="proses_tambah_member.php" method="post">         
        Nama  : 
        <br>
        <input type="text" name="nama" value="" class="form-control">
        <br>
        Alamat :
        <textarea name="alamat" class="form-control" rows="1">
</textarea> 
        <br>

        Jenis Kelamin :
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        Nomer Telephone :
        <br>
        <input type="text" name="tlp" value="" class="form-control">
<br>

<input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">
</div>