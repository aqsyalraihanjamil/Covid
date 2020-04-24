<?php
  session_start();
  include 'aset/connect.php';
    
    if(isset($_POST['login'])){
    $nama  = $_POST['nama'];
    $hasil = "Negatif";
    $nc    = mysqli_query($koneksi, "UPDATE t_pasien SET hasil='$hasil' WHERE nama='$nama'");
    if($nc){
      echo '<script>alert("Selamat Anda Negatif COVID-19."); document.location="masuk/logout.php";</script>';
    }else{
      echo '<div class="alert alert-warning">Gagal mengedit data anggota.</div>';
    }
  }
  ?>