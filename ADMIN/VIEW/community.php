<?php
// require_once('../../BASE/authAdmin.php');
require_once('../../BASE/connection.php');

$show = false;
$sql = "SELECT * FROM `community`";
if($data = $mysqli->query($sql)){
    $package = array();
    $show = true;
    while ($row = $data->fetch_assoc()) {
       $package[] = $row;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
</head>
<body>
    <div class="container">
        <h1>Data Masyarakat</h1>
        <?php
            if($show){
                generateTable();
            }else{
                ?>
                <span>Data Kosong</span>
                <?php
            }
        ?>
    </div>
</body>
</html>
