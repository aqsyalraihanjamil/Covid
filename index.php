<?php
include 'aset/navbar.php';
include 'aset/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID</title>
    <link rel="stylesheet" href="css/indexs.css">
    <script type="text/javascript" src="js/app.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
        $(document).ready(function() {
            $("#Satu").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Dua").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Tiga").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Empat").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Lima").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
        $(document).ready(function() {
            $("#Enam").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
</head>

<body>
    <?php
    //query ke database SELECT tabel t_buku urut berdasarkan id yang paling besar
    $sql = mysqli_query($koneksi, "SELECT * FROM t_pasien ORDER BY id_pasien DESC") or die(mysqli_error($connection));
    $data = mysqli_fetch_assoc($sql);
    ?>
    <header class="bek">
        <div class="container col-md-10">
            <br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-4 col-sm-6 align-self-center alata">
                    <h1>Self Check Up COVID-19</h1>
                    <p>Saat ini dengan mulai munculnya ODP, PDP
                        dan kasus Positif COVID-19 di Jawa Timur, tentunya
                        self-assesment COVID-19 akan
                        dibutuhkan oleh masyarakat.</p>
                    <div class="text-center">
                        <button class="btn px-5 py-2 btn-primary" onclick="location.href='#check';">
                            CHECK-UP
                        </button>
                    </div>
                </div>
                <div class="col-md-8 col-sm-4">
                    <img class="my-img" src="images/index-1.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="biru" id="covid">
                <div class="container col-md-10">
                    <br>
                    <br>
                    <h1 class="text-center">Korban COVID-19</h1>
                    <div class="row">
                        <div class="col-md-8 col-sm-4">
                            <img width="800" class="my-img" src="images/dunia1.png" alt="">
                        </div>
                        <div class="col-md-4 col-sm-6 align-self-center">
                            <img class="kotak-dunia" src="images/kotak_dunia.png" alt="">
                            <div class="p-3 mb-2 bg-primary text-white transparan poppins">
                                <h2>Kasus</h2>
                                <h3 id="tot"></h3>
                            </div>
                            <img class="kotak-dunia" src="images/kotak_dunia.png" alt="">
                            <div class="p-3 mb-2 bg-danger text-white transparan poppins">
                                <h2>Kematian <br> </h2>
                                <h3 id="mati"></h3>
                            </div>
                            <img class="kotak-dunia" src="images/kotak_dunia.png" alt="">
                            <div class="p-3 mb-2 bg-success text-white transparan poppins">
                                <h2>Sembuh (hari ini)<br></h2>
                                <h3 id="sembuh"></h3>
                            </div>
                        </div>
                        <div class="text-secondary col-12 text-right poppins">
                            <p>Data diambil asli hari ini dari <a class="text-secondary" href="https://github.com/ExpDev07/coronavirus-tracker-api">Sini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="bek" id="check">
                <br><br><br><br>
                <div class="container col-md-10">
                    <div class="text-center align-self-center justify-content-center">
                        <h1>Self-Check</h1>
                        <img width="1000" src="images/pencegahan_1.svg" alt="">
                        <h3 class="poppins-ori">
                            Pemerintah Pusat sangat mendesak siapa pun yang memiliki gejala - termasuk demam, batuk, bersin, sakit tenggorokan, atau kesulitan bernapas - untuk melakukan isolasi diri selama 14 hari.
                        </h3>
                        <div>
                            <button class="btn btn-info poppins-ori" data-toggle="modal" data-target="#myModal" data-title="cekup" > CHECK DIRI ANDA SEKARANG </button>
                        </div>
                        <div id="myModal" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="modal.php" enctype="multipart/form-data" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Self Check-Up</h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="<?php echo $data['id_pasien'] ?>">
                                            <div class="form-group">
                                                <label class="control-label">Nama:</label>
                                                <input type="text" name="nama" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Umur:</label>
                                                <input type="number" name="umur" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Alamat:</label>
                                                <input type="text" name="alamat" class="form-control">
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
                                                <input type="number" name="suhu" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Tanggal Cek:</label>
                                                <input type="date" name="tgl_cek" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <div>
                                                <button type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#Satu" data-title="hi" name="submit">Lanjut</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                       
        </section>
        <section>
            <div class="biru" id="tips">
                <div class="container col-md-10">
                    <div class="align-self-center text-center text-dark justify-content-center">
                        <h1 class="oxygen">Cara Mencegah Virus Corona</h1>
                    </div>
                    <div class="row text-dark text-center">
                        <div class="col-4">
                            <img src="images/cegah-1.png" alt="" width="300" height="200">
                            <p class="poppins">Selalu mencuci tangan dengan sabun</p>
                        </div>
                        <div class="col-4">
                            <img src="images/cegah-2.png" alt="" width="300" height="200">
                            <p class="poppins">Memakai masker jika pergi keluar</p>
                        </div>
                        <div class="col-4">
                            <img src="images/cegah-3.png" alt="" width="300" height="200">
                            <p class="poppins">Hindari berjabat tangan</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row justify-content-center text-dark text-center">
                        <div class="col-4">
                            <img src="images/cegah-4.png" alt="" width="300" height="220">
                            <p class="poppins">Tutup muka saat bersin dan batuk</p>
                        </div>
                        <div class="col-4">
                            <img src="images/cegah-5.png" alt="" width="300" height="220">
                            <p class="poppins">Waspada terhadap benda sektiar</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br>
        <section>
            <div class="bek" id="about">
                <div class="container col-md-10">
                    <div class="text-center justify-content-center align-self-center col-md-8 col-sm-6 offset-2">
                        <img class="legok" src="images/ganteng.jpeg" alt="" width="300" height="350">
                        <br><br><br>
                        <h3 class="med alata">
                            Hai! Perkenalkan nama saya Aqsyal Raihan Jamil dari kelas XRPL1 nomor absen 8
                        </h3>
                        <h3 class="med alata">
                            Umur : 15 tahun
                        </h3>
                        <h3 class="med alata">
                            Tanggal Lahir : 12-05-2004
                        </h3>
                        <h3 class="med alata">
                            Jurusan : RPL
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="nibba">
            <div class="row p-4">
                <div class="col-4">
                    <img width="250" src="images/logo.png" alt="LOGO">
                    <br>
                    <br>
                    <h6 class="text-secondary">Website ini dirancang untuk mengetes apakah anda terjangkit virus corona (COVID-19) dan panduan setelah melakukan test tersebut</h6>
                    <br>

                    <h5 class="text-secondary"><i class="fab fa-instagram"></i> Developed by <a href="https://www.instagram.com/aqsyalraihan/">aqsyalraihan</a> </h5>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>