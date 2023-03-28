<?php
// require_once('../../BASE/authAdmin.php');
require_once('../../../BASE/connection.php');

session_start();
$show = false;
$sql = "SELECT r1.*, r2.response, r2.date as response_date
FROM report as r1 
LEFT JOIN response as r2 ON r1.id_report = r2.id_report";
if ($data = $mysqli->query($sql)) {
    $package = array();
    $show = true;
    while ($row = $data->fetch_assoc()) {
        $package[] = $row;
    }

} else {
    $page = $SESSION['page'];
    var_dump($mysqli->error);
    header("location: ./{$page}");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel="stylesheet" href="../ASSETS/CSS/table.css">
    <link rel="stylesheet" href="../ASSETS/CSS/reset.css">
    <link rel="stylesheet" href="../ASSETS/CSS/main.css">
    <link rel="stylesheet" href="../ASSETS/CSS/data.css">
</head>
<style>
    main{
        width: 100%;
    }
    .box img{
        width: 150px
    }
    .box .inner-box h1:nth-child(2){
        font-size: 1rem;
    }
.box{
    margin: auto;
    margin-bottom: 100px;
    display: flex;
    align-items: center;
    justify-content: center;

}


</style>

<body>
    <?php

?>
    <main class="container">

        <div class="container">
            <div class="box">
                <img src="../assets/image/trirenggo.png" alt="photo"/>
                <div class="inner-box">
                    <h1>Kapanewon Trirenggo</h1>
                    <h1>Daerah Istimewa Yogyakarta
Jl. Ir. H. Juanda No.17, Bantul, Yogyakarta</h1>
                </div>

            </div>
            <h1>Laporan Pengaduan Masyarakat</h1>
        </div>
        <?php
        if ($show && count($package) != 0) {
            $i = 0;
            ?>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Nik</th>
                        <th>Title</th>
                        <th>Report</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Tanggapan</th>
                        <th>Tanggal Tanggapan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($package as $key => $value) {
                        if ($i % 2 != 0) {
                            ?>
                            <tr>
                            
                                <td><?php echo $package[$key]['id_report'] ?></td>
                                <td><?php echo $package[$key]['date'] ?></td>
                                <td><?php echo $package[$key]['nik'] ?></td>
                                <td><?php echo $package[$key]['title'] ?></td>
                                <td><span class="report"><?php echo $package[$key]['report'] ?></span></td>
                                <td><img class="photo" style="width: 700px" src="../../server/data/img/<?php echo $package[$key]['photo'] ?>" alt="photo" ></td>
                                <td><?php echo $package[$key]['status'] ?></td>
                                <td><span class="response"><?php echo $package[$key]['response'] ?></span></td>
                                <td><?php echo $package[$key]['response_date'] ?></td>
                            </tr>
                                       <?php
                        } else { ?>
                        <tr class="active-row">
                       
                           <td><?php echo $package[$key]['id_report'] ?></td>
                                <td><?php echo $package[$key]['date'] ?></td>
                                <td><?php echo $package[$key]['nik'] ?></td>
                                <td><?php echo $package[$key]['title'] ?></td>
                                <td><span class="report"><?php echo $package[$key]['report'] ?></span></td>
                                <td><img class="photo" style="width: 700px" src="../../../server/data/img/<?php echo $package[$key]['photo'] ?>" alt="photo" ></td>
                                <td><?php echo $package[$key]['status'] ?></td>
                                <td><span class="response"><?php echo $package[$key]['response'] ?></span></td>
                                <td><?php echo $package[$key]['response_date'] ?></td>
                            </tr>


                                   <?php
                        }
                    } ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
            <div class="box"><span class="empty">Data Kosong</span></div>
            <?php
        }
        ?>
    </main>
      <?php

    ?>
</body>

</html>