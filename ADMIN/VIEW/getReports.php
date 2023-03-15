<?php
// require_once('../../BASE/authAdmin.php');
require_once('../../BASE/connection.php');

session_start();
$show = false;
$sql = "SELECT * FROM `report`";
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
    <link rel="stylesheet" href="./ASSETS/CSS/table.css">
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
    <link rel="stylesheet" href="./ASSETS/CSS/main.css">
    <link rel="stylesheet" href="./ASSETS/CSS/data.css">
</head>

<body>
    <?php
    require_once('./COMPONENT/sidebar.php');

?>
    <main class="container">
        <h1>Data Laporan</h1>
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
                        <th>Operation</th>
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
                               <td><img class="photo" src="../../server/data/img/<?php echo $package[$key]['photo'] ?>" alt="photo" ></td>
                                <td><?php echo $package[$key]['status'] ?></td>
                                 <td><a href="./viewReport.php?id=<?php echo $package[$key]['id_report'] ?>" class="more operation-link"><i class="fa-solid fa-eye"></i></a></td>
                            </tr>
                            <?php
                        } else { ?>
                        <tr class="active-row">
                       
                           <td><?php echo $package[$key]['id_report'] ?></td>
                                <td><?php echo $package[$key]['date'] ?></td>
                                <td><?php echo $package[$key]['nik'] ?></td>
                                <td><?php echo $package[$key]['title'] ?></td>
                                <td><span class="report"><?php echo $package[$key]['report'] ?></span></td>
                               <td><img class="photo" src="../../server/data/img/<?php echo $package[$key]['photo'] ?>" alt="photo" ></td>
                                <td><?php echo $package[$key]['status'] ?></td>
                                 <td><a href="./viewReport.php?id=<?php echo $package[$key]['id_report'] ?>" class="more operation-link"><i class="fa-solid fa-eye"></i></a></td>
                            </tr>


                        <?php
                        }
                    } ?>
                    <!-- and so on... -->
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
    require_once('./COMPONENT/footer.php.html');

    ?>
</body>

</html>