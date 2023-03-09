<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./ASSETS/CSS/dashboard.css">
</head>
<body>
    <?php
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
        <h1 class="title">
            Mulai Laporan Anda Sekarang.
        </h1>
        <div>
            <a href="./report.php">Buat Laporan Baru?</a>
            <a href="./inbox.php">Check Progress Laporan Anda?</a>
        </div>

        

    </main>
    
    <?php
        require_once('./COMPONENT/footer.php.html');
    ?>
</body>
</html>