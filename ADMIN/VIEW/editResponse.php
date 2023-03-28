<?php
require_once('../../BASE/authAdmin.php');
if (session_status() == 0 || session_status() == 1) {
    session_start();
}
if (isset($_GET['id'])) {
    ?>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Report - Details</title>
                <link rel="stylesheet" href="./ASSETS/CSS/reset.css">
                <link rel="stylesheet" href="./ASSETS/CSS/report.css">
                <link rel="stylesheet" href="./ASSETS/CSS/main.css">
            </head>

            <body>
                <?php
                require_once('./COMPONENT/sidebar.php');
                ?>

                <main>
                    <?php
                    require_once('../../BASE/connection.php');
                    $id = $_GET['nik'];
                    $sql = "SELECT * FROM `community` WHERE nik = '$nik'";
                    try {
                        $result = $mysqli->query($sql);
                        while ($data = $result->fetch_assoc()) {
                            var_dump($data);
                            ?>
                                            <form action="../LOGIC/edit_report.php" method="post" enctype="multipart/form-data">
                                                <h1 class="title">Edit Laporan</h1>
                                                <div class="complaint-input-category">
                                                    <span style="display:block;" class="title-info">NIK</span>
                                                    <input value="<?php echo $data['id_report'] ?>" placeholder="Masukkan judul laporan anda*"
                                                        name="id_report" required="true" type="text" class="input-form" />
                                                </div>
                                                <div class="complaint-input-category date-group" style="display: block;">
                                                    <span style="display:block;" class="title-info">Date</span>
                                                    <input type="text" class="date-picker-x-input" name="date" value="<?php echo $data['date'] ?>"
                                                        placeholder="Masukkan tanggal kejadian*" />
                                                </div>
                                                <div class="complaint-input-category">
                                                    <span style="display:block;" class="title-info">NIK</span>
                                                    <input value="<?php echo $data['nik'] ?>" placeholder="Masukkan judul laporan anda*" name="nik"
                                                        required="true" type="text" class="input-form" />
                                                </div>
                                                <div class="complaint-input-category">
                                                    <span style="display:block;" class="title-info">title</span>
                                                    <input placeholder="Masukkan isi laporan anda*"
                                                        name="title" required="true" type="text" class="input-form" value="<?php echo $data['title'] ?>"></input>
                                                </div>
                                                <div class="complaint-input-category">
                                                    <span style="display:block;" class="title-info">Report</span>
                                                    <textarea placeholder="Masukkan isi laporan anda*"
                                                        name="report_content" required="true" type="text" class="input-form"><?php echo $data['report'] ?></textarea>
                                                </div>
                                                <div class="complaint-input-category">
                                                    <span style="display:block;" class="title-info">Photo</span>
                                                   <div class="complaint-input-category">
                    <input placeholder="Lampirkan media*" name="photo" type="file" accept=".pdf,.jpeg,.png,.zip" multiple
                      class="input-form" value="<?php echo $data['photo'] ?>" />
                                                </div>
                                                <div class="complaint-input-category">
                                                    <span style="display:block;" class="title-info">Status</span>
                                                    <select value="<?php echo $data['status'] ?>" placeholder="Masukkan judul laporan anda*"
                                                        name="status" required="true" class="input-form">
                                                    <option value="pending">pending</option>
                                                    <option value="process">process</option>
                                                    <option value="completed">completed</option>
                                                    </select>
                                                </div>                              

                                                          <div class="form-button">
                            <button type="submit" name="submit" value="submit">Edit
                                </button>
                    
                        </div>
                                                <div class="form-button back">
                                                    <a href="./report.php" name="back" class="button">Back
                                                    </a>

                                                </div>
                                            </form>
                                        <?php
                        }
                    } catch (Exception $e) {

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
} else {
    header('location:./report.php');
}
?>