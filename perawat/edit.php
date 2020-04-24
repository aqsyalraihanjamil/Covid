<?php
	include('../aset/connect.php');
	
	    $id_petugas         = @$_GET['id'];
        $nama_petugas		= @$_POST['nama_petugas'];
        $username    	    = @$_POST['username'];
        $password	        = @$_POST['password'];
        $level              = @$_POST['level'];
	
	$sql = mysqli_query($koneksi,"UPDATE t_petugas SET nama='$nama_petugas', username = '$username', password='$password', id_level='$level' where id_petugas='$id_petugas'") or die(mysqli_error($koneksi));
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?id='.$id_petugas.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
    // header('location:tampil_buku.php');

?>