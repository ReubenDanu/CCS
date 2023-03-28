<?php
// require_once('../../BASE/authAdmin.php');
require_once('../../../BASE/connection.php');

session_start();
$show = false;
$sql = "SELECT r1.*, r2.response, r2.date as response_date
FROM report as r1 
LEFT JOIN response as r2 ON r1.id_report = r2.id_report
";
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
                            <th colspan="2">Operation</th>
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
                                            <td><span class="report"><?php echo $package[$key]['report'] ?></span></td>
                                            <td><?php echo $package[$key]['date'] ?></td>
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
                                            <td><span class="report"><?php echo $package[$key]['report'] ?></span></td>
                                            <td><?php echo $package[$key]['date'] ?></td>
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