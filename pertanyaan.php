<?php
include 'aset/connect.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID</title>
    <link rel="stylesheet" href="css/pertanyaan.css">
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
        $(document).ready(function() {
            $("#Ya").on("show.bs.modal", function(event) {
                var button = $(event.relatedTarget);

                var tittleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
</head>

<body>
    <h1></h1>
    <button type="submit" class="btn btn-secondary justify-content-center col-12 align-self-center" data-toggle="modal" data-target="#Satu" data-title="hi" name="submit">Mulai Pertanyaan</button>
    <section id="takok">
        <div id="Satu" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>1. Apakah Anda mengalami salah satu dari yang berikut:</h4>
                                </label>
                                <h5>
                                    <ol type="a">
                                        <li>
                                            <h5>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</h5>
                                        </li>
                                        <li>
                                            <h5>Nyeri dada yang parah</h5>
                                        </li>
                                        <li>
                                            <h5>Sulit untuk bangun</h5>
                                        </li>
                                        <li>
                                            <h5>Merasa kebingungan</h5>
                                        </li>
                                        <li>
                                            <h5>Penurunan kesadaran</h5>
                                        </li>
                                    </ol>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Dua" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Dua" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>2. Apakah Anda mengalami salah satu dari yang berikut:</h4>
                                </label>
                                <h5>
                                    <ol type="a">
                                        <li>
                                            <h5>Nafas yang pendek saat istirahat</h5>
                                        </li>
                                        <li>
                                            <h5>Ketidakmampuan untuk berbaring karena kesulitan bernafas </h5>
                                        </li>
                                        <li>
                                            <h5>Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas</h5>
                                        </li>
                                    </ol>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Tiga" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="Tiga" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>3. Apakah Anda mengalami salah satu dari yang berikut:</h4>
                                </label>
                                <h5>
                                    <ol type="a">
                                        <li>
                                            <h5>Demam</h5>
                                        </li>
                                        <li>
                                            <h5>Batuk</h5>
                                        </li>
                                        <li>
                                            <h5>Bersin</h5>
                                        </li>
                                        <li>
                                            <h5>Sakit Tenggorokan</h5>
                                        </li>
                                        <li>
                                            <h5>Sulit Bernafas</h5>
                                        </li>
                                    </ol>
                                </h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Empat" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Empat" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</h4>
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Lima" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Lima" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4>
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Enam" data-title="hi" data-dismiss="modal">Tidak</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Enam" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4>6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4>
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#Ya" data-title="hi" data-toggle="modal">Ya</button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#No" data-title="hi" data-dismiss="modal" name="Done" value="Done">Tidak</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="Ya" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4 align="center">Kesimpulan <br> Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.</h4>
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Self-check kembali</a> </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='logout.php';">Kembali ke index </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="No" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Check-Up</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">
                                    <h4 align="center">Kesimpulan <br> Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup makan dan istirahat
                                        Apabila anda mengalami gejala atau mendapatkan informasi baru tentang perjalanan penyakit anda, anda bisa membuka web ini lagi.</h4>
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Check" data-title="hi" data-dismiss="modal">Kembali ke index</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="Check" class="modal fade" tabindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <form class="box" action="last.php" method="post">
                        <h6>Login (hanya untuk memastikan)</h6>
                        <input type="text" name="nama" value="" class="form-control" placeholder="input nama yang tadi">
                        <input type="submit" name="login" value="Login" class="submit" class="form-control">
                        <br><br><br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>