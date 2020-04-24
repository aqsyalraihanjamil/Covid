<?php
	include('../aset/connect.php');
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM t_pasien WHERE id_pasien='$id'");
	header('location:index.php');
?>