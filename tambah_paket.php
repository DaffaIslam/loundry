<?php include 'navbar.php'?>


<div class="container-fluid">

    <h3>Tambah Paket</h3>
    <form action="proses_tambah_paket.php" method="post">         
        
    Jenis :
        <select name="jenis" class="form-control">
            <option></option>
            <option value="kiloan">Kiloan</option>
            <option value="selimut">selimut</option>
            <option value="bed_cover">bed cover</option>
            <option value="kaos">kaos</option>
        </select>
        <br>
    
    Harga:
        <input type="text" name="harga" value="" class="form-control">
        <br>

        
       
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
    </form>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</div>