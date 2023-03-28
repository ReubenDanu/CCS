<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./ASSETS/CSS/dashboard.css">
</head>
<style>

    main{
        background-image: url('../../server/data/img/cool-bg.png');
    }
</style>
<body>
    <?php
        require_once('../../BASE/auth.php');
        require_once('./COMPONENT/navbar.php.html');
    ?>
    <main>
        <div class="total">
            <p>
                jumlah laporan yang terdata
                <span>
                    <?php
                        require_once('../../BASE/connection.php');
                        $sql =  "SELECT COUNT(*) FROM REPORT";
                        $rows = $mysqli->query($sql);
                        $data = $rows->fetch_array();
                        echo $data[0];
                    ?>
                </span>
            </p>
        </div>

        <h1 class="title" >
            Aplikasi Pengaduan Masyarakat Bantul.
        </h1>
        <div>
            <!-- <img src="../../server/data/img/cool-bg.png" style="position: absolute;
max-width: 100%;
width: 50%;
z-index: -10;
top: -250px;" alt="photo"> -->
            <a href="./report.php">Buat Laporan Baru?</a>
            <a href="./inbox.php">Check Progress Laporan Anda?</a>
        </div>

        

    </main>
    
    <?php
        require_once('./COMPONENT/footer.php.html');
    ?>
</body>
</html>