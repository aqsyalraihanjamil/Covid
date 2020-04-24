<?php
//memasukkan file config.php
include '../aset/connect.php';
    if(isset($_POST['submit'])){
        $id_petugas 		= @$_POST['id_petugas'];
        $nama_petugas		= @$_POST['nama'];
        $username    	    = @$_POST['username'];
        $password	        = @$_POST['password'];
        $level              = @$_POST['level'];

        
        $cek = mysqli_query($koneksi, "SELECT * FROM t_petugas WHERE id_petugas='$id_petugas'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO t_petugas(id_petugas, nama, username, password, id_level) VALUES('$id_petugas','$nama_petugas','$username','$password','$level')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
        }
    }
