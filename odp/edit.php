<?php
	include('../aset/connect.php');
	
	    $id_pasien          = @$_GET['id'];
        $nama           	= @$_POST['nama'];
        $umur          	    = @$_POST['umur'];
        $alamat          	= @$_POST['alamat'];
        $kelamin           	= @$_POST['kelamin'];
        $suhu           	= @$_POST['suhu'];
        $tgl_karantina      = @$_POST['tgl_karantina'];
        $tgl_selesai        = @$_POST['tgl_selesai'];
        $tgl_cek           	= @$_POST['tgl_cek'];
        $hasil           	= @$_POST['hasil'];
	
	$sql = mysqli_query($koneksi,"UPDATE t_pasien SET nama='$nama_pasien', nama = '$nama', umur='$umur', alamat='$alamat', kelamin='$kelamin', suhu='$suhu', tgl_karantina='$tgl_karantina',
    tgl_selesai_karantina='$tgl_selesai', tgl_cek='$tgl_cek', hasil='$hasil' where id_pasien='$id_pasien'") or die(mysqli_error($koneksi));
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?id='.$id_pasien.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
    // header('location:tampil_buku.php');

?>