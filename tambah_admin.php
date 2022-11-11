<?php include 'navbar.php'?>
<div class="container-fluid">

    <h3>Tambah User</h3>
    <form action="proses_tambah_admin.php" method="post">         
        Nama  :
        <input type="text" name="nama" value="" class="form-control">
        <br>

        </select>         
        Username :
        <input type="text" name="username" value="" class="form-control">
        <br>
        Password :
        <input type="password" name="password" value="" class="form-control">
        <br>
        Level :
        <select name="level" class="form-control">
            <option></option>
            <option value="Kasir">Kasir</option>
            <option value="admin">Admin</option>
            <option value="Owner">Owner</option>
        </select>
        <br>
        <input type="submit" name="simpan" value="Tambah Admin" class="btn btn-primary">
    </form>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</div>