<?php if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];     
    if(empty($nama)){         
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){         
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($tlp)){         
        echo "<script>alert('Telephone tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($jenis_kelamin)){         
        echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp)
        value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')");    
     if($insert){             
        echo "<script>alert('Sukses menambahkan member');location.href='data_member.php';</script>";
        } else {             
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}
?>>