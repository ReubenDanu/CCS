<?php
    if(session_status() != 2){
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./ASSETS/CSS/sidebar.css">
    <link rel="stylesheet" href="./ASSETS/CSS/dashboard.css">
    <link rel="stylesheet" href="./ASSETS/CSS/main.css">
</head>
<body>
    <?php
        require_once('./COMPONENT/sidebar.php.html');
    ?>
    <main>
        <?php
       
        ?>
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
        <div class="container">
            <h1 class="title">
                Selamat Datang, Mulai Inspeksi Anda?
            </h1>
            <div>
                <a href="./report.php">Cek Laporan Baru?</a>
                <a href="./report.php">Lihat Data</a>
            </div>
        </div>

        

    </main>
    
    <?php
        require_once('./COMPONENT/footer.php.html');
    ?>
</body>
</html>