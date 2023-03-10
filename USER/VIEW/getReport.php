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
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
    <link rel="stylesheet" href="./ASSETS/CSS/getReport.css">
</head>
<body>
    <?php
        require_once('./COMPONENT/navbar.php.html');
        ?>

<main>
    <?php
                require_once('../../BASE/auth.php');
                require_once('../../BASE/connection.php');
                $sql = "SELECT * FROM report WHERE report.id_report =".$_GET['id'];
                try{
                    $result = $mysqli->query($sql);
                    $tanggapan = false;
                    while($data = $result->fetch_assoc()){
                        
                        ?>
            <div class  ="container">
                <span class="header">Id Laporan</span>
                <span class="id data"><?php echo $data['id_report'] ?></span>    
                <span class="header">Tanggal</span>
                <span class="date data"><?php echo $data['date'] ?></span>
            
            <span class="header">Judul</span>
            <h1 class="title data"><?php echo $data['title'] ?></h1>
            <span class="header">Laporan</span>
            <p class="content data"><?php echo $data['report'] ?></p>
            <span class="header">Lampiran</span>
            <div class="embed">
                <img src="../../server/data/img/<?php echo $data['photo'] ?>" alt="photos" class="photo data">
            </div>
            <span class="header">Status</span>
            <span class="status data"><?php echo $data['status'] ?></span>
            
            <?php
            if($tanggapan){
                ?>
                <span class="header">Status</span>
                <span class="response data"><?php echo $data['status'] ?></span>
                <?php
            }else{
                ?>
                <span class="header">Tanggapan</span>
                <span class="response data empty">Belum Ditanggapi</span>

                <?php
            }

            ?>

            
            <span class="header">Action</span>
            <div class="action">
                <a href="./inbox.php" class="button">Back</a>
                <a href="./inbox.php" class="button">Cetak</a>
            </div>
        </div>
<?php
                }
                }catch(Exception $e){
                    
                    die('something went error');
                }
                ?>
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