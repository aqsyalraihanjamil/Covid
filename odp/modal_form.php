<?php include('../aset/connect.php'); ?>
<!-- Delete -->
<div class="modal fade" id="del<?php echo $data['id_pasien']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($koneksi,"SELECT * FROM t_pasien WHERE id_pasien='".$data['id_pasien']."'");
					$deleteData=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Nama: <strong><?php echo $deleteData['nama']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="hapus.php?id=<?php echo $data['id_pasien']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
            </div>
        </div>
    </div>
<!-- /EndmodalDelete -->
 
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $data['id_pasien']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
				<?php
					$edit=mysqli_query($koneksi,"SELECT * FROM t_pasien WHERE id_pasien='".$data['id_pasien']."'");
					$editData=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
                <form method="POST" action="edit.php?id=<?php echo $editData['id_pasien']; ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">       
                        <div class="form-group">
                            <label class="control-label">Id:</label>
                            <input type="text" name="id_pasien"class="form-control" value="<?php echo $editData['id_pasien']; ?>" readonly>
                        </div>                 
                        <div class="form-group">
                            <label class="control-label">Nama:</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $editData['nama']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Umur:</label>
                            <input type="text" name="umur" class="form-control" value="<?php echo $editData['umur']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat:</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $editData['alamat']; ?>" required>
                        </div>
                        <div class="form-group">
                                <label class="control-label">Kelamin</label>
                                <select name="kelamin" class='form-control'>
                                    <option value="Tidak Disebutkan" selected>Tidak Disebutkan</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Suhu:</label>
                            <input type="number" name="suhu" class="form-control" value="<?php echo $editData['suhu']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tanggal Karantina:</label>
                            <input type="date" name="tgl_karantina" class="form-control" value="<?php echo $editData['tgl_karantina']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tanggal Selesai Karantina:</label>
                            <input type="date" name="tgl_selesai" class="form-control" value="<?php echo $editData['tgl_selesai_karantina']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tanggal cek:</label>
                            <input type="date" name="tgl_cek" class="form-control" value="<?php echo $editData['tgl_cek']; ?>" required>
                        </div>
                        <div class="form-group">
                                    <label class="control-label">Hasil:</label>
                                    <select name="hasil" class='form-control'>
                                                    <option value="" selected>Belum</option>
                                                    <option value="Positif">Positif</option>
                                                    <option value="Negatif">Negatif</option>
                                                </select>
                                </div>                                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                    </div>
				</form>
            </div>
        </div>
    </div>
<!-- /EndmodalEdit -->