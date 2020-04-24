<?php
include '../aset/navbarjero.php';
session_start();
if (!isset($_SESSION['username'])) {
  header("location: index.php?access_denied");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dasbor.css">
</head>

<body>
    <header id="" class="bek">
        <div class="container col-md-10">
            <br><br><br><br><br><br>
            <div class="biru" id="awal">
                <div class="row">
                    <div class="col-md-4 offset-1 align-self-center p-4">
                        <br>
                        <h3 class="text-primary gedi">Selamat Datang! <br> <?php echo $_SESSION['username']; ?> </h3>
                        <p style="color: grey; font-weight: normal;" class="med">
                            Disini adalah tempat yang berisikan list ODP dan para perawat yang mengkarantina para pasien yang diduga terkena virus COVID-19
                        </p>
                    </div>
                    <div class="col-md-7 text-center align-self-center">
                        <img width="600" src="../images/dasbor-1.png" alt="">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="abu" id="ODP">
                <div class="row">
                    <div class="col-md-4 offset-1 align-self-center p-4">
                        <br>
                        <h3 class="teks-biru gedi">Tabel Pasien <br> </h3>
                        <p class="text-primary med">
                            Ini berisi list tentang orang yang mungkin saja terkena COVID-19
                        </p>
                        <a class="btn btn-info med legok" href="../odp/index.php">Klik Disini</a>
                    </div>
                    <div class="col-md-7 text-center align-self-center">
                        <img width="450" src="../images/perawat.png" alt="">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="biru" id="perawat">
                <div class="row">
                    <div class="col-md-4 offset-1 align-self-center p-4">
                        <br>
                        <h3 class="text-primary gedi">Tabel Perawat <br> </h3>
                        <p class="text-secondary med">
                            Ini berisi list tentang orang yang bersedia merawat korban COVID-19
                        </p>
                        <a class="btn btn-secondary med legok" href="../perawat/index.php">Klik Disini</a>
                    </div>
                    <div class="col-md-7 text-center align-self-center">
                        <img width="500" src="../images/perawad.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>