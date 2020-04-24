<?php
  session_start();
  include '../aset/connect.php';
    
    if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data2 = mysqli_query($koneksi,"SELECT * FROM t_petugas WHERE 
    username = '$username' AND password = '$password'") or die(mysqli_error($koneksi));
    $r2 = mysqli_fetch_array($data2);
    $user2 = $r2['username'];
    $pass2 = $r2['password'];
    $id_level2 = $r2['id_level'];
     if($user2 == $username && $pass2 == $password ){
     $_SESSION['id_level'] = $id_level2;
     $_SESSION['username'] = $username;
     header('location:../isi/index.php');
    }else {
      echo "Password / username salah";
    }
  }
  ?>
