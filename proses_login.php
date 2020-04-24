<?php
  session_start();
  include 'aset/connect.php';
    
    if(isset($_POST['login'])){
    $nama = $_POST['nama'];
    $data2 = mysqli_query($koneksi,"SELECT * FROM t_pasien WHERE 
    nama = '$nama'") or die(mysqli_error($koneksi));
    $r2 = mysqli_fetch_array($data2);
    $user2 = $r2['nama'];
     if($user2 == $nama){
     $_SESSION['id_level'] = $id_level2;
     $_SESSION['nama'] = $nama;
     header('location:pertanyaan.php');
    }else {
      echo "Password / username salah";
    }
  }
  ?>
