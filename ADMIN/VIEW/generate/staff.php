<?php
// require_once('../../BASE/authAdmin.php');
require_once('../../BASE/connection.php');

session_start();
$show = false;
$sql = "SELECT * FROM `staff`";
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
        <h1>Data Petugas</h1>
        <?php
        if ($show && count($package) != 0) {
            $i = 0;
            ?>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Telp</th>
                        <th>Level</th>
                        <th colspan="2">Operasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($package as $key => $value) {
                        if ($i % 2 != 0) {
                            ?>
                            <tr>
                            
                                <td><?php echo $package[$key]['id_staff'] ?></td>
                                <td><?php echo $package[$key]['name'] ?></td>
                                <td><?php echo $package[$key]['username'] ?></td>
                                <td><?php echo $package[$key]['password'] ?></td>
                                <td><?php echo $package[$key]['telp'] ?></td>
                                <td><?php echo $package[$key]['level'] ?></td>
                                <td><a class="operation-link" href="edit_community.php?id=<?php echo $package[$key]['id_staff'] ?>">edit</a></td>
                                <td><a class="operation-link" href="remove_community.php?id=<?php echo $package[$key]['id_staff'] ?>">remove</a></td>
                            </tr>
                            
                            
                            <?php

                        } else { ?>
                        <tr class="active-row">
                       
                            <td><?php echo $package[$key]['id_staff'] ?></td>
                                <td><?php echo $package[$key]['name'] ?></td>
                                <td><?php echo $package[$key]['username'] ?></td>
                                <td><?php echo $package[$key]['password'] ?></td>
                                <td><?php echo $package[$key]['telp'] ?></td>
                                <td><?php echo $package[$key]['level'] ?></td>
                                <td><a class="operation-link"href="edit_community.php?id=<?php echo $package[$key]['id_staff'] ?>">Edit</a></td>
                                <td><a class="operation-link"href="remove_community.php?id=<?php echo $package[$key]['id_staff'] ?>">Remove</a></td>
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