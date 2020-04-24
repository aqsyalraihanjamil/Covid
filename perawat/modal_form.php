<?php include('../aset/connect.php'); ?>
<!-- Delete -->
<div class="modal fade" id="del<?php echo $data['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($koneksi,"SELECT * FROM t_petugas WHERE id_petugas='".$data['id_petugas']."'");
					$deleteData=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Nama: <strong><?php echo $deleteData['nama']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="hapus.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
            </div>
        </div>
    </div>
<!-- /EndmodalDelete -->
 
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $data['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
				<?php
					$edit=mysqli_query($koneksi,"SELECT * FROM t_petugas WHERE id_petugas='".$data['id_petugas']."'");
					$editData=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
                <form method="POST" action="edit.php?id=<?php echo $editData['id_petugas']; ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">       
                        <div class="form-group">
                            <label class="control-label">Id:</label>
                            <input type="text" name="id_petugas"class="form-control" value="<?php echo $editData['id_petugas']; ?>" readonly>
                        </div>                 
                        <div class="form-group">
                            <label class="control-label">Nama:</label>
                            <input type="text" name="nama_petugas" class="form-control" value="<?php echo $editData['nama']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Username:</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $editData['username']; ?>" required>
                        </div>
                        <div class="form-group">password:</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $editData['password']; ?>" required>
                        </div>      
                        <div class="form-group">
                                <label class="control-label">Pangkat</label>
                                <select name="level" class='form-control'>
                                    <option value="<?php echo $editData['id_level']; ?>" selected><?php echo $temp['level'] ?></option>
                                    <option value="1">Admin</option>
                                    <option value="2">Perawat</option>
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