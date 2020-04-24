<?php
//memasukkan file config.php
include '../aset/connect.php';
include '../aset/navbarjero.php';
session_start();


?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Petugas</title>
    <!-- CSS online dari bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
        $(document).ready(function() {
            $("#myModal").on("show.bs.modal", function(event) {
                // Get the button that triggered the modal
                var button = $(event.relatedTarget);

                // Extract value from the custom data-* attribute
                var titleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/text.css">
    <style>
        .bs-example {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top:20px">
        <h2>Daftar Petugas</h2>
        <hr>
        <table class="table table-striped table-primary table-hover table-sm table-bordered legok">
            <thead class="biru legok">
                <tr>
                    <th class="poppins-ori">NO.</th>
                    <th class="poppins-ori">Nama</th>
                    <th class="poppins-ori">Umur</th>
                    <th class="poppins-ori">Alamat</th>
                    <th class="poppins-ori">Kelamin</th>
                    <th class="poppins-ori">Suhu</th>
                    <th class="poppins-ori">Tanggal karantina</th>
                    <th class="poppins-ori">Tanggal selesai</th>
                    <th class="poppins-ori">Tanggal cek</th>
                    <th class="poppins-ori">Hasil</th>

                    <?php
                    $id_level2 = $_SESSION['id_level'] == '2';
                    if ($id_level2) {
                    ?>
                        <th class="poppins-ori">Aksi</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel t_buku urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM t_pasien ORDER BY id_pasien DESC") or die(mysqli_error($connection));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if (mysqli_num_rows($sql) > 0) {
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while ($data = mysqli_fetch_assoc($sql)) {
                ?>
                        <!-- menampilkan data perulangan -->
                        <tr class="poppins-ori">
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['umur']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['kelamin']; ?></td>
                            <td><?php echo $data['suhu']; ?></td>
                            <td><?php echo $data['tgl_karantina']; ?></td>
                            <td><?php echo $data['tgl_selesai_karantina']; ?></td>
                            <td><?php echo $data['tgl_cek']; ?></td>
                            <td><?php echo $data['hasil']; ?></td>
                            <?php $id_level2 = $_SESSION['id_level'] == '2';
                            if ($id_level2) {
                            ?>
                                <td>
                                    <a href="#edit<?php echo $data['id_pasien']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                    <a href="#del<?php echo $data['id_pasien']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    <?php include('modal_form.php'); ?>
                                </td>
                            <?php } ?>
                        </tr>
                <?php
                        $no++;
                    }
                    //jika query menghasilkan nilai 0
                } else {
                    echo '
      <tr>
        <td colspan="11">Tidak ada data.</td>
      </tr>
      ';
                }
                ?>
            </tbody>
        </table>
        <?php
        $id_level2 = $_SESSION['id_level'] == '2';
        if ($id_level2) {
        ?>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-title="tambahBuku">Tambah Data</button>
            </div>
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="tambah.php" method="post" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <input type="hidden" name="id_pasien" value="<?php echo $data['id_pasien'] ?>">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Pasien</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Umur</label>
                                    <input type="text" name="umur" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Kelamin</label>
                                    <select name="kelamin" class='form-control'>
                                        <option value="Tidak Disebutkan" disabled selected hidden>Tidak Disebutkan</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Suhu</label>
                                    <input type="number" name="suhu" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tanggal Karantina</label>
                                    <input type="date" name="tgl_karantina" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tanggal Selesai</label>
                                    <input type="date" name="tgl_selesai" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tanggal Cek</label>
                                    <input type="date" name="tgl_cek" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Hasil</label>
                                    <select name="hasil" class='form-control'>
                                                    <option value="" selected>Belum</option>
                                                    <option value="Positif">Positif</option>
                                                    <option value="Negatif">Negatif</option>
                                                </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>