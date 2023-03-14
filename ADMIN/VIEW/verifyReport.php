<?php

if (isset($_GET['id']) == false && count($_GET) == 0) {
    header('location:./verify.php');
}


if(session_status() != 2){
    session_start();
}


?>
<?php
// include('auth.php');
// include('page.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT REPORT</title>
    <script src="../../DatePickerX/dist/js/DatePickerX.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../DatePickerX/dist/css/DatePickerX.min.css">
    <link rel="stylesheet" href="./ASSETS/CSS/reset.css" />
    <link rel="stylesheet" href="./ASSETS/CSS/insert_report.css">
    <link rel="stylesheet" href="./ASSETS/CSS/main.css">
</head>

<body>
    <?php
    require_once('../../BASE/authAdmin.php');
    require_once('../../BASE/connection.php');
    require_once('../../BASE/auth.php');
    require_once('./COMPONENT/sidebar.php');
    
   

        $id = $_GET['id'];
        
        $sql = "SELECT * FROM `report` WHERE id_report = '$id'";
        $result = $mysqli->query($sql);
        $data = $result->fetch_assoc();
        ?>
    <main>
       
        <form action="../LOGIC/report.php" method="post" enctype="multipart/form-data">
            <h1 class="title">Verifikasi Laporan</h1>
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
           
            <div class="form-button">
                <button type="submit" name="submit" value="submit">Verifikasi
                    </button>
                    
            </div>
            <div class="form-button back">
                <a href="./verify.php" name="back" class="button" value="submit">Back
                    </a>
                    
                </div>
            </form>
    </main>

    <?php
    require_once('./COMPONENT/footer.php.html');

    ?>

<script>
    const dateInput = document.getElementsByName("date_report")[0];
    window.addEventListener('DOMContentLoaded', function () {
            dateInput.DatePickerX.init({
                mondayFirst: false,
                minDate: null,
                maxDate: function () {
                    let date = new Date();
                    return date;
                },
                clearButton: true
            });

        });
    </script>
</body>

</html>