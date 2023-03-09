<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/report.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Cetak</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/laporan.css">
    <title>Laporan</title>
</head>

<body>
    <header class="" style="top:0">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2>Pengaduan <em> Masyarakat</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Cetak Laporan
                                <span class="sr-only">(current)</span>
                            </a>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Log-out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="products">
        <div class="container">
            <div class="row">

                <?php
                session_start();
                $id_pengaduan = $_GET['id_pengaduan'];
                include "koneksi.php";
                $hasil = mysqli_query($conn, "SELECT * FROM tbpengaduan , tbmasyarakat WHERE id_pengaduan = '$id_pengaduan'");
                $jumlah = 0;


                while ($row = mysqli_fetch_assoc($hasil)) {

                    ?>

                    <div class="laporan d-flex flex-column justify-content-center align-items-center bg-dark pd-3">
                        <div class="title">
                            Laporan Masyarakat
                        </div>

                        <div class="date">
                            <span>
                                <?php echo $row['tgl_pengaduan'] ?>
                            </span>
                        </div>
                        <div class="content">

                            <p>
                                <?php echo $row['isi_laporan'] ?>
                            </p>
                        </div>
                        <div class="foto">
                            <img src="./upload/<?php echo $row['foto'] ?>">
                        </div>


                        <div class="informasi d-flex flex-column justify-content-around align-items-center">
                            <h1>Detail Masyarakat</h1>
                            <div class="info d-flex flex-row justify-content-around align-items-center">
                                <span class="nik">
                                    <?php echo $row["nik"] ?>
                                </span>
                                <span class="nama">
                                    <?php echo $row["nama"] ?>
                                </span>
                            </div>
                        </div>

                        <div class="operasi d-flex flex-row justify-content-around align-items-center">
                            <a class="nav-link" herf="#">Tanggapi!</a>
                            <a class="nav-link" href=" index.php">Kembali</a>
                            <a traget="_blank" href="cetak.php?id_pengaduan=<?php echo $id_pengaduan ?>">Cetak Laporan</a>
                        </div>
                    </div>

                </div>
            </div>

            <?php
                }
                ?>
    </div>
    </div>
    </div>

</body>

</html>
<script>
    window.print();
</script>

</body>

</html>