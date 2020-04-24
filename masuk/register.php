<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="indexstyle.css">

  <style media="screen">
    
    .html {
      background-image: linear-gradient(to bottom left, magenta, navy, blue, skyblue);
      position: relative;
      height: 100%;
      background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    }
  </style>
</head>

<body>
  <div class="container col-md-10">
    <div class="row">
      <div class="col-md-8 justify-content-center align-self-center p-4">
        <br><br><br><br><br><br><br><br>
        <img src="../images/soasik.svg" width="900" alt="">
      </div>
      <div class="col-md-4">

        <form action="" method="POST" class="box">
          <h1>Register</h1>
          <input type="text" name="nama" placeholder="Insert nama" class="input">
          <input type="text" name="username" placeholder="Insert username" class="input">
          <input type="password" name="password" placeholder="Insert password" class="input">
          <input type="submit" name="save" value="Daftar">
          </form>
      </div>
    </div>
</body>

</html>

<?php
include "../aset/connect.php";
if (@$_POST['save']) {
  $nama = $_POST['nama'];
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $sql = mysqli_query($koneksi, "INSERT INTO `t_petugas` (nama, username, password) VALUES ('$nama', '$user', '$pass')") or die(mysqli_error($koneksi));
  if ($sql) {
    header('location:../index.php');
    echo "<alert>Berhasil</alert>";
  }
}
?>