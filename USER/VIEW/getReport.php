<?php
if(session_status() == 0 || session_status() == 1){
    session_start();
}
if(isset($_GET['id'])){
    ?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report - Details</title>
</head>
<body>
    <?php
        require_once('./COMPONENT/navbar.php.html');
        ?>

<main>
    <div class="container">
        <?php
                require_once('../../BASE/authAdmin.php');
                $sql = "SELECT * FROM report WHERE report.id = '$_GET[\"id\"]";

                ?>
            <div class="box">
                <span class="id"></span>    
                <span class="date"></span>
            </div>    
            
            <h1 class="title"></h1>
            <p class="content"></p>
            <div class="embed">
                <img src="" alt="photos">
            </div>
            <div class="status">
                <span></span>
            </div>

            <a href="./inbox.php">Back</a>
        </div>
    </main>

    <?php
        require_once('./COMPONENT/footer.php.html');
    ?>
</body>
</html>

<?php

}else{
    header('location:./'.$_SESSION['page']);
}
?>