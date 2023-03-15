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
                $id = $_GET['id'];
                $sql = "SELECT * FROM report WHERE report.id_report = '$id'";
                try{
                    $result = $mysqli->query($sql);
                    $tanggapan = false;
                    while($data = $result->fetch_assoc()){
                        
                        ?>
            <form action="../LOGIC/report.php" method="post" enctype="multipart/form-data">
            <h1 class="title">Informasi Laporan</h1>
            <div class="complaint-input-category">
                <span style="display:block;" class="title-info">ID</span>
                <input readonly value="<?php echo $data['id_report'] ?>" placeholder="Masukkan judul laporan anda*" name="id" required="true" type="text"
                class="input-form" />
            </div>
            <div class="complaint-input-category date-group" style="display: block;">
                <span style="display:block;" class="title-info">Tanggal</span>
                <input type="text" class="date-picker-x-input" name="date"
                    readonly value="<?php echo $data['date'] ?>" placeholder="Masukkan tanggal kejadian*" />
                </div>
            <div class="complaint-input-category">
                <span style="display:block;" class="title-info">NIK</span>
                <input readonly value="<?php echo $data['nik'] ?>" placeholder="Masukkan judul laporan anda*" name="nik" required="true" type="text"
                    class="input-form" />
            </div>
            <div class="complaint-input-category">
                <span style="display:block;" class="title-info">Report</span>
                <input readonly value="<?php echo $data['report'] ?>" placeholder="Masukkan isi laporan anda*" name="title" required="true" type="text"
                    class="input-form"></input>
            </div>
            <div class="complaint-input-category">
                <span style="display:block;" class="title-info">Photo</span>
                <img src="../../server/data/img/<?php echo $data['photo'] ?>" name="photo" required="true" alt="photo"
                class="image-form" >
            </div>
            <div class="complaint-input-category">
                <span style="display:block;" class="title-info">Status</span>
                <input readonly value="<?php echo $data['status'] ?>" placeholder="Masukkan judul laporan anda*" name="status" required="true"
                type="text" class="input-form" />
            </div>
           
            <div class="form-button back">
                <a href="./verify.php" name="back" class="button" value="submit">Back
                    </a>
                    
                </div>
            </form>
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
    header('location:./inbox.php');
}
?>