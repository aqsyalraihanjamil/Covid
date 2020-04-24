<?php
//memasukkan file config.php
include 'aset/connect.php';
if (isset($_POST['submit'])) {
    $nama            = @$_POST['nama'];
    $umur            = @$_POST['umur'];
    $alamat            = @$_POST['alamat'];
    $kelamin        = @$_POST['kelamin'];
    $suhu            = @$_POST['suhu'];
    $tgl_karantina    = date('Y-m-d');
    $tgl_selesai    = date('Y-m-d', strtotime($tgl_karantina . '+ 14 days'));
    $tgl_cek        = @$_POST['tgl_cek'];
    $sql = mysqli_query($koneksi, "INSERT INTO t_pasien(nama, umur, alamat, kelamin, suhu, tgl_karantina, tgl_selesai_karantina, tgl_cek) VALUES('$nama','$umur','$alamat','$kelamin','$suhu','$tgl_karantina','$tgl_selesai','$tgl_cek')") or die(mysqli_error($koneksi));
    header('location:pertanyaan.php');
}
