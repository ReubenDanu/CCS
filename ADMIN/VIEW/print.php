<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
    <link rel="stylesheet" href="./ASSETS/CSS/table.css">
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
    <link rel="stylesheet" href="./ASSETS/CSS/main.css">
    <link rel="stylesheet" href="./ASSETS/CSS/data.css">
</head>

<body>
    
    <?php
    $page = $_GET['data'];
    switch ($page) {
        case 'community':
            $page = './generate/' . $page . 'Base.php';
            require_once($page);
            break;

        case 'report':
            $page = './generate/' . $page . 'Base.php';
            require_once($page);
            break;

        case 'response':
            $page = './generate/' . $page . 'Base.php';
            require_once($page);
            break;

        case 'staff':
            $page = './generate/' . $page . 'Base.php';
            require_once($page);
            break;

        case 'finale_report':
            $page = './generate/' . $page . 'Base.php';
            require_once($page);
            break;

        default:
            $page = './generate/index.php';
            require_once($page);
            break;
    }
    ?>
</body>

</html>