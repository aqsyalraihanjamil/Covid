<?php
//memasukkan file config.php
include '../aset/connect.php';
    if(isset($_POST['submit'])){
        $id_pasien 		= @$_POST['id_pasien'];
        $nama		    = @$_POST['nama'];
        $umur		    = @$_POST['umur'];
        $alamat		    = @$_POST['alamat'];
        $kelamin		= @$_POST['kelamin'];
        $suhu		    = @$_POST['suhu'];
        $tgl_karantina	= @$_POST['tgl_karantina'];
        $tgl_selesai	= @$_POST['tgl_selesai'];
        $tgl_cek		= @$_POST['tgl_cek'];
        $hasil		    = @$_POST['hasil'];
    
        $sql = mysqli_query($koneksi, "INSERT INTO t_pasien(nama, umur, alamat, kelamin, suhu, tgl_karantina, tgl_selesai_karantina, tgl_cek, hasil) VALUES('$nama','$umur','$alamat','$kelamin','$suhu','$tgl_karantina','$tgl_selesai','$tgl_cek','$hasil')") or die(mysqli_error($koneksi));
        if ($sql) {
            echo '<script>alert("Berhasil menambahkan data.");</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
        header("location:index.php");
    }
